<?php

namespace App\Http\Controllers\codebook;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Comment;
use Auth;
use Validator;
use App\Sharecode;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $id = Input::get('id');
        $rules = array(
             'rating' => array('required')
             );
         $message = array(
             'rating.required' => 'Please Rate'
             );
         $validator = Validator::make(Input::all(), $rules,$message);
         if($validator->passes()) {
            $comment = new Comment;
            $comment->content = Input::get('content');    
            $comment->evaluation = Input::get('rating');    
            $comment->user_id = Auth::user()->id;
            $comment->id_code = Input::get('id');
            $comment->save();
            $id = Input::get('id');
            $sharedcode = Sharecode::find($id);
            $com = Comment::where('id_code',$id)->get();
            $sum = 0;
            foreach ($com as $key) {
                $sum = $sum + $key->evaluation;
            }
            $eva = $sum /$com->count();
            $sharedcode->evaluation = $eva;
            $sharedcode->countercomment = $com->count();
            $sharedcode->save();
            return Redirect::to('thecodebook/sharedcode/'.$id);
         }else{
           return Redirect::to('thecodebook/sharedcode/'.$id)->withErrors($validator->messages());
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
        $comment = Comment::find($id);
        $comment->report = $comment->report + 1;
        $comment->save();
        $num = $comment->id_code;
        return Redirect::to('thecodebook/sharedcode/'.$num);
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
         
        $comment = Comment::find($id);
        $comment->delete();
        return Redirect::to('thecodebook/report');
    }
}
