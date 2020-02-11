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

Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/terms', 'PagesController@terms');
Route::get('/suspend', 'PagesController@suspend');
Route::get('/policy', 'PagesController@policy');
Route::get('/mobile', 'PagesController@mobile');
Route::get('/datascience', 'PagesController@datascience');
Route::get('/webdev', 'PagesController@webdev');
Route::get('/uiux', 'PagesController@uiux');
Route::get('/dashboard', 'AdminDashBoard@dashboard')->middleware('verifyRole');
Route::resource('program','ProgramsController')->middleware('verifyRole');
Route::resource('payment_status', 'PaymentStatusController')->middleware('verifyRole');
Route::resource('privilege', 'PrivilegesController')->middleware('verifyRole');
Route::resource('admin', 'AdminController')->middleware('verifyRole');
Route::resource('/user', 'UserController')->middleware('verifyRole');
Route::resource('userdashboard', 'DashboardController');
Route::resource('role', 'RoleController')->middleware('verifyRole');
Route::resource('permission', 'PermissionController')->middleware('verifyRole');
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/redirects', 'SocialAuthFacebookController@redirect');
Route::get('login/callback', 'SocialAuthFacebookController@callback');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');




