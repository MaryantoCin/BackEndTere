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
Route::get('/edit','HomeController@edit',function(){
    //
})->middleware('auth');
Route::put('/update/{user}','HomeController@update');
Route::get('/download/leader_cv/{user}','HomeController@download_leader_cv');
Route::get('/download/leader_project/{user}','HomeController@download_leader_project');
Route::get('/download/member1_cv/{user}','HomeController@download_member1_cv');
Route::get('/download/member1_project/{user}','HomeController@download_member1_project');
Route::get('/download/member2_cv/{user}','HomeController@download_member2_cv');
Route::get('/download/member2_project/{user}','HomeController@download_member2_project');
Route::get('/dl/leader_cv/{user}','HomeController@admin_download_leader_cv')->name('adl.leader_cv');
Route::get('/dl/leader_project/{user}','HomeController@admin_download_leader_project')->name('adl.leader_project');
Route::get('/dl/member1_cv/{user}','HomeController@admin_download_member1_cv')->name('adl.member1_cv');
Route::get('/dl/member1_project/{user}','HomeController@admin_download_member1_project')->name('adl.member1_project');
Route::get('/dl/member2_cv/{user}','HomeController@admin_download_member2_cv')->name('adl.member2_cv');
Route::get('/dl/member2_project/{user}','HomeController@admin_download_member2_project')->name('adl.member2_project');
Route::get('/edit/{user}','HomeController@admin_edit')->name('admin.edit');
Route::put('/edit/update/{user}','HomeController@admin_update')->name('admin.update');

