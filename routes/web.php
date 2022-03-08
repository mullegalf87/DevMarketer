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

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/posts', 'PostController');
});

Route::get('/home', 'HomeController@index')->name('home');

// test project
Route::get('/test', function () {
  return redirect('/tt?page=home');
});

Route::get('/tt', 'TestsController@go_to_page');

Route::get('tt/lang', 'TestsController@lang_change')->name('PmLangChange');

Route::post('register_test', 'TestsController@store');

Route::post('login_test', 'TestsController@check_login');

Route::get('logout_test', 'TestsController@logout_test');

Route::post('reset_password_without_token_test', 'TestsController@validatePasswordRequest');

Route::get("/add_prod_test","HomeController@add_prod_test");

Route::get("/get_prod_test","HomeController@get_prod_test");

Route::get("/update_prod_test","HomeController@update_prod_test");

Route::get("/delete_prod_test","HomeController@delete_prod_test");