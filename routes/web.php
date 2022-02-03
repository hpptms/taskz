<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{any}', function() {
     return view('welcome');
})->where('any', '.*');

// Route::get('/tasks', 'TaskController@index');
// Route::post('/tasks', 'TaskController@store');
// Route::get('/tasks/{task}', 'TaskController@show');
// Route::put('/tasks/{task}', 'TaskController@update');
// Route::delete('/tasks/{task}', 'TaskController@destroy');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
