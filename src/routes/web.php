<?php

use App\Http\Controllers\TaskController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('localhost以降のURL', 'コントローラー名@関数名')->name('localhost以降のURL.関数名');
Route::get('tasks', 'TaskController@index')->name('tasks.index');
Route::get('/tasks/{id}', 'TaskController@edit')->name('tasks.edit');
Route::post('/tasks/create','TaskController@store')->name('tasks.store');
Route::post('/tasks/delete','TaskController@delete')->name('tasks.delete');