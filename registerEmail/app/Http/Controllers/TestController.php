<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function register($title) 
    {
        return "<h1>$title</h1>";
    }

    public function author($title,$author)
    {
        $data['title']=$title;
        $data['author']=$author;
        
       // return "<h1>The book $title is written by $author</h1>";
       return view('home', $data);
    }
}
