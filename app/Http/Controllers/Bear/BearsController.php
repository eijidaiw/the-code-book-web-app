<?php

namespace App\Http\Controllers\Bear;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Bear;
use Illuminate\Support\Facades\Validator;

class BearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $bears = Bear::orderBy('weight','DESC')->paginate(10);       
        $bears->setPath('index');      
        return view('bear.index')->with('bears',$bears);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

         $rules = array(
             'name' => array('required'), 
             'weight' => array('required')
             );
         $message = array(
             'name.required' => 'กรุณาป้อนชื่อด้วยครับ',
             'weight.required' => 'กรุณาป้อนน้ำหนักด้วยครับ'
             );
         $validator = Validator::make(Input::all(), $rules,$message);
         if($validator->passes()) {
            $bear = new Bear;
            $bear->name = Input::get('name');        
            $bear->weight = Input::get('weight');
            $bear->save();
            return Redirect::to('index');
         }else{
             return Redirect::to('index')->withErrors($validator->messages());
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bear = Bear::find($id);       
        return view('bear.edit')->with('bear',$bear);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bear = Bear::find($id);
        $bear->name = Input::get('name');        
        $bear->weight = Input::get('weight');
        $bear->save();
        return Redirect::to('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bear = Bear::find($id);
        $bear->delete();
        return Redirect::to('index');
    }
    public function search()
    {     
        $word=Input::get('search');

        $bears = Bear::where('name','LIKE','%'.$word.'%')->paginate(10);       
        $bears->setPath('index/search');      
        return view('bear.index')->with('bears',$bears);
    }
}
