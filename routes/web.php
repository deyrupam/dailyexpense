<?php

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
Route::Resource('/bill','ExpenseController')->middleware('verified');
Route::post('/create/bill','ExpenseController@store')->middleware('verified');
Route::get('/transaction','TransactionController@index')->middleware('verified');

//Auth::routes();
Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/send/email', 'HomeController@mail');
Route::get('/contact',[
    'uses'=>'ContactMessageController@create'
]);
Route::post('/contact',[
    'uses'=>'ContactMessageController@store',
    'as' =>'contact.store'
]);
Route::get('/seen',[
    'uses'=>'SeenController@index',
    'as' =>'seen.index'
]);
