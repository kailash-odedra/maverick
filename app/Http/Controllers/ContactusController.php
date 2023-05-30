<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;


class ContactusController extends Controller
{
    //
    function Contactus()
    {
        // $data['Contactus'] = Contactus::all();
        

        return view('Contactus');
    }
}