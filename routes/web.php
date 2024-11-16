<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/user', function () {
    return view('pages.user');
});

Route::get('/client', function () {
    return view('pages.client');
});

Route::get('/project', function () {
    return view('pages.project');
});

Route::get('/task', function () {
    return view('pages.task');
});

Route::get( '/login', function () {
    return view('auth.sign-in');
});
