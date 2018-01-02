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
Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('login', function()
{
    return View::make('pages.login');
});

Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('products', function()
{
    return View::make('pages.products');
});

Route::get('news', function()
{
    return View::make('pages.news');
});

Route::get('contact', function()
{
    return View::make('pages.contact');
});

Route::get('detail', function()
{
    return View::make('pages.detail');
});

Route::get('admin', function()
{
    return View::make('pages.admin');
});

Route::get('allproducts', function()
{
    return View::make('pages.allproducts');
});

Route::get('management', function()
{
    return View::make('pages.management');
});