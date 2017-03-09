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


Route::group(['middleware' => 'web'], function () {
Route::get('/', 'PagesController@homepage');
Auth::routes();
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');
Route::get('/home', 'HomeController@index');
Route::get('candidate/search', 'CandidateController@search');
Route::get('college/search', 'CollegeController@search');
Route::get('export/{type}', 'ExcelController@download');
Route::resource('candidate', 'CandidateController');
Route::resource('degree', 'DegreeController');
Route::resource('college', 'CollegeController');
Route::resource('status', 'StatusController');
Route::resource('religion', 'ReligionController');
});

/*Route::group(['middleware' => 'web'], function () {
Route::get('college', 'CollegeController@index');
Route::get('college.create', 'CollegeController@create');
Route::get('college/{college}', 'CollegeController@show');
Route::post('college', 'CollegeController@store');
Route::get('college/{college}/edit', 'CollegeController@edit');
Route::patch('college/{college}', 'CollegeController@update');
Route::delete('college/{college}', 'CollegeController@destroy');
});

Route::group(['middleware' => 'web'], function () {
Route::get('degree', 'DegreeController@index');
Route::get('degree.create', 'DegreeController@create');
Route::get('degree/{degree}', 'DegreeController@show');
Route::post('degree', 'DegreeController@store');
Route::get('degree/{degree}/edit', 'DegreeController@edit');
Route::patch('degree/{degree}', 'DegreeController@update');
Route::delete('degree/{degree}', 'DegreeController@destroy');
});

Route::group(['middleware' => 'web'], function () {
Route::get('status', 'StatusController@index');
Route::get('status.create', 'StatusController@create');
Route::get('status/{status}', 'StatusController@show');
Route::post('status', 'StatusController@store');
Route::get('status/{status}/edit', 'StatusController@edit');
Route::patch('status/{status}', 'StatusController@update');
Route::delete('status/{status}', 'StatusController@destroy');
});

Route::group(['middleware' => 'web'], function () {
Route::get('religion', 'ReligionController@index');
Route::get('religion.create', 'ReligionController@create');
Route::get('religion/{religion}', 'ReligionController@show');
Route::post('religion', 'ReligionController@store');
Route::get('religion/{religion}/edit', 'ReligionController@edit');
Route::patch('religion/{religion}', 'ReligionController@update');
Route::delete('religion/{religion}', 'ReligionController@destroy');
});






Route::resource('users', 'UsersController');*/


