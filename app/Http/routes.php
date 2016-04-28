<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', array('as'=>'home', 'uses' => 'HomeController@getIndex'))->middleware('auth');
Route::post('/', array('uses' => 'HomeController@postIndex'))->middleware(["csrf",'auth']);

Route::get('/new', array("as" => 'new', 'uses' => "HomeController@getNew"))->middleware('auth');
Route::post('/new', array('uses' => "HomeController@postNew"))->middleware(["csrf",'auth']);

Route::get("/delete_done", array("as"=>'delete_done', 'uses' => "HomeController@getDeleteDone"))->middleware('auth');

Route::get('/login', array('as'=>"login", 'uses'=>'AuthController@getLogin'))
    ->middleware('guest');

Route::post('login', array('uses'=>'AuthController@postLogin'))
    ->middleware(["csrf", 'guest']);

