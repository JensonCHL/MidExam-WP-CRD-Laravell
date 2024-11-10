<?php

use App\Http\Controllers\customer;
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

Route::get('/home',[customer::class,'index'])->name('home');
Route::get('/student',[customer::class,'student'])->name('student');
Route::get('/create',[customer::class,'createPage'])->name('createPage');
Route::post('/store',[customer::class,'inputDb'])->name('store');
Route::post('/add-student',[customer::class,'addStudent'])->name('student.add');
Route::delete('/{customer}/destroy',[customer::class,'deleteCustomer'])->name('customer.delete');




