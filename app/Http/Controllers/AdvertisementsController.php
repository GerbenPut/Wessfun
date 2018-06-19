<?php

namespace App\Http\Controllers;
use App\advertisement;
use App\Http\Requests\StoreAdvertisementPost;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $advertisements = advertisement::all();
        return view('advertisements.index', compact('advertisements'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisements.create', compact('advertisement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvertisementPost $request)
    {
        $validatedDate = $request->validated();

        $advertisement = new advertisement();
        $advertisement->company = $request ['Company'];
        $advertisement->URL = $request ['URL'];
        $advertisement->image_id = $request['image_id'];
        $advertisement->save();

        return redirect()->action('AdvertisementsController@index')->with('correct', 'advertisement gemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(advertisement $advertisement)
    {
        return view('advertisements.show', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(advertisement $advertisement)
    {
        return view('advertisements.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(StoreadvertisementPost $request, advertisement $advertisement)
    {
        $validatedDate = $request->validated();

        $advertisement->company = $request ['Company'];
        $advertisement->url = $request ['URL'];
        $advertisement->image_id = $request['image_id'];
        $advertisement->save();

        return redirect()->action('AdvertisementsController@index')->with('correct', 'advertisement gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect()->action('AdvertisementsController@index')->with('correct', 'advertisement verwijderd');
    }

    public function postSearch(Request $request)
    {
        if($request->has('query')) {
            $advertisements = Advertisement::where('Company', 'LIKE', '%' . $request->get('query') .  '%')->get();
            return view('advertisements.searchresults', compact('advertisements'));
        } else {
            return abort(400);
        }

    }
    public function search(){
        return view('advertisements.search');
    }
}
