<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mode\Comment\Comment;
class CommentController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function comments(Request $request)
    {
      $com = new Comment;
      $com->writer_id=$request->user_id;
      $com->color_value_id=$request->color_value_id;
      $com->message=$request->message;
      $com->writer_type='user';
      $com->save();
        $comment_res=Comment::with('getUser')->where('writer_id',$request->user_id)->where('color_value_id',$request->color_value_id)->where('message',$request->message)->first();

        return response()->json(['message' => $comment_res->message, 'created_at' => $comment_res->created_at,'username'=>$comment_res->getUser->name], 200);
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
