<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    //
    function Team()
    {
        $data['team'] = Team::all();
        

        return view('team')->with($data);
    }
}
