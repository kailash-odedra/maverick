<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;


class SubportfolioController extends Controller
{
    //
    function Subportfolio()
    {        
       $data['portfolio'] = Portfolio::all();

        return view('Subportfolio')->with($data);
    }
}