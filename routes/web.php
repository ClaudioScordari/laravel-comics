<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $allComics = config('comics');

    return view('comics', [
        'comics' => $allComics
    ]);
});
