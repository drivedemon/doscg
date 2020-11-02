<?php
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoScgController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('fibonacci', [DoScgController::class, 'fibonacci'])->name('fibonacci');
Route::get('calculate', [DoScgController::class, 'calculate'])->name('calculate');
Route::get('map', [DoScgController::class, 'map'])->name('map');
Route::get('notify', [DoScgController::class, 'notify'])->name('notify');
