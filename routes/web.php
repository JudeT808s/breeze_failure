<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/notes', [NoteController::class, 'index']); 

Route::get('/notes/create', [NoteController::class, 'create']);

Route::post('/notes', [NoteController::class, 'store']);


Route::resource('/notes', NoteController::class)->middleware(['auth']);