<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $nome="Rai";
    $idade=32;

    return view('welcome',['nome' => $nome, 'idade'=>$idade]);
});

Route::get('/produtos', function () {

    return view('produtos');
});

Route::get('/contact', function () {

    return view('contats');
});