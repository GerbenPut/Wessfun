<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StoreCommentPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // $comments = Comment::all()->take(10);
     //   return view('comment.index', compact('comments'));
     return view ('comment.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentPost $request)
    {
        $validatedData = $request->validated;

        $comment = new Comment();
        $comment->message = $request['message'];
        $comment->image_id = $request['image_id'];
        $comment->user_id = Auth::user()->id;
        $comment->save();

//      return redirect()->action('ImagesController@index')->with('correct', 'Comment Gemaakt');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('comment.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCommentPost $request, Comment $comment)
    {
        $validatedData = $request->validated;

        $comment->message = $request['content'];
        $comment->save();

        return redirect()->action('CommentsController@index')->with('correct', 'Comment Gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->action('CommentsController@index')->with('correct', 'Comment Gedeletet');
    }

    public function postSearch(Request $request)
    {
        if($request->has('query')) {
            $comments = comment::where('message', 'LIKE', '%' . $request->get('query') .  '%')->get();
            return view('comment.searchresults', compact('comments'));
        } else {
            return abort(400);
        }

    }
}
