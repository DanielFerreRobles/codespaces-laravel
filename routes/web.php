<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('suma');
});

Route::post('/suma', function () {
    $numero1 = request('numero1');
    $numero2 = request('numero2');
    $suma = $numero1 + $numero2;

    return view('suma', ['suma' => $suma]);
});
