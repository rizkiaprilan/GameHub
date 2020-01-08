<?php

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
Auth::routes();

Route::get('/', function () {return view('index');})->name('index');
Route::get('/fortnite', function () {return view('Games.fortnite');})->name('fortnite');
Route::get('/fortnite', function () {return view('Games.leagueoflegends');})->name('leagueoflegends');
Route::get('/fortnite', function () {return view('Games.CS');})->name('CS');
Route::get('/fortnite', function () {return view('Games.apex');})->name('apex');
Route::get('/fortnite', function () {return view('Games.dota');})->name('dota');

Route::get('/aboutus', function () {return view('aboutus');})->name('aboutus');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/home', 'HomeController@index')->name('home');
