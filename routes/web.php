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
    return view('index');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/group', function () {
    return view('group');
});

Route::get('/user', function () {
    return view('user.index');
});
Route::get('/vacancy', function () {
    return view('user.vacancy');
});
Route::get('/idea', function () {
    return view('user.idea');
});