<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trajectory;

class TrajectoryController extends Controller
{
    public function getTrajectories()
    {
        return Trajectory::all();
    }
}
