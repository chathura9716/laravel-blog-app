<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index(){

        $posts = Post::all();
        $latest_posts= Post::orderBy('created_at','DESC')->limit(1)->get();
       
            return view('welcome',compact('posts','latest_posts'));

         
    }
      

    
}
