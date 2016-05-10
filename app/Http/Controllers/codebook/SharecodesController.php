<?php

namespace App\Http\Controllers\codebook;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Sharecode;
use App\User;
use App\Comment;
use DB;
use Auth;

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
        $check = 'create';
        return view('project1.sharecode.index')->with('check',$check);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sharedcode = new Sharecode;
        $sharedcode->title = Input::get('title');    
        $sharedcode->description = Input::get('description');    
        $sharedcode->content = Input::get('content');
        $sharedcode->type = Input::get('type');
        $sharedcode->theme = Input::get('theme');
        $sharedcode->evaluation = 0;
        $sharedcode->user_id=Auth::user()->id;
        $sharedcode->viewcounter = 0;
        $sharedcode->save();

        $new = Sharecode::orderBy('updated_at','DESC')->first();
        return Redirect::to('thecodebook/sharedcode/'.$new->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $sharedcode = Sharecode::find($id);
        $sharedcode->viewcounter = $sharedcode->viewcounter +1 ;
        $sharedcode->save();
        $name=User::where('id',$sharedcode->user_id)->get();  
        $comments = User::join('comments', 'comments.user_id', '=', 'users.id')->where('id_code',$id)->orderBy('comments.updated_at','DESC')->get();

        // return $name;
         return view('project1.sharecode.show',compact("comments","sharedcode","name")) ;
        // // ->with('sharedcode',$sharedcode)
        // //                                         // ->with('comments',$comments)
        // //                                         ->with('name',$name)
        //                                         ;
         // var_dump($sharedcode);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sharecodes = Sharecode::find($id);
        $sharecodes->report = $sharecodes->report + 1;
        $sharecodes->save();
        return Redirect::to('thecodebook/sharedcode/'.$id);

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
        
        $sharecodes = Sharecode::find($id);
        $sharecodes->delete();
        return Redirect::to('thecodebook/report');
    }

    public function searchsherecode($title)
    {    
        $sharecodes = Sharecode::where('title','like','%'.$title.'%')->get();         
        return $sharecodes;
    }
    public function searchshare()
    {     
        $word=Input::get('search');

        $sharecodes = Sharecode::where('title','like','%'.$word.'%')->paginate(10);       
        $sharecodes->setPath('search');      
        return view('project1.sharecode.search')->with('sharecodes',$sharecodes)
                                                ->with('word',$word);
    }
}
