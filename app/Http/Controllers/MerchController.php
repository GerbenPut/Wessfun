<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMerchPost;
use App\Merch;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merches = merch::all()->take(0);
        return view('merch.index', compact('merches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Merch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMerchPost $request)
    {
        $merch = new Merch();
        $merch->name = $request ['name'];
        $merch->price = $request ['price'];
        $merch->size = $request ['size'];
        $merch->url = $request ['url'];
        $merch->save();

        return redirect()->action('MerchController@index')->with('correct', 'merch toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function show(Merch $merch)
    {
        return view('Merch.show', compact('merch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function edit(Merch $merch)
    {
        return view('Merch.edit', compact('merch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMerchPost $request, Merch $merch)
    {
        $validatedDate = $request->validated();

        $merch->name = $request ['name'];
        $merch->price = $request ['price'];
        $merch->size = $request ['size'];
        $merch->url = $request ['url'];
        $merch->save();

        return redirect()->action('MerchController@index')->with('correct', 'Merch gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merch $merch)
    {
        $merch->delete();
        return redirect()->action('MerchController@index')->with('correct', 'Merch verwijderd');
    }
}
