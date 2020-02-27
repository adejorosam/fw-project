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

Auth::routes(['verify' => true]);
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
// Route::get('/dashboard', 'AdminDashBoard@dashboard')->middleware('verifyRole');
Route::resource('program','ProgramsController')->middleware('verifyRole');
Route::resource('payment_status', 'PaymentStatusController')->middleware('verifyRole');
Route::resource('privilege', 'PrivilegesController')->middleware('verifyRole');
Route::resource('course', 'CourseController');
Route::get('courses', 'CourseController@courses');
Route::resource('/user', 'UserController')->middleware('verifyRole');
Route::resource('/dashboards', 'DashboardController');
Route::resource('role', 'RoleController')->middleware('verifyRole');
Route::resource('permission', 'PermissionController')->middleware('verifyRole');
Route::resource('assignment', 'AssignmentBoardController');
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/redirects', 'SocialAuthFacebookController@redirect');
Route::get('login/callback', 'SocialAuthFacebookController@callback');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment', 'PaymentController@index');
Route::resource('/curriculum', 'CurriculumController');
Route::get('/download', 'DownloadsController@download');
Route::get('/web', 'DownloadsController@websyllabus');
Route::get('/product', 'DownloadsController@productsyllabus');
Route::get('/mobiledev', 'DownloadsController@mobilesyllabus');
Route::resource('/tutor', 'TutorController')->middleware('verifyRole');
Route::get('/dashboard', 'CentralDashboardController@index');
Route::get('/mycourses', 'CentralDashboardController@mycourses');
Route::get('/performance', 'CentralDashboardController@performance');
Route::get('/students', 'CentralDashboardController@students');
Route::get('/regusers', 'UserController@regusers')->middleware('verifyRole');
Route::get('download/{id}', 'AssignmentBoardController@download');
Route::get('/profile', 'AdminController@index')->middleware('verifyRole');
Route::resource('/profile', 'AdminController')->middleware('verifyRole');
Route::get('admin', 'AdminController@admins')->middleware('verifyRole');
Route::resource('task', 'TaskController');
Route::get('tasks', 'DashboardController@tasks');
Route::get('tasks/{id}', 'DashboardController@task');
Route::get('admin/{id}', 'AdminController@show');
Route::get('admin/{id}/edit', 'AdminController@edit');
Route::patch('admin/{id}/edit', 'AdminController@update');
