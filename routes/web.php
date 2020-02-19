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
Route::put('/update/{team}','HomeController@update');
Route::get('/download/leader_cv/{id}','HomeController@download_leader_cv');
Route::get('/download/leader_project/{id}','HomeController@download_leader_project')->name('download.leader_project');
Route::get('/download/member1_cv/{team}','HomeController@download_member1_cv')->name('download.member1_cv');
Route::get('/download/member1_project/{team}','HomeController@download_member1_project')->name('download.member1_project');
Route::get('/download/member2_cv/{team}','HomeController@download_member2_cv')->name('download.member2_cv');
Route::get('/download/member2_project/{team}','HomeController@download_member2_project')->name('download.leader_project');
