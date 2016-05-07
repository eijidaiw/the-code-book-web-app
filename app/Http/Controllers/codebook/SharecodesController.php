<?php

namespace App\Http\Controllers\codebook;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Sharecode;
use DB;


class SharecodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sharedcode = Sharecode::orderBy('updated_at','DESC')->paginate(10);
        $check = 'interesting';
        return view('project1.sharecode.index') ->with('sharedcode',$sharedcode)
                                                ->with('check',$check);
    }

    public function interesting()
    {
        $sharedcode = Sharecode::orderBy('updated_at','DESC')->paginate(10);
        $check = 'interesting';
        return view('project1.sharecode.index') ->with('sharedcode',$sharedcode)
                                                ->with('check',$check);
    }
    public function featured()
    {
        $sharedcode = Sharecode::orderBy('evaluation','DESC')->paginate(10);
        $check = 'featured';
        return view('project1.sharecode.index') ->with('sharedcode',$sharedcode)
                                                ->with('check',$check);
    }
    public function hot()
    {
        $sharedcode = Sharecode::orderBy('viewcounter','DESC')->paginate(10);
        $check = 'hot';
        return view('project1.sharecode.index') ->with('sharedcode',$sharedcode)
                                                ->with('check',$check);
    }

     public function service()
    {
        return view('project1.sharecode.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
