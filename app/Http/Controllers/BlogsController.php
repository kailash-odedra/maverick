<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blogs;


class BlogsController extends Controller
{
  // function Blogs()
    /*{
        $data['Blogs'] = Blog::all();
        ($data);                                                                                                                                              
        return view('Blogs');
    }*/
    public function Blogs()
    {
       $data['blog'] = Blogs::all();
        return view('Blogs')->with($data);
    }

    public function BlogsDetail($slug)
    {

        $data['blog'] = Blogs::where('Slug', $slug)->first();
        return view('BlogsDetail')->with($data);
    }
}