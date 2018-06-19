<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreImagePost;
use App\Image;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = image::all();
        $categories = category::all();
        return view('layouts.master2', compact('images', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = [];

        foreach (Category::all() as $cat) $categories[$cat->id] = $cat->category;

        return view('Images.create', compact( 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagePost $request)
    {
        if($cat = Category::find($request->get('category_id'))) {
            $image = new Image();
            $image->title = $request ['title'];
            $image->description = $request ['description'];
            $image->sort = $request ['sort'];
            $image->url = $request ['url'];
            $image->user_id = Auth::user()->id;
            $image->category_id = $cat->id;
            $image->save();
        } else {
            return redirect()->back()->withErrors(['category_id' => ['Invalid id']]);
        }


        return redirect()->action('ImagesController@index')->with('correct', 'image toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image, User $user)
    {
        return view('Images.show', compact('image', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $categories = [];

        foreach (Category::all() as $cat) $categories[$cat->id] = $cat->category;

        return view('Images.edit', compact('image', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(StoreImagePost $request, image $image)
    {
        if($cat = Category::find($request->get('category_id'))) {
            $image->title = $request ['title'];
            $image->description = $request ['description'];
            $image->sort = $request ['sort'];
            $image->url = $request ['url'];
            $image->user_id = Auth::user()->id;
            $image->category_id = $cat->id;
            $image->save();
        } else {
            return redirect()->back()->withErrors(['category_id' => ['Invalid id']]);
        }

        return redirect()->action('ImagesController@index')->with('correct', 'image gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->action('ImagesController@index')->with('correct', 'Images verwijderd');
    }
}
