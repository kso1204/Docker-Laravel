<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivateMessagesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::get('get-private-message-notification',[App\Http\Controllers\PrivateMessageController::class, 'getUserNotification']);


/* Route::post('get-private-messages','PrivateMessageController@getPrivateMessages');
Route::post('get-private-message','PrivateMessageController@getPrivateMessageById');
Route::post('get-private-messages-sent','PrivateMessageController@getPrivateMessageSent');
Route::post('send-private-message','PrivateMessageController@sendPrivateMessage'); */