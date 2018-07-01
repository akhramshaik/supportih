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



Route::get('/', ['as'=>'home', 'uses'=>'MainController@wesupport']);
Route::get('/we-support-babu-gogineni', ['as'=>'wesupport', 'uses'=>'MainController@wesupport']);
Route::get('/i-am-with-babu-gogineni', ['as'=>'vote', 'uses'=>'MainController@vote']);
Route::get('/about-babu-gogineni', ['as'=>'about', 'uses'=>'MainController@about']);
Route::get('/faq-about-babu-gogineni', ['as'=>'faq', 'uses'=>'MainController@faq']);
Route::get('/babu-gogineni-in-television-media', ['as'=>'television', 'uses'=>'MainController@television']);
Route::post('/submit-vote', ['as'=>'voteprocess', 'uses' => 'MainController@voteprocess']); 