<?php

namespace App\Http\Controllers\codebook;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Codedata;

class GeneralUserController extends Controller
{
    public function index()
    {     
        return view('project1.generalUser.index');
    }

    public function index2()
    {   $codedatas = Codedata::all();
        return $codedatas;
    }


    public function java()
    {     
    	$codedatas = Codedata::where('type','java')->paginate(10);       
        $codedatas->setPath('java');      
        return view('project1.generalUser.java')->with('codedatas',$codedatas);
    }
    public function python()
    {   
    	$codedatas = Codedata::where('type','python')->paginate(10);       
        $codedatas->setPath('python'); 
        return view('project1.generalUser.python')->with('codedatas',$codedatas);
    }
    public function cshrp()
    {    
    	$codedatas = Codedata::where('type','c#')->paginate(10);       
        $codedatas->setPath('c-sharp'); 
        return view('project1.generalUser.cshp')->with('codedatas',$codedatas);
    }
    public function vb()
    {     
        $codedatas = Codedata::where('type','vb')->paginate(10);       
        $codedatas->setPath('vb'); 
        return view('project1.generalUser.vb')->with('codedatas',$codedatas);
    }

    public function show($id)
    {
        $codedata = Codedata::find($id);       
        return view('project1.generalUser.show')->with('codedata',$codedata);
    }

    public function searchjava()
    {     
    	$word=Input::get('search');

    	$codedatas = Codedata::where([['type','java'],['title','like','%'.$word.'%'],])->paginate(10);       
        $codedatas->setPath('java');      
        return view('project1.generalUser.java')->with('codedatas',$codedatas);;
    }

    public function searchpython()
    {     
    	$word=Input::get('search');

    	$codedatas = Codedata::where([['type','python'],['title','like','%'.$word.'%'],])->paginate(10);       
        $codedatas->setPath('python');      
        return view('project1.generalUser.python')->with('codedatas',$codedatas);;
    }

    public function searchcshp()
    {     
    	$word=Input::get('search');

    	$codedatas = Codedata::where([['type','c#'],['title','like','%'.$word.'%'],])->paginate(10);       
        $codedatas->setPath('c-sharp');      
        return view('project1.generalUser.cshp')->with('codedatas',$codedatas);;
    }

    public function searchvb()
    {     
    	$word=Input::get('search');

    	$codedatas = Codedata::where([['type','vb'],['title','like','%'.$word.'%'],])->paginate(10);       
        $codedatas->setPath('vb');      
        return view('project1.generalUser.vb')->with('codedatas',$codedatas);;
    }
}
