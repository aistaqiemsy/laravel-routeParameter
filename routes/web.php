<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sapaan/{nama}', function (string $nama) {
    return "Hai $nama";
});

Route::get('/sapaan/{nama}/{alamat}', function (string $nama, string $alamat) {
    return "Hai $nama alamat kamu $alamat";
});

Route::get('/sapaan/{nama}/{alamat}/{umur}', 
function (string $nama, string $alamat, int $umur) {
    return "Hai $nama alamat kamu $alamat dengan umur $umur";
});