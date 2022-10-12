<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Runtime;
use Whoops\Run;
use GuzzleHttp\Client;


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
Route::view('/','principal')->name('principal');
Route::view('/home', 'home')->name('home');

Route::get('cotizarvista', 'CotizarController@index')->name('cotizar');
Route::post('cotizar', 'CotizarController@store')->name('cotizarv');

Route::get('cotizar2vista', 'CotizarController@index2')->name('cotizar2vista');
Route::post('cotizar2post', 'CotizarController@store2')->name('cotizar2post');

// Route::get('/', function(){
// // $client = new Client([
// //     // Base URI is used with relative requests
// //     'base_uri' => 'https://apiperu.dev/api/ruc/20600787595',
// //     // You can set any number of default request options.
// //     'timeout'  => 2.0,
// // ]);
// //     $response = $client->request('GET', 'posts');
// //     dd($response);
// //     // return view('principal');

// // });