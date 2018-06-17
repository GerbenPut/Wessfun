<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\StoreTagPost;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('tags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretagPost $request)
    {
        $validatedData = $request->validated;

        $tag = new tag();
        $tag->title = $request ['title'];
        $tag->message = $request['message'];
        $tag->save();

        return redirect()->action('TagsController@index')->with('correct', 'tag Gemaakt');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(tag $tag)
    {
        return view('Tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(tag $tag)
    {
        return view('Tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(StoretagPost $request, tag $tag)
    {
        $validatedData = $request->validated;

        $tag->title = $request ['title'];
        $tag->message = $request['message'];
        $tag->save();

        return redirect()->action('TagsController@index')->with('correct', 'tag Gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(tag $tag)
    {
        $tag->delete();
        return redirect()->action('TagsController@index')->with('correct', 'Tag gedelete');
    }

    public function postSearch(Request $request)
    {
        if ($request->has('query')) {
            $tags = tag::where('title', 'LIKE', '%' . $request->get('query') . '%')->get();
            return view('Tags.searchresults', compact('tags'));
        } else {
            return abort(400);
        }
    }
}