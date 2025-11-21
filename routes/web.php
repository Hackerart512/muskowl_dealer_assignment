<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Front\SiteController;

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

Route::get('/', [SiteController::class, 'index'])->name('front.index');
Route::post('/contact/submit', [SiteController::class, 'contactSubmit'])->name('contact.submit');

Route::prefix('admin')->group(function () {

   //------------ ADMIN LOGIN SECTION ------------ 
   Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
   Route::post('/login', [LoginController::class, 'login'])->name('admin.login.submit');
 
   Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
   //------------ ADMIN LOGIN SECTION ENDS ------------

   //------------ ADMIN DASHBOARD & PROFILE SECTION ------------
   Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
   Route::get('/lead', [LeadController::class, 'index'])->name('admin.leads');
   Route::get('/lead/datatables', [LeadController::class, 'datatables'])->name('admin.leads.datatables');
   Route::get('/lead/status/{id1}/{id2}', [LeadController::class, 'status'])->name('admin.leads.status');

});
