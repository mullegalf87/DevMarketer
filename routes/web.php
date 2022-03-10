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

// TEST PROJECT
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


//COMIZIAMO PROJECT

Route::get('/comiziamo', function () {
  return redirect('/co?page=home');
    // return view('welcome');
});

Route::get('co/lang', 'ComiziamosController@lang_change')->name('CoLangChange');

Route::get('/co', 'ComiziamosController@go_to_page');

Route::post('register_comiziamo', 'ComiziamosController@store');

Route::post('login_comiziamo', 'ComiziamosController@check_login');

Route::get('logout_comiziamo', 'ComiziamosController@logout_comiziamo');

// Route::get('/auth/facebook', 'ComiziamosController@redirectToProvider')->name('facebook.login');

// Route::get('/auth/facebook/callback', 'ComiziamosController@handleProviderCallback');

Route::post('reset_password_without_token_comiziamo', 'ComiziamosController@validatePasswordRequest');

// Route::post('reset_password_with_token', 'ComiziamosController@resetPassword');

Route::get('random_token_comiziamo', 'ComiziamosController@random_token_comiziamo');

Route::get('check_token_exist_comiziamo', 'ComiziamosController@check_token_exist');

Route::get('follow_comiziamo', 'ComiziamosController@follow_comiziamo');

Route::get('read_button_follow_comiziamo', 'ComiziamosController@read_button_follow');

Route::get('remove_follow_comiziamo', 'ComiziamosController@remove_follow');

Route::get('follow_party_comiziamo', 'ComiziamosController@follow_party');

Route::get('read_button_follow_party_comiziamo', 'ComiziamosController@read_button_follow_party');

Route::get('remove_follow_party_comiziamo', 'ComiziamosController@remove_follow_party');

Route::get('get_newspaper', 'ComiziamosController@get_newspaper');

Route::get('get_argument_comiziamo', 'ComiziamosController@get_argument');

Route::get('reset_time_comiziamo', 'ComiziamosController@reset_time');

Route::get('send_add_argument_comiziamo', 'ComiziamosController@send_add_argument');

Route::get('show_edit_arg_comiziamo', 'ComiziamosController@show_edit_arg');

Route::get('edit_add_argument_comiziamo', 'ComiziamosController@edit_add_argument');

Route::get('upload_img_argument_comiziamo', 'ComiziamosController@upload_img_argument_comiziamo');

Route::get('delete_arg_comiziamo', 'ComiziamosController@delete_arg');

Route::get('get_argument_rally_comiziamo', 'ComiziamosController@get_argument_rally');

Route::get('get_argument_rally_no_user_comiziamo', 'ComiziamosController@get_argument_rally_no_user');

Route::post('file_upload_batch_comiziamo/{id_arg}/{type}', 'ComiziamosController@file_upload_batch');

Route::get('delete_type_item_comiziamo', 'ComiziamosController@delete_type_item');

Route::get('send_data_arg_comiziamo', 'ComiziamosController@send_data_arg');

Route::get('clean_directory_comiziamo', 'ComiziamosController@clean_directory');

Route::get('get_level_comiziamo', 'ComiziamosController@get_level');

Route::get('add_partecipant_comiziamo', 'ComiziamosController@add_partecipant');

Route::get('get_preview_rally_comiziamo', 'ComiziamosController@get_preview_rally');

Route::get('get_argument_partecipant_user_comiziamo', 'ComiziamosController@get_argument_partecipant_user');

Route::get('upload_img_profile_comiziamo', 'ComiziamosController@upload_img_profile_comiziamo');

Route::get('upload_img_party_comiziamo', 'ComiziamosController@upload_img_party_comiziamo');

Route::get('get_comment_profile_comiziamo', 'ComiziamosController@get_comment_profile');

Route::get('edit_data_profile_comiziamo', 'ComiziamosController@edit_data_profile');

Route::get('edit_data_party_comiziamo', 'ComiziamosController@edit_data_party');

Route::get('get_data_party_comiziamo', 'ComiziamosController@get_data_party');

Route::get('get_level_legend_comiziamo', 'ComiziamosController@get_level_legend');

Route::get('get_list_allies_comiziamo', 'ComiziamosController@get_list_allies');

Route::get('send_chat_message_comiziamo', 'ComiziamosController@send_chat_message');

Route::get('get_chat_message_comiziamo', 'ComiziamosController@get_chat_message');

Route::get('get_list_congress_comiziamo', 'ComiziamosController@get_list_congress');

Route::get('get_chat_message_congress_comiziamo', 'ComiziamosController@get_chat_message_congress');

Route::get('send_chat_message_congress_comiziamo', 'ComiziamosController@send_chat_message_congress');

