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

Route::get('/home', [Eventcontroller::class, 'index'])->name('home');
Route::get('/', [Eventcontroller::class, 'index']);
//delete
Route::delete('/delete/¨{id}', [Eventcontroller::class, 'destroy'])->name('delete')->middleware('isadmin','auth');
//create
Route::get('/create', [Eventcontroller::class, 'create'])->name('createEvent')->middleware('isadmin','auth');
Route::post('/', [Eventcontroller::class, 'store'])->name('storeEvent')->middleware('isadmin','auth');
//update
Route::get('/edit/{id}', [Eventcontroller::class, 'edit'])->name('editEvent')->middleware('isadmin','auth');
Route::patch('/event/{id}', [Eventcontroller::class, 'update'])->name('updateEvent')->middleware('isadmin','auth');
//show
Route::get('/show/{id}', [Eventcontroller::class, 'show'])->name('showEvent');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//pivot routes
//inscribirse
Route::get('/inscribe/{id}', [EventController::class, 'inscribe'])->middleware('auth')->name('inscribe');
Route::get('/cancelInscribe/{id}', [EventController::class, 'cancelInscribe'])->middleware('auth')->name('cancelInscribe');
