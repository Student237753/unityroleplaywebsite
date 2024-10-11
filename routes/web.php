<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnityRoleplayController;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [UnityRoleplayController::class, 'index'])->name('index');

//Route::get('/privacybeleid', function () {
//    return view('privacybeleid');
//});
Route::get('/contact', [UnityRoleplayController::class, 'contact'])->name('contact');
Route::get('/regels', [UnityRoleplayController::class, 'regels'])->name('regels');