Route::get('get_access_comiziamo', 'ComiziamosController@get_access');

Route::get('get_abuse_comiziamo', 'ComiziamosController@get_abuse');

Route::get('get_user_comiziamo', 'ComiziamosController@get_user');

Route::get('get_argument_vote_comiziamo', 'ComiziamosController@get_argument_vote');

Route::get('get_partecipant_rally_comiziamo', 'ComiziamosController@get_partecipant_rally');

Route::get('get_preview_vote_comiziamo', 'ComiziamosController@get_preview_vote');

Route::get('send_comment_vote_comiziamo', 'ComiziamosController@send_comment_vote');

Route::get('send_bad_comment_vote_comiziamo', 'ComiziamosController@send_bad_comment_vote');

Route::get('get_argument_chart_comiziamo', 'ComiziamosController@get_argument_chart');

Route::get('get_statistics_comiziamo', 'ComiziamosController@get_statistics_comiziamo');

Route::get('get_comment_chart_comiziamo', 'ComiziamosController@get_comment_chart');

Route::get('get_preview_chart_comiziamo', 'ComiziamosController@get_preview_chart');

Route::get('get_winner_chart_comiziamo', 'ComiziamosController@get_winner_chart');

Route::get('get_data_user_comiziamo', 'ComiziamosController@get_data_user_comiziamo');

Route::get('get_list_users_comiziamo', 'ComiziamosController@get_list_users');


////BOOKMAP PROJECT

Route::get('/bookmap', function () {
  return redirect('bm?page=home');
});

Route::get('/bm', 'BookmapController@go_to_page');

Route::get('bm/lang', 'BookmapController@lang_change')->name('BmLangChange');

Route::get('show_last_prod_bookmap', 'BookmapController@show_last_prod_bookmap');

Route::get('get_user_bookmap', 'BookmapController@get_user_bookmap');

Route::get('/get_product_bookmap', 'BookmapController@get_product_bookmap');

Route::get('/get_product_user_bookmap', 'BookmapController@get_product_user_bookmap');

Route::get('/add_product_bookmap', 'BookmapController@add_product_bookmap');

Route::get('/add_image_product_bookmap', 'BookmapController@add_image_product_bookmap');

Route::get('/save_product_bookmap', 'BookmapController@save_product_bookmap');

Route::get('/update_img_product_bookmap', 'BookmapController@update_img_product_bookmap');

Route::get('/delete_product_bookmap', 'BookmapController@delete_product_bookmap');

Route::get('/check_count_product_user', 'BookmapController@check_count_product_user');

Route::get('/add_cart_bookmap', 'BookmapController@add_cart_bookmap');

Route::get('/count_get_cart_bookmap', 'BookmapController@count_get_cart_bookmap');

Route::get('/get_cart_bookmap', 'BookmapController@get_cart_bookmap');

Route::get('/delete_prod_cart_bookmap', 'BookmapController@delete_prod_cart_bookmap');

Route::get('/get_user_chat_box_bookmap', 'BookmapController@get_user_chat_box_bookmap');

Route::get('/get_chat_bookmap', 'BookmapController@get_chat_bookmap');

Route::get('/get_room_tooken_bookmap', 'BookmapController@get_room_tooken_bookmap');

Route::get('/send_chat_bookmap', 'BookmapController@send_chat_bookmap');

Route::get('/upload_img_profile_bookmap', 'BookmapController@upload_img_profile_bookmap');

Route::get('/save_data_user_bookmap', 'BookmapController@save_data_user_bookmap');

Route::get('/change_subscription_bookmap', 'BookmapController@change_subscription_bookmap');

Route::get('/check_subscription_bookmap', 'BookmapController@check_subscription_bookmap');

Route::post('register_bookmap', 'BookmapController@store');

Route::post('login_bookmap', 'BookmapController@check_login');

Route::get('logout_bookmap', 'BookmapController@logout_bookmap');

Route::get('/auth/facebook', 'BookmapController@redirectToProvider')->name('facebook_bookmap.login');

Route::get('/auth/facebook/callback', 'BookmapController@handleProviderCallback');

Route::post('reset_password_without_token_bookmap', 'BookmapController@validatePasswordRequest');

Route::get('/check_token_exist_bookmap', 'BookmapController@check_token_exist_bookmap');

Route::get('/get_visitor_bookmap', 'BookmapController@get_visitor_bookmap');

Route::get('get_search_bookmap', 'BookmapController@get_search_bookmap');

Route::get('/get_discount_code_bookmap', 'BookmapController@get_discount_code_bookmap');

Route::get('/get_last_prod_bookmap', 'BookmapController@get_last_prod_bookmap');
