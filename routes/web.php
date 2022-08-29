<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
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
//     return view('home');
// });

Auth::routes();

Route::get('/home', [Eventcontroller::class, 'index']);
Route::get('/', [Eventcontroller::class, 'index'])->name('home');
//delete
Route::delete('/delete/¨{id}', [Eventcontroller::class, 'destroy'])->name('delete');
//create
Route::get('/create', [Eventcontroller::class, 'create'])->name('createEvent');
Route::post('/', [Eventcontroller::class, 'store'])->name('storeEvent');
//update
Route::get('/edit/{id}', [Eventcontroller::class, 'edit'])->name('editEvent');
Route::patch('/event/{id}', [Eventcontroller::class, 'update'])->name('updateEvent');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
