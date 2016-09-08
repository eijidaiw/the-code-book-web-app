<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function testAjax()
    {
        
        
        return view('testAjax');
    }

    public function getAjax()
    {
        $data = [
            ['id' => '1',
                        'name' => 'test'],
            ['id' => '2',
            'name' => 'test2']
        ];
        //view('ajaxView',compact('arr'));
        
        return ['html' => View::make('ajaxView',['data'=>$data])->render()];
    }
}
