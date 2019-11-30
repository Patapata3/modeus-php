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

Route::get('/', function () {
    return view('welcome');
});
Route::get('foo', function() {return "Hello world";});

Route::get('occupations/{trajectoryName}', function($trajectoryName) {
    $trajectoryId = App\Trajectory::query()->where('name', '=', str_replace('+', ' ', $trajectoryName))->first()->getAttribute('id');
    return $trajectoryId;
});
