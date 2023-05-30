<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;


class AboutusController extends Controller
{
    
    public function Aboutus()
    {
        // $data['Aboutus'] = Aboutus::all();
        

         return view('About-us');
    }
    }

    