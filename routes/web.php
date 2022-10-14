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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('beranda');
});
// Route::get('/aboutUs', function () {
//     return view('pages.about-us');
// });





//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');  //mau buat link -> utk ngarahin ke HomeController 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/daftar', 'IdentitasController@daftar')->name('daftar');
Route::post('/daftar','IdentitasController@daftarMhs')->name('daftar');
Route::get('/tampil', 'IdentitasController@tampilMhs')->name('tampil');
Route::get('/profile', 'UserProfileController@myProfile')->name('profil');
Route::get('/courses', 'CourseController@course')->name('courses');
Route::get('/course-details', 'CourseController@courseDetails')->name('course-details');
Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio');
Route::get('/aboutUs', 'AboutUsController@aboutUs')->name('about-us'); //nama route about-us dari kelas AboutUsController method aboutUs

