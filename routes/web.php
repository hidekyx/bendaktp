<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EktpController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\PengaduanController;
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
Route::get('/cek', [FrontpageController::class, 'cek'])->name('cek');
Route::get('/pengaduan', [FrontpageController::class, 'pengaduan'])->name('pengaduan');
Route::get('/status', [FrontpageController::class, 'status'])->name('status');
Route::get('/pengajuan', [FrontpageController::class, 'pengajuan'])->name('pengajuan');

Route::get('/login', [AuthController::class, 'login_view']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/autentikasi', [AuthController::class, 'login_auth']);

Route::get('/dashboard', [DashboardController::class, 'beranda'])->name("dashboard.beranda");

Route::get('/dashboard/ektp', [EktpController::class, 'ektp'])->name("dashboard.ektp");
Route::get('/dashboard/ektp/create', [EktpController::class, 'ektp_create'])->name("dashboard.ektp-create");
Route::post('/dashboard/ektp/store', [EktpController::class, 'ektp_store'])->name("dashboard.ektp-store");
Route::get('/dashboard/ektp/edit/{id_ektp}', [EktpController::class, 'ektp_edit'])->name("dashboard.ektp-edit");
Route::post('/dashboard/ektp/update/{id_ektp}', [EktpController::class, 'ektp_update'])->name("dashboard.ektp-update");
Route::post('/dashboard/ektp/delete/{id_ektp}', [EktpController::class, 'ektp_delete'])->name("dashboard.ektp-delete");

Route::post('/dashboard/ektp/process/{id_ektp}', [EktpController::class, 'ektp_process'])->name("dashboard.ektp-process");
Route::get('/dashboard/ektp/print_view/{id_ektp}', [EktpController::class, 'ektp_print_view'])->name("dashboard.ektp-print-view");
Route::post('/dashboard/ektp/print_action/{id_ektp}', [EktpController::class, 'ektp_print_action'])->name("dashboard.ektp-print-action");
Route::post('/dashboard/ektp/retrieve/{id_ektp}', [EktpController::class, 'ektp_retrieve'])->name("dashboard.ektp-retrieve");
Route::get('/dashboard/ektp/detail/{id_ektp}', [EktpController::class, 'ektp_detail'])->name("dashboard.ektp-detail");
Route::post('/dashboard/ektp/export', [EktpController::class, 'ektp_export'])->name("dashboard.ektp-export");

Route::get('/dashboard/pengaduan', [PengaduanController::class, 'pengaduan'])->name("dashboard.pengaduan");
Route::post('/dashboard/pengaduan/cek_nik/{nik}', [PengaduanController::class, 'pengaduan_cek_nik'])->name("dashboard.pengaduan-cek-nik");
Route::post('/dashboard/pengaduan/submit', [PengaduanController::class, 'pengaduan_submit'])->name("dashboard.pengaduan-submit");
Route::post('/dashboard/pengaduan/process/{id_pengaduan}', [PengaduanController::class, 'pengaduan_process'])->name("dashboard.pengaduan-process");
Route::get('/dashboard/pengaduan/report_view/{id_pengaduan}', [PengaduanController::class, 'pengaduan_report_view'])->name("dashboard.pengaduan-report-view");
Route::post('/dashboard/pengaduan/report_action/{id_pengaduan}', [PengaduanController::class, 'pengaduan_report_action'])->name("dashboard.pengaduan-report-action");

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