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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myportal/dashboard',[App\Http\Controllers\DashboardContoller::class,'show'])->name('show_dashboard');
Route::get('/myportal/add_claiment',[App\Http\Controllers\DashboardContoller::class,'start_New_Report'])->name('start_new_report');

