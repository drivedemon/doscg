<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DoScgController extends Controller
{

  public function fibonacci()
  {
    $sequence = 2;
    $seriesNumber = [null, 23, 15, 9, 5, null, null];
    try {
      foreach ($seriesNumber as $key => $value) {
        if (null == $value) {
          if (empty($seriesNumber[$key+1]) && empty($seriesNumber[$key+2])) {
            $flag = ($seriesNumber[$key-2] - $seriesNumber[$key-1]) - $sequence;
            $value = $seriesNumber[$key-1] - $flag;
          } else {
            $key1 = $seriesNumber[$key+1] ?? ($seriesNumber[$key+2] + (($seriesNumber[$key+2] - $seriesNumber[$key+3]) + $sequence));
            $key2 = $seriesNumber[$key+2] ?? ($seriesNumber[$key+3] + (($seriesNumber[$key+3] - $seriesNumber[$key+4]) + $sequence));
            $value = $key1 + (($key1 - $key2) + $sequence);
          }
          $seriesNumber[$key] = $value;
        }
      }
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()]);
    }
    return response()->json(['data' => $seriesNumber]);
  }

  public function calculate()
  {
    $a = 21;
    $b = 23 - $a;
    $c = -$a * 2;

    return response()->json(['b' => $b, 'c' => $c]);
  }

  public function map()
  {
    $scgBangsue = ['lat' => 13.8032919, 'long' => 100.5343092];
    $centralWorld = ['lat' => 13.7466304, 'long' => 100.5371464];
    $apiKey = env('GOOGLE_MAP_KEY', 'GOOGLE_MAP_KEY');
    $url = "https://maps.googleapis.com/maps/api/directions/json?origin={$scgBangsue['lat']},{$scgBangsue['long']}&destination={$centralWorld['lat']},{$centralWorld['long']}&key={$apiKey}";

    try {
      $client = new Client([
        'verify' => false
      ]);
      $response = $client->get($url);
      $responseContent = json_decode($response->getBody()->getContents());
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()]);
    }

    return response()->json(['data' => $responseContent]);
  }

  // example call webhook api
  public function notify()
  {
    $textList = [
      'สวัสดี',
      'ทำไร',
      'เป็นไร',
      'เทส',
      'ตัวอย่าง'
    ];
    $matchMessage = false;
    $responseMessage = "Your bot is amazing!";

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
          $responseMessage = $textMessage;
        }
      }

      if (false == $matchMessage) {
        // do something after store in DB
        Notification::create([
          'text' => $textMessage,
          'reply_token' => $replyToken
        ]);
      }
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()]);
    }

    return response()->json(['data' => $responseMessage]);
  }

}
