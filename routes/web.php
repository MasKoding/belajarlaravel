<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/siswa',function (){
//   return view('siswa');
//  });
// ? tidak wajib di isi
// Route::get('/siswa/{nama}',function ($nama){
//     return view('siswa',[
//      'nama'=>$nama
//     ]);
  
//    });

Route::get('/siswa/{nama?}',function ($nama=null){
  return view('siswa',[
   'nama'=>$nama
  ]);
 });

 // [namacontroler::class,namafungsi]
 
 Route::get('blog/index',[BlogController::class,'index']);
 Route::get('blog/tentang',[BlogController::class,'tentang']);