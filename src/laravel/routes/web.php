<?php

use Carbon\Carbon;
use App\Jobs\SendEmailJob;
use App\Models\PrivateMessage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivateMessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home2', [App\Repository\PrintPattern::class,'index']);


Route::get('sendEmail',function(){

    /* $job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(10));
    dispatch($job); */

    SendEmailJob::dispatch()->delay(now()->addSeconds(3));

    return 'Email is Send Properly';
});

Route::get('test',function(){
    return PrivateMessage::where('id',1)->first();
});


