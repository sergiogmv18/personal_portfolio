<?php

use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TranslateController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PortofolioController::class,'index'])->name('index');
Route::post('/contact-send', [PortofolioController::class, 'sendContact'])->name('sendContact');
Route::get('/change-language/{locale}', [TranslateController::class, 'changeLanguage'])->name('change.language');


