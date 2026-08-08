<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/assessment', function () {
    return view('admin.assessment');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});


Route::get('/user/profile', function () {
    return view('user.profile');
});

Route::get('/user/contact', function () {
    return view('user.contact');
});
