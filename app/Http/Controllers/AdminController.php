<?php

namespace App\Http\Controllers;
use App\category;
use App\Http\Requests\StoreCategoryPost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $categories = category::all()->take(10);
        return view('admin', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryPost $request)
    {
        $validatedDate = $request->validated();

        $category = new category();
        $category->category = $request ['category'];
        $category->description = $request ['description'];
        $category->save();

        return redirect()->action('AdminController@index')->with('correct', 'category gemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryPost $request, category $category)
    {
        $validatedDate = $request->validated();

        $category->category = $request ['category'];
        $category->description = $request ['description'];
        $category->save();

        return redirect()->action('AdminController@index')->with('correct', 'category gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->action('AdminController@index')->with('correct', 'category verwijderd');
    }

}
