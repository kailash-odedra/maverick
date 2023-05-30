<?php

namespace App\Http\Controllers;
use App\Models\Service; //Model
use App\Models\About; //Model
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Articals;
use App\Models\Blogs;
use App\Models\Testmonials;
use App\Models\Client;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home()
    {
       $data['service'] = Service::offset(0)->limit(6)->get(); 
       $data['about'] = About::offset(0)->limit(2)->get();
    //    dd($data); 
       $data['category'] = Category::offset(0)->limit(4)->get();
       $data['portfolio'] = Portfolio::all();
       $data['client'] = Client::all();

       $data['blog'] = Blogs::offset(0)->limit(3)->get();
       $data['testmonials'] = Testmonials::offset(0)->limit(3)->get();
      

        return view('index')->with($data);

    }

   
}