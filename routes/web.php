<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnityRoleplayController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/UnityRoleplay', [UnityRoleplayController::class, 'index'])->name('index');

Route::get('/UnityRoleplay/privacybeleid', function () {
    return view('privacybeleid');
});
Route::get('/contact', [UnityRoleplayController::class, 'contact'])->name('contact');
Route::get('/apv', [UnityRoleplayController::class, 'apv'])->name('apv');
