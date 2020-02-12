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
    return view('first');
});
Route::get('indexcafe', function () {
    return view('pos.index');
});
Route::get('cart', function () {
    return view('pos.cart');
});
Route::get('indexfoto/paket/{nama_paket}', function ($nama_paket) {
    return view('fotostudio.indexfoto',compact('nama_paket'));
});
// Route::get('login', function () {
//     return view('backend.login');
// });
// Route::get('gallery', function () {
//     return view('fotostudio.gallery');
// });
Route::resource('gallery','FrontgalleryController');
Route::get('about', function () {
    return view('fotostudio.about');
});
Route::get('register', function () {
    return view('auth.register');
});
Route::get('login', function () {
    return view('auth.login');
});
Auth::routes();
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function () {
    Route::resource('minuman', 'MinumanController');
    Route::resource('makanan', 'MakananController');
    Route::resource('fotostudio', 'FotostudioController');
 Route::resource('kategori', 'KategoriController');
  Route::resource('kategorifoto', 'KategoriFotoController'); 
  Route::resource('gallery', 'GalleryController');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/struk', 'StrukController@index');
