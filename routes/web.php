<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

// Route untuk halaman depan (welcome)
Route::get('/', [FrontPageController::class, 'welcome'])->name('welcome');

// Route untuk halaman harga per karyawan
Route::get('/pay-per-employee', [FrontPageController::class, 'employeePrice'])->name('pay.employee');

// Route untuk halaman harga per perusahaan
Route::get('/pay-per-contract', [FrontPageController::class, 'contractPrice'])->name('pay.contract');

Route::get('/discuss-schedule', [FrontPageController::class, 'discuss'])->name('discuss');
