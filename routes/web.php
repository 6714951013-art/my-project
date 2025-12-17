<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\facades\DB;

Route::get('/', function () {
    $results = DB::table('TBL_USER')->get();
    return $results;
});

Route::get('/', function () {
    return view('welcome');
});
