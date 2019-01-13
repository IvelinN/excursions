<?php

namespace App\Http\Controllers;

use App\Excursion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ExcursionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exmodel = new Excursion();
        $allExcursions =  $exmodel::all();
        return view('excursions.index')->with('excursions', $allExcursions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('excursions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array (
            'name' => 'required|min:2|max:255',
            'conDate' => 'required',
            'duration' => 'required',
            'typeTransport' => 'required',
            'organisator' => 'required',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()) {
            return redirect('excursions/create')->WithErrors($validator);
        }
        else {
            $excursion = new Excursion([
                'name' => $request->get('name'),
                'conDate' => $request->get('conDate'),
                'duration' => $request->get('duration'),
                'typeTransport' => $request->get('typeTransport'),
                'organisator' => $request->get('organisator')
            ]);
            $excursion->save();
            return redirect('excursions');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $excursion = Excursion::find($id);

        return view('excursions.show', compact('excursion', 'id'));
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
