<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //index
    function index(){
        // tampilkan view dalam folder blog dan buat file index
       
        $data = [
            [
                'id'=>1,
                'title'=>'Belajar Laravel Pemula',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'category'=>'Education',
                'published'=>true,
                'image'=>'/image/laravel.png',
                'video'=>'https://www.youtube.com/embed/_aXKg7LDcxU',
                'created_date'=>date('Y-m-d')
            ],
            [
                'id'=>2,
                'title'=>'Belajar Jetpack Compose Kotlin',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'category'=>'Education',
                'published'=>true,
                'image'=>'/image/kotlin.png',
                'video'=>'https://www.youtube.com/embed/cDabx3SjuOY',
                'created_date'=>date('Y-m-d')
            ],

        ];

        return view('blog.index',compact('data'));
     }
    function tentang(){
        // tampilkan view dalam folder blog dan buat file index
        return view('blog.tentang');
     }

     function kontak(){
        return view('blog.kontak');
      }
}
