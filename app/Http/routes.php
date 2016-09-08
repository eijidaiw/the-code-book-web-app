<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/name',function(){
// 	return "pooh";
// });

// Route::get('/hello',function(){
	
// 	return view('ben')->with('name','ben')
// 	                  ->with('surname','meepooh');
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
	Route::get('/',  function() { return redirect('/thecodebook'); } );

  

	Route::group(['middleware' => 'web'], function () {
   	Route::auth();
   	
    Route::resource('thecodebook/admin','codebook\\ProjectController');
    Route::resource('thecodebook/sharedcode','codebook\\SharecodesController');
    Route::resource('thecodebook/comment','codebook\\CommentController');
    Route::get('thecodebook/interesting','codebook\\SharecodesController@interesting');
    Route::get('thecodebook/featured','codebook\\SharecodesController@featured');
    Route::get('thecodebook/hot','codebook\\SharecodesController@hot');
    Route::get('thecodebook/create','codebook\\SharecodesController@create');
    Route::get('thecodebook/update','codebook\\GeneralUserController@index2');
    Route::post('thecodebook/search','codebook\\SharecodesController@searchshare');
    Route::get('thecodebook/search/{title}','codebook\\SharecodesController@searchsherecode')->where('title', '[A-Za-z]+');
    Route::get('thecodebook/report','codebook\\ProjectController@report');

    Route::get('thecodebook','codebook\\GeneralUserController@index');

    Route::get('thecodebook/java','codebook\\GeneralUserController@java');
    Route::post('thecodebook/java','codebook\\GeneralUserController@searchjava');

    Route::get('thecodebook/python','codebook\\GeneralUserController@python');
    Route::post('thecodebook/python','codebook\\GeneralUserController@searchpython');

    Route::get('thecodebook/c-sharp','codebook\\GeneralUserController@cshrp');
    Route::post('thecodebook/c-sharp','codebook\\GeneralUserController@searchcshp');

    Route::get('thecodebook/vb','codebook\\GeneralUserController@vb');
    Route::post('thecodebook/vb','codebook\\GeneralUserController@searchvb');
    
    Route::get('thecodebook/{thecodebook}','codebook\\GeneralUserController@show');
    
    Route::get('thecodebooktestAjax','HomeController@testAjax');
    Route::get('thecodebookgetAjax','HomeController@getAjax');


});