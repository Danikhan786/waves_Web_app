<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' ,[FrontendController::class, 'index'])->name('index');
Route::get('/privacy-policy' ,[FrontendController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/term-condition' ,[FrontendController::class, 'termCondition'])->name('termCondition');