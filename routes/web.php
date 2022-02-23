<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Tasks;
use App\Models\User;

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
Route::group(['middleware' => 'auth'], function(){
Route::get('/dashboard', function () {
    return view('dashboard');
 })->name('dashboard');
Route::resource('tasks', 'TaskController');
Route::get('status/{id}', 'StatusController@show');
Route::get('user/{id}', 'UserController@show');
});
require __DIR__.'/auth.php';



