<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('companies', App\Http\Controllers\CompanyController::class);

Route::get('/companies/delete/{id}',[App\Http\Controllers\CompanyController::class,'confirmDelete'])->name('companies.confirmDelete');

