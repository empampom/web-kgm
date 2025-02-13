<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/usg-kamar_bedah', function () {
    return view('usg_kamar_bedah');
})->name('usg_kamar_bedah');
Route::get('/usg-urologi', function () {
    return view('usg_urologi');
})->name('usg_urologi');
Route::get('/digital-radiology', function () {
    return view('digital_radiology');
})->name('digital_radiology');
Route::get('/console-ct-scan', function () {
    return view('console_ct_scan');
})->name('console_ct_scan');
