<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn()=>Inertia::render('login-page/login'));

Route::get('/register', fn()=>Inertia::render('register-page/register'));

Route::get('/forgot_password', fn()=>Inertia::render('forgot-password-page/forgot-password'));

Route::get('/code', fn()=>Inertia::render('code-page/code'));

Route::get('/new_password', fn()=>Inertia::render('new-password-page/new-password'));