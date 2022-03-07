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

// test
Route::get('/test', function () {
  return view('test.home');
});

Route::get("/add_prod_test","HomeController@add_prod_test");

Route::get("/get_prod_test","HomeController@get_prod_test");

Route::get("/update_prod_test","HomeController@update_prod_test");

Route::get("/delete_prod_test","HomeController@delete_prod_test");