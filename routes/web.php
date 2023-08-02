<?php

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
    return view('login');
});
route::view('/login','login');
route::view('/dashboard','home');
route::view('/register','regis');
route::view('/profile','profil');
route::view('/about','tentang');
route::view('/contact','kontak');
route::view('/addres','alamat');
route::view('/lmpv','lmpv');
route::view('/suv','suv');
route::view('/at','matik');
route::view('/mt','manual');
route::view('/blank','blank');
route::view('/now','paynow');
route::view('/history','payold');
route::view('/rent','saatini');
route::view('/hisrent','histori');
route::view('/detmob','detailmobil');
route::view('/pay','payment');
route::view('/mandiri','mandiri');
route::view('/reset','pw');
route::view('/daftar','regis');
