<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegumeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fruit',[FruitController::class, 'index'])->name('fruit');
Route::get('/fruit-show/{id}',[FruitController::class, 'show'])->name('show');

Route::get('/legume',[LegumeController::class, 'index'])->name('legume');
Route::get('/legume-show/{id}',[LegumeController::class, 'show'])->name('show');
