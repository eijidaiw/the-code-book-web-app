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
// Route::group(['middleware' => ['web']], function () {
// 	Route::get('/temperatureconverter', function () {
// 		$n1 = "";
// 		$n2 = "";
// 		return view('homework/tem',compact('n1','n2'));
// 	});


// 	Route::post('/temperatureconverter', function () {
// 		$se = Input::get('select');
// 		if($se==="ctof"){
// 			$rules = array(
// 			'n1' => array('required')
// 			);
// 			$message = array(
// 			'n1.required' => 'กรุณาป้อนหน่วย °C ด้วยครับ'
// 			);
// 		}else{
// 			$rules = array(
// 			'n2' => array('required')
// 			);
// 			$message = array(
// 			'n2.required' => 'กรุณาป้อนหน่วย °F ด้วยครับ'
// 			);
// 		}
// 		$validator = Validator::make(Input::all(), $rules,$message);
// 		if($validator->passes()) {
 			
// 			if(Input::get('select')==="ctof"){
// 				$n1 = Input::get('n1');
// 				$n2 = ($n1*(9/5))+32;
// 			}else{
// 				$n2 = Input::get('n2');
// 				$n1 = (5/9)*($n2-32);
// 			}
// 			return view('homework/tem', compact('n1','n2'));
// 		}else{
// 			return Redirect::to('/temperatureconverter')->withErrors($validator->messages());
// 		}
// 	});
//     //
// });

// Route::group(['middleware' => ['web']], function () {
// 	Route::get('/calculator', function () {
// 		$n1 = "";
// 		$n2 = "";
// 		$select = 0;
// 		return view('homework/calculator',compact('n1','n2','select'));
// 	});


// 	Route::post('/calculator', function () {
// 		$rules = array(
// 			'n1' => array('required'), 
// 			'n2' => array('required')
// 			);
// 		$message = array(
// 			'n1.required' => 'กรุณาป้อน number1 ด้วยครับ',
// 			'n2.required' => 'กรุณาป้อน number2 ด้วยครับ',
// 			);
// 		$validator = Validator::make(Input::all(), $rules,$message);
// 		if($validator->passes()) {
// 			$select = Input::get('select');
// 			$n1 = Input::get('n1');
//  			$n2 = Input::get('n2');
			
// 			return view('homework/calculator', compact('n1','n2','select'));
// 		}else{
// 			return Redirect::to('/calculator')->withErrors($validator->messages());
// 		}
// 	});
//     //
// });

// Route::group(['middleware' => ['web']], function () {
// 	Route::get('/primenumber', function () {
// 		$n1 = "";
// 		$result="";
// 		return view('homework/primenumber',compact('n1','result'));
// 	});


// 	Route::post('/primenumber', function () {
// 		$rules = array(
// 			'n1' => array('required','min:1,0')
// 			);
// 		$message = array(
// 			'n1.required' => 'กรุณาป้อนตัวเลข ด้วยครับ',
// 			'n1.min' => 'กรุณาป้อนจำนวนนับ'
// 			);
// 		$validator = Validator::make(Input::all(), $rules,$message);
// 		if($validator->passes()) {
// 			$n1 = Input::get('n1');
// 			$n2 = $n1;
// 			$result = "";
// 			if($n2==0){
// 				$result = $result+"0";
// 			}elseif ($n2==1){
// 				$result = $result+"1";
// 			}elseif ($n2<0){
// 				$result = "";
// 			}else{
// 				while ($n2!=1) {
// 					for($i=2;$i<=$n2;$i++){
// 						if($n2%$i===0){
// 							$n2 = $n2/$i;
// 							$result = $result . $i;
// 							break;
// 						}
// 					}
// 					if($n2>1){
// 						$result = $result . "x";
// 					}
// 				}
// 			}
// 			return view('homework/primenumber', compact('n1','result'));
// 		}else{
// 			return Redirect::to('/primenumber')->withErrors($validator->messages());
// 		}
// 	});
//     //
// });

Route::group(['middleware' => ['web']], function () {
	Route::get('/student/index','StudentController@index');
	Route::post('/student/add','StudentController@add');
	Route::get('/student/addStudent','StudentController@addForm');
	Route::get('/student', 'StudentController@page');
	Route::get('/student/delete/{id}', 'StudentController@delete');
	Route::get('/student/edit/{id}', 'StudentController@edit');
	Route::post('/student/update/{id}', 'StudentController@update');



    //
});

Route::group(['middleware' => ['web']], function () {
	Route::get('/thecodebook','ProjectController@index');
	Route::get('/thecodebook/login','ProjectController@login');
	Route::post('/thecodebook/login','ProjectController@login2');
	Route::get('/admin/code','ProjectController@admin');
	Route::get('/code', 'ProjectController@page');
	Route::get('/code/delete/{id}', 'ProjectController@delete');
	Route::get('/code/edit/{id}', 'ProjectController@edit');
	Route::post('/code/update/{id}', 'ProjectController@update');
	Route::get('/code/create','ProjectController@addForm');
	Route::post('/code/add','ProjectController@add');
    //
});



// Route::group(['middleware' => ['web']], function () {
// 	Route::get('/tem', function () {
// 		$n1=0;
// 		$n2=0;
// 		return view('form/index',compact('n1','n2'));
// 	});


// 	Route::post('/tem', function () {
// 		$rules = array(
// 			'n1' => array('required'), 
// 			'n2' => array('required', 'min:3')
// 			);
// 		$message = array(
// 			'n1.required' => 'กรุณาป้อน number1 ด้วยครับ',
// 			'n2.required' => 'กรุณาป้อน number2 ด้วยครับ',
// 			'n2.min' => 'กรุณาป้อน number2 อย่างน้อย 3 ตัวอักษรด้วยครับ'
// 			);
// 		$validator = Validator::make(Input::all(), $rules,$message);
// 		if($validator->passes()) {
// 			$n1 = Input::get('n1');
// 			$n2 = Input::get('n2');
// 			return view('form/index', compact('n1','n2'));
// 		}else{
// 			return Redirect::to('/tem')->withErrors($validator->messages());
// 		}
// 		$n1 = Input::get('n1');
// 		$n2 = Input::get('n2');
// 		return view('form/index', compact('n1','n2'));
// 	});
//     //
// });

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
