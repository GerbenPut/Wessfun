<?php

namespace App\Http\Controllers;

use App\post;
use App\Http\Requests\StorePost;
use Illuminate\Http\Request;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $validatedDate = $request->validated();

        $post = new post();
        $post->title = $request ['title'];
        $post->description = $request ['description'];
        $post->category = $request ['category'];
        $post->save();

        return redirect()->action('PostsController@index')->with('correct', 'post gemaakt');
        // return redirect()->route('posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, post $post)
    {
        $validatedDate = $request->validated();

        $post->title = $request ['title'];
        $post->description = $request ['description'];
        $post->category = $request ['category'];
        $post->save();

        return redirect()->action('PostsController@index')->with('correct', 'post gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->action('PostsController@index')->with('correct', 'post verwijderd');
    }
}
