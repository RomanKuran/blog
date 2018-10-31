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

Route::get('index', 'MessagesController@index');
Route::post('insert', 'MessagesController@insert');
Route::post('edit', 'MessagesController@edit');
Route::post('delete', 'MessagesController@delete');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index', function () {
//     $messages = Messages::getAllMessages();
//     // $select_messages = DB::table('messages')->get();
//     return view('index', compact('messages'));
// });
