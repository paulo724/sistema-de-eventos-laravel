<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\EventController;
use Illuminate\Console\Scheduling\Event;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);


Route::get('/contact', function () {
    return view('welcome');
});


Route::get('/produtos/{id}', function ($id) {
    return view('products', ['id' => $id]);
});
