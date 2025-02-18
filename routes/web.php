<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController; // Tambahkan Controller

// Route untuk halaman utama portofolio
Route::get('/', [PortfolioController::class, 'index']);
