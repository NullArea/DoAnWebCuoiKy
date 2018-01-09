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
Route::get('/', 'pageController@home');

Route::get('register', function()
{
    return View::make('pages.register');
});

Route::get('login', function()
{
    return View::make('pages.login');
});

Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('products', 'pageController@products');

Route::get('news', function()
{
    return View::make('pages.news');
});

Route::get('search', 'pageController@search');
Route::post('search', 'pageController@psearch');

Route::get('contact', 'pageController@contact');
Route::post('contact', 'pageController@pcontact');

Route::get('profile', 'pageController@profile');
Route::post('profile', 'pageController@pprofile');

Route::get('detail/{id}', 
    ['as'=>'detail','uses'=>'pageController@detail']);




 // ADMIN   
Route::get('allproducts', 'pageController@allproducts')->middleware('police');

Route::get('management', 'pageController@management')->middleware('police');

Route::get('changepass', 'pageController@changepass')->middleware('police');

Route::get('addmotor', 'pageController@addmotor')->middleware('police');
Route::post('addmotor', 'pageController@paddmotor')->middleware('police');

Route::get('addmodel', 'pageController@addmodel')->middleware('police');
Route::post('addmodel', 'pageController@paddmodel')->middleware('police');

Route::get('remove', 'pageController@remove')->middleware('police');
Route::post('remove', 'pageController@premove')->middleware('police');

Route::get('editmodel', 'pageController@editmodel')->middleware('police');
Route::post('editmodel', 'pageController@peditmodel')->middleware('police');


//Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
