<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" ->middleware group. Now create something great!
|
*/
// use App\Http\->Middleware\checkRole;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome')->middleware('suspend');
Route::get('/about', 'PagesController@about')->middleware('suspend');
Route::get('/contact', 'PagesController@contact')->middleware('suspend');
Route::get('/terms', 'PagesController@terms')->middleware('suspend');
Route::get('/suspend', 'PagesController@suspend');
Route::get('/privacy-policy', 'PagesController@policy')->middleware('suspend');
Route::get('/mobile', 'PagesController@mobile')->middleware('suspend');
Route::get('/datascience', 'PagesController@datascience')->middleware('suspend');
Route::get('/webdev', 'PagesController@webdev')->middleware('suspend');
Route::get('/uiux', 'PagesController@uiux')->middleware('suspend');
Route::get('/dashboard', 'AdminDashBoard@dashboard')->middleware('verifyRole');
Route::resource('program','ProgramsController')->middleware('verifyRole');
Route::resource('payment_status', 'PaymentStatusController')->middleware('verifyRole');
Route::resource('privilege', 'PrivilegesController')->middleware('verifyRole');
Route::resource('admin', 'AdminController')->middleware('verifyRole');
Route::resource('/user', 'UserController')->middleware('verifyRole');
Route::resource('userdashboard', 'DashboardController')->middleware('suspend');
Route::resource('role', 'RoleController')->middleware('verifyRole');
Route::resource('permission', 'PermissionController')->middleware('verifyRole');





