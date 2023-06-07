<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Dashboard',
    ];
    return view('welcome', $data);
});

Route::get('/table', function () {
    $data = [
        'title' => 'Table',
    ];
    return view('table', $data);
});

Route::get('dataTables', function () {
    $data = [
        'title' => 'Data Table',
    ];
    return view('dataTables', $data);
});
