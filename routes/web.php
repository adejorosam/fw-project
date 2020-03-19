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

#Auth::routes(['verify' => true]);
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
// Route::get('/dashboard', 'AdminDashBoard@dashboard')->middleware('verifyRole');
Route::resource('program','ProgramsController')->middleware('verifyRole');
Route::resource('payment_status', 'PaymentStatusController')->middleware('verifyRole');
Route::resource('privilege', 'PrivilegesController')->middleware('verifyRole');
Route::resource('course', 'CourseController')->middleware('verifyRole');
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
Route::resource('/curriculum', 'CurriculumController');
Route::get('download/{id}', 'DownloadsController@curriculumdownload');
Route::resource('/tutor', 'TutorController')->middleware('verifyRole');
Route::get('/userinfo', 'CentralDashboardController@index');
Route::get('/mycourses', 'CentralDashboardController@mycourses');
Route::get('/performance', 'CentralDashboardController@performance');
Route::get('/students', 'CentralDashboardController@students');
Route::get('/regusers', 'UserController@regusers')->middleware('verifyRole');
Route::get('downloads/{id}', 'DownloadsController@assignmentdownload');
Route::get('/profile', 'AdminController@index')->middleware('verifyRole');
Route::resource('/profile', 'AdminController')->middleware('verifyRole');
Route::get('admin', 'AdminController@admins')->middleware('verifyRole');
Route::resource('task', 'TaskController');
Route::get('/tasks', 'DashboardController@tasks');
Route::get('tasks/{id}', 'DashboardController@task');
Route::get('admin/{id}', 'AdminController@show');
Route::get('admin/{id}/edit', 'AdminController@edit');
Route::patch('admin/{id}/edit', 'AdminController@update');
Route::get('/dashboard', 'CentralDashboardController@index');
Route::get('/userprofile', 'DashboardController@index');
Route::get('/tutorprofile', 'TutorController@profile');
Route::get('apply/{id}', 'PaymentController@apply');
Route::get('submission', 'AdminController@submissions');
Route::get('assignments', 'AdminController@tasks');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/repay', 'PaymentController@repayment');
Route::get('paymenthistory', 'PaymentController@payment_history');
Route::get('payments', 'PaymentController@payments')->middleware('verifyRole');
Route::get('/disable/user/{id}', 'UserController@disable')->name('users.disable');
Route::get('latesubmission', 'AssignmentBoardController@latesubmission');
Route::get('defaultpayment', 'PaymentController@defaultPayment');




