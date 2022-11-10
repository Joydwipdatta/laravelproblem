<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\formcontroller;
use App\Models\Register;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return view('index');
   }
   );
Route::get('index',[formcontroller::class,'index']);

Route::view('login','sess');
Route::post('login',[formcontroller::class,'sess']);


Route::view('/enter','register'); 
Route::get('enter',[formcontroller::class,'show']);
Route::post('/enter',[formcontroller::class,'show']);
//Route::view('login','login');
//Route::post('loginuser',[formcontroller::class,'custom_login']);
Route::view('form','form_one');
Route::post('form',[formcontroller::class,'form']);

Route::view('form/2','form_two');
Route::post('form/2',[formcontroller::class,'form_two']);

Route::view('submit','form_three');
Route::post('submit',[formcontroller::class,'form_three']);

