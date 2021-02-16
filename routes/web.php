<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegumeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fruit',[FruitController::class, 'index'])->name('fruit');
Route::get('/fruit-show/{id}',[FruitController::class, 'show'])->name('show');

Route::get('/legume',[LegumeController::class, 'index'])->name('legume');
Route::get('/legume-show/{id}',[LegumeController::class, 'show'])->name('show');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/admin',[AdminController::class, 'index']);

Route::get('/administration', function (Request $request){

    if( Str::contains($request->reponse,"@")){
        return view('admin');
    }else{
        return redirect()->back();
    }
});