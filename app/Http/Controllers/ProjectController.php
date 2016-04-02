<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Codedata;
class ProjectController extends Controller
{
    //
    public function index() {
    	$codedata = Codedata::all();
    	return $codedata;
}
    public function login2() {
    	$username = Input::get('username');
    	$password = Input::get('password');
    	if($username === "eijidaiw" && $password === "123456"){
    		return Redirect::to('code');
    	}else{
    	$text = "Username or password is wrong.";
    		return Redirect::to('thecodebook/admin');
    	}
    }
    public function login() {
    	$username = "";
    	$text = "";  	
    	return view('project1/login',compact('username','text'));
    }
    public function admin() { 	
    	return view('project1/admin');
    }
    public function page()  {
        $codedatas = Codedata::paginate(10);       
        $codedatas->setPath('code');      
        return view('project1.admin')->with('codedatas',$codedatas);
    }
    public function delete($id) {
        $codedata = Codedata::find($id);
        $codedata->delete();
        return Redirect::to('code');
    }
    public function edit($id_code) {
        $codedata = Codedata::find($id_code);       
        return view('project1.edit')->with('codedata',$codedata);
    }
    public function update($id_code) {
    	$codedata = Codedata::find($id_code);
    	$codedata->title = Input::get('title');        
    	$codedata->content = Input::get('content');
    	$codedata->type = Input::get('type');
    	$codedata->evaluation = null;
    	$codedata->save();
    	return Redirect::to('code');
	}
	public function addForm() {
        return view('project1.create');

    }
    public function add() {
    	$codedata = new Codedata;
        $codedata->title = Input::get('title');        
    	$codedata->content = Input::get('content');
    	$codedata->type = Input::get('type');
    	$codedata->evaluation = null;
        $codedata->save();
        return Redirect::to('code');

    }
}
