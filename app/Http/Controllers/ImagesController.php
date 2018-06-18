<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreImagePost;
use App\Image;
use App\User;
use Illuminate\Http\Request;

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
        return view('Images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagePost $request)
    {
        $image = new Image();
        $image->title = $request ['title'];
        $image->description = $request ['description'];
        $image->sort = $request ['sort'];
        $image->url = $request ['url'];
        $image->save();

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
        return view('Images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(StoreImagePost $request, Image $image)
    {
        $validatedDate = $request->validated();

        $image->title = $request ['title'];
        $image->description = $request ['description'];
        $image->sort = $request ['sort'];
        $image->url = $request ['url'];
        $image->save();

        return redirect()->action('ImagesController@index')->with('correct', 'image gewijzigt');
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
