<?php

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

//Route::get('/', function () {
  //  return view('welcome'); 
//});
Route::group(['middleware'=> ['auth']],function(){
  Route::get('/home', 'pageController@home');
  Route::get('/profile', 'pageController@profile');
  Route::get('/mahasiswa', 'pageController@mahasiswa');
  Route::get('/contact', 'pageController@contact');
  
  Route::get('/mahasiswa/pencarian','pageController@pencarian');
  Route::get('/mahasiswa/pencariannm','pageController@pencariannm');
  Route::get('/mahasiswa/formtambah','pageController@tambah');
  Route::post('/mahasiswa/simpan','pageController@simpan');
  Route::get('/mahasiswa/formedit/{id}','pageController@edit');
  Route::put('/mahasiswa/update/{id}','pageController@update');
  Route::get('/mahasiswa/delete/{id}','pageController@delete');
  Route::get('/logout','AuthController@logout');
});

Route::group(['middleware'=> ['guest']],function(){ 
  Route::get('/register','AuthController@register');
  Route::post('/simpan','AuthController@simpan');
  Route::get('/','AuthController@login');
  Route::post('/ceklogin','AuthController@ceklogin');
});



Route::get('/index',function (){
  return view('index');
});
Route::get('/task',function (){
  return view('task');
}); 
