<?php

namespace App\Console;

use App\Models\Notification;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class FetchMessage extends Command
{
  protected $signature = 'cron:fetchmessage';
  protected $description = 'Fetch line message from webhook and store DB';

  /**
  * Execute the console command.
  */
  public function handle()
  {
    $textList = [
      'สวัสดี',
      'ทำไร',
      'เป็นไร',
      'เทส',
      'ตัวอย่าง'
    ];
    $matchMessage = false;

    $url = env('WEBHOOK_API', 'WEBHOOK_API');
    $token = env('WEBHOOK_AUTH_TOKEN', 'WEBHOOK_AUTH_TOKEN');

    try {
      $client = new Client([
        'verify' => false,
        'headers' => ['Authorization' => "Bearer {$token}"]
      ]);
      $response = $client->get($url);
      $responseContent = json_decode($response->getBody()->getContents());
      $responseEvent = $responseContent->data[0]->event->body->events[0];

      $textMessage = $responseEvent->message->text;
      $replyToken = $responseEvent->replyToken;

      foreach ($textList as $key => $value) {
        if (strpos($value, $textMessage) !== false) {
          echo 'Message matching';
          $matchMessage = true;
        }
      }

      if (false == $matchMessage) {
        Notification::create([
          'text' => $textMessage,
          'reply_token' => $replyToken
        ]);
      }
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()]);
    }
  }
}
