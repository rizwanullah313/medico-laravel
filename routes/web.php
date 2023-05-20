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
Route::get('/myportal/view_claiments',[App\Http\Controllers\DashboardContoller::class,'my_cases'])->name('my_cases');
Route::get('/myportal/me_income_report',[App\Http\Controllers\DashboardContoller::class,'my_invoices'])->name('my_invoices');
Route::get('/myportal/settings',[App\Http\Controllers\SettingController::class,'setting'])->name('setting');

Route::get('/myportal/define_solicitor',[App\Http\Controllers\SettingController::class,'define_solicitor'])->name('define_solicitor');
Route::get('/myportal/define_locations',[App\Http\Controllers\SettingController::class,'define_locations'])->name('define_locations');
Route::get('/myportal/define_expert_procedures',[App\Http\Controllers\SettingController::class,'define_expert_procedures'])->name('define_expert_procedures');
Route::get('/myportal/add_referrer',[App\Http\Controllers\SettingController::class,'add_referrer'])->name('add_referrer');
