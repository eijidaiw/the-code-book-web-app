<?php

namespace App\Http\Controllers\codebook;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeneralUser extends Controller
{
    public function index()
    {     
        return view('project1.generalUser.index');
    }
}
