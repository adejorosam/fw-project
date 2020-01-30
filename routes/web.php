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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/terms', 'PagesController@terms');
Route::get('/privacy-policy', 'PagesController@policy');
Route::get('/mobile', 'PagesController@mobile');
Route::get('/datascience', 'PagesController@datascience');
Route::get('/webdev', 'PagesController@webdev');
Route::get('/uiux', 'PagesController@uiux');
Route::resource('program','ProgramsController');
Route::resource('payment_status', 'PaymentStatusController');
Route::resource('privilege', 'PrivilegesController');
Route::resource('admin', 'AdminController');
Route::resource('/user', 'UserController');
Route::get('/dashboard', 'AdminDashBoard@dashboard');
Route::get('', 'AdminController@welcome');
Route::get('/programs/{{id}}', 'AdminController@welcome');



