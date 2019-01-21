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
//front_end route
Route::get('/','front_controller@home');
Route::get('/postid/{post_id}','front_controller@post_details');
Route::get('/about','front_controller@about');
Route::get('/contact','front_controller@contact');
Route::post('/message','front_controller@message');
Route::post('/comment/{post_id}','front_controller@comment');

//back_end route
// Route::get('/admin','back_end@login_admin');
// Route::get('/admin/admin={admin_id}','back_end@index');
Route::get('admin','back_controller@login');
Route::get('admin/home','back_controller@index');
Route::post('admin/checkadmin','back_controller@check_admin');
Route::get('admin/addpost','back_controller@add_post');
Route::post('admin/store','back_controller@store');
Route::get('admin/allposts','back_controller@all_posts');
Route::get('admin/publishedposts','back_controller@published_posts');
Route::get('admin/drafts','back_controller@drafts');
Route::get('admin/adminlist','back_controller@admin_list');
Route::get('admin/addadmin','back_controller@add_admin');
Route::get('admin/postdetails/{post_id}','back_controller@post_details');
Route::get('admin/publish/{post_id}','back_controller@publish_post');
Route::get('admin/editpost/{post_id}','back_controller@edit_post');
Route::post('admin/updatepost/{post_id}','back_controller@update_post');
Route::get('admin/comment','back_controller@comment');
Route::get('admin/message','back_controller@message');
Route::get('admin/logout','back_controller@logout');