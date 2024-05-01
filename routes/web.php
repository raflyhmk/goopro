<?php

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

Route::get('/', function () {
    return view('welcome');
});

// forgot password
Route::get('/forgotpassword', function () {
    return view('pages.forgotPassword');
});

// success password
Route::get('/successpassword', function () {
    return view('pages.successPassword');
});


// register
Route::get('/register', function () {
    return view('pages.register');
});

// login
Route::get('/login', function () {
    return view('pages.login');
});

// user type
Route::get('/usertype', function () {
    return view('pages.usertype');
});

// dashboard manajer perusahaan
Route::get('/manajerperusahaan', function () {
    return view('pages.dashboard.manajerperusahaan');
});

// dashboard admin
Route::get('/admin', function () {
    return view('pages.dashboard.admin');
});

// dashboard pemilik aset
Route::get('/pemilikaset', function () {
    return view('pages.dashboard.pemilikaset');
});

// Tambah Sertifikat Properti
Route::get('/tambahsertifikatproperti', function () {
    return view('pages.dashboard.properti.tambahsertifikatproperti');
});

// Sertifikat Properti
Route::get('/sertifikatproperti', function () {
    return view('pages.dashboard..properti.sertifikatproperti');
});

// Properti
Route::get('/properti', function () {
    return view('pages.dashboard.properti.properti');
});

// status Properti
Route::get('/statusproperti', function () {
    return view('pages.dashboard.properti.statusproperti');
});

// tambah Properti
Route::get('/tambahproperti', function () {
    return view('pages.dashboard.properti.tambahproperti');
});

// tambah sewa properti
Route::get('/tambahsewaproperti', function () {
    return view('pages.dashboard.properti.tambahsewaproperti');
});

// tambah legalitas
Route::get('/legalitaskendaraan', function () {
    return view('pages.dashboard.kendaraan.sertifikatkendaraan');
});

// tambah legalitas
Route::get('/tambahlegalitas', function () {
    return view('pages.dashboard.tambahlegalitas');
});

// kendaraan
Route::get('/kendaraan', function () {
    return view('pages.dashboard.kendaraan.kendaraan');
});

// status kendaraan
Route::get('/statuskendaraan', function () {
    return view('pages.dashboard.kendaraan.statuskendaraan');
});

// tambah kendaraan
Route::get('/tambahkendaraan', function () {
    return view('pages.dashboard.kendaraan.tambahkendaraan');
});

// tambah sewa kendaraan
Route::get('/tambahsewakendaraan', function () {
    return view('pages.dashboard.kendaraan.tambahsewakendaraan');
});

// detail status
Route::get('/detailstatusproperti', function () {
    return view('pages.dashboard.properti.detailstatusproperti');
});

// pembeli
Route::get('/pembeli', function () {
    return view('pages.dashboard.pembeli');
});

// detail aset
Route::get('/detailaset', function () {
    return view('pages.dashboard.detailaset');
});


