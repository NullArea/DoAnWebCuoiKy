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

Route::get('contact', 'pageController@contact');
Route::post('contact', 'pageController@pcontact');


Route::get('detail/{id}', 
    ['as'=>'detail','uses'=>'pageController@detail']);




 // ADMIN   
Route::get('allproducts', 'pageController@allproducts');

Route::get('management', 'pageController@management');

Route::get('changepass', 'pageController@changepass');

Route::get('addmotor', 'pageController@addmotor');
Route::post('addmotor', 'pageController@paddmotor');

Route::get('addmodel', 'pageController@addmodel');
Route::post('addmodel', 'pageController@paddmodel');

Route::get('remove', 'pageController@remove');
Route::post('remove', 'pageController@premove');

Route::get('editmodel', 'pageController@editmodel');
Route::post('editmodel', 'pageController@peditmodel');


//Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
