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
    return view('home');
})->name('home');

Route::get('chi-siamo', function () {

    $data = [
        'title' => 'Chi siamo',
        'users' => [
            'Gianni',
            'Giacomo',
            'Giuseppe',
            'Giovanni'
        ]
    ];

    return view('chi-siamo', $data);
})->name('chi-siamo');

Route::get('lorem-ipsum', function () {
    $data = [
        'lorem' => 'Testo con lorem ipsum'
    ];
    return view('lorem-ipsum', $data);
})->name('lorem-ipsum');
