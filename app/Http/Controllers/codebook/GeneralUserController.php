<?php

namespace App\Http\Controllers\codebook;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeneralUserController extends Controller
{
    public function index()
    {     
        return view('project1.generalUser.index');
    }
    public function java()
    {     
        return view('project1.generalUser.java');
    }
    public function python()
    {     
        return view('project1.generalUser.python');
    }
    public function cshrp()
    {     
        return view('project1.generalUser.cshp');
    }
    public function vb()
    {     
        return view('project1.generalUser.vb');
    }
}
