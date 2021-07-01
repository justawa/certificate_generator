<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\membercontroller;

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
    return view('index');
});
Route::view('index', 'index');
Route::post('index',[membercontroller::class,'savedata']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show',[App\Http\Controllers\memberController::class,'show']);
Route::get('/download-pdf',[App\Http\Controllers\memberController::class,'downloadPDF']); 
Route::view('/generate',[App\Http\Controllers\memberController::class,'certificate']);
Route::view('student', 'student');
Route::view('test', 'test');