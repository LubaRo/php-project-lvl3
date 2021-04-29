<?php

use App\Models\Url;
use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});

Route::get('/urls', function () {
    return view('urls')
        ->with('urls', Url::all());
});

Route::post('/url', [UrlController::class, 'update']);

Route::get('/urls/{url}', function (Url $url) {
    return view('url')
        ->with('url', $url);
})->name('urlsList');
