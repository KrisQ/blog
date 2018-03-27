<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class PostsCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comments = Comment::all();
      return view('admin.comments.index', compact('comments'));
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
        $user = Auth::user();

        $pic;
        if($user->photo != null){
          $pic = $user->photo->file;
        } else {
          $pic = 'https://images.unsplash.com/photo-1495791153954-705fa8c56eec?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c07ca800be2bf63dd3b8df8f4d708069&auto=format&fit=crop&w=1650&q=80';
        }

        $data = [
          'post_id'  => $request->post_id,
          'author'   => $user->name,
          'email'    => $user->email,
          'photo'    => $pic,
          'body'     => $request->body
        ];

        Comment::create($data);
        $request->session()->flash('comment_message', 'Your message has been submited, thank you');
        return redirect()->back();
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
