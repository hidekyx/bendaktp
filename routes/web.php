<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\InfografisController;
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

Route::get('/', [FrontpageController::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'login_view']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/autentikasi', [AuthController::class, 'login_auth']);

Route::get('/dashboard', [DashboardController::class, 'beranda'])->name("dashboard.beranda");

Route::get('/dashboard/ektp', [DashboardController::class, 'ektp'])->name("dashboard.ektp");

Route::get('/dashboard/infografis', [InfografisController::class, 'infografis'])->name("dashboard.infografis");
Route::get('/dashboard/infografis/create', [InfografisController::class, 'infografis_create'])->name("dashboard.infografis-create");
Route::post('/dashboard/infografis/store', [InfografisController::class, 'infografis_store'])->name("dashboard.infografis-store");
Route::get('/dashboard/infografis/edit/{id_infografis}', [InfografisController::class, 'infografis_edit'])->name("dashboard.infografis-edit");
Route::post('/dashboard/infografis/update/{id_infografis}', [InfografisController::class, 'infografis_update'])->name("dashboard.infografis-update");
Route::post('/dashboard/infografis/delete/{id_infografis}', [InfografisController::class, 'infografis_delete'])->name("dashboard.infografis-delete");

Route::get('/dashboard/faqs', [FaqsController::class, 'faqs'])->name("dashboard.faqs");
Route::get('/dashboard/faqs/create', [FaqsController::class, 'faqs_create'])->name("dashboard.faqs-create");
Route::post('/dashboard/faqs/store', [FaqsController::class, 'faqs_store'])->name("dashboard.faqs-store");
Route::get('/dashboard/faqs/edit/{id_faqs}', [FaqsController::class, 'faqs_edit'])->name("dashboard.faqs-edit");
Route::post('/dashboard/faqs/update/{id_faqs}', [FaqsController::class, 'faqs_update'])->name("dashboard.faqs-update");
Route::post('/dashboard/faqs/delete/{id_faqs}', [FaqsController::class, 'faqs_delete'])->name("dashboard.faqs-delete");