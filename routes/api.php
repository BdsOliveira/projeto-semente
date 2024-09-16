<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('pessoas/', function () {
    return 'index pessoas';
});
Route::get('pessoas/{id}', function ($id) {
    return "pessoa {$id}";
});
Route::post('pessoas/', function () {
    return 'post pessoas';
});
Route::put('pessoas/{id}', function ($id) {
    return "put pessoa {$id}";
});
Route::delete('pessoas/{id}', function ($id) {
    return "delete pessoa {$id}";
});
