<?php

use App\Http\Controllers\uploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [uploadController::class, 'index'])->name('index');

