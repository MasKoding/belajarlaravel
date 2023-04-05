<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //index
    function index(){
        // tampilkan view dalam folder blog dan buat file index
        return view('blog.index');
     }
    function tentang(){
        // tampilkan view dalam folder blog dan buat file index
        return view('blog.tentang');
     }

     function kontak(){
        
      }
}
