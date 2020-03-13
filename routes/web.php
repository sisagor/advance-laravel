<?php
use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Artisan;

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

Route::get('sendEmail', function () {
    $sent = SendEmail::dispatch()->delay(now()->addSecond(10));
    echo "Sent Success!";
});

Route::get('work', function () {
    /* Artisan::call('config:clear');
       Artisan::call('cache:clear');
       Artisan::call('config:cache');*/
       Artisan::call('queue:work --tries=3 --stop-when-empty');
       return 'DONE'; //Return anything
});
