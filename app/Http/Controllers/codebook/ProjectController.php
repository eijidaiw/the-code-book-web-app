<?php

namespace App\Http\Controllers\codebook;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Codedata;

class ProjectController extends Controller
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
        $codedatas = Codedata::paginate(10);       
        $codedatas->setPath('admin');      
        return view('project1.admin')->with('codedatas',$codedatas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codedata = new Codedata;
        $codedata->title = Input::get('title');        
        $codedata->content = Input::get('content');
        $codedata->type = Input::get('type');
        $codedata->evaluation = null;
        $codedata->save();
        return Redirect::to('thecodebook/admin');
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
        $codedata = Codedata::find($id);       
        return view('project1.edit')->with('codedata',$codedata);
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
        $codedata = Codedata::find($id);
        $codedata->title = Input::get('title');        
        $codedata->content = Input::get('content');
        $codedata->type = Input::get('language');
        $codedata->evaluation = null;
        $codedata->save();
        return Redirect::to('thecodebook/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $codedata = Codedata::find($id);
        $codedata->delete();
        return Redirect::to('thecodebook/admin');
    }
}
