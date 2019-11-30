<?php

use Illuminate\Http\Request;
use App\Trajectory;
use App\Occupation;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('trajectories', function() {return Trajectory::with('occupations', 'occupations.salary',
    'occupations.majors')->get();});

Route::get('occupation/{trajectoryName}', function($trajectoryName) {
    $trajectoryId = Trajectory::query()->where('name', '=', str_replace('+', ' ', $trajectoryName))->first()->getAttribute('id');
    return Occupation::query()->where('trajectory_id', '=', $trajectoryId)->with('majors', 'salary')->get();
});

