<?php

namespace App\Http\Controllers;

use App\Organisator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganisatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exmodel = new Organisator();
        $allOrganisators =  $exmodel::all();
        return view('organisators.index')->with('organisators', $allOrganisators);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisators.create');
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
            'firstName' => 'required|min:2|max:25',
            'lastName' => 'required|min:2|max:25',
            'age' => 'required',

        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()) {
            return redirect('organisators/create')->WithErrors($validator);
        }
        else {
            $organisator = new Organisator([
                'firstName' => $request->get('firstName'),
                'lastName' => $request->get('lastName'),
                'age' => $request->get('age'),
            ]);
            $organisator->save();
            return redirect('organisators');
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
        $organisator = Organisator::find($id);

        return view('organisators.show', compact('organisator', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organisator = Organisator::find($id);

        return view('organisators.edit', compact('organisator', 'id'));
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
        $organisator = Organisator::find($id);
        $organisator->firstName = $request->get('firstName');
        $organisator->lastName = $request->get('lastName');
        $organisator->age = $request->get('age');
        $organisator->save();
        return redirect('organisators')->with('success', 'Task was successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organisator = Organisator::find($id);
        $organisator->delete();
        return redirect('organisators')->with('success', 'Excursion has been deleted');
    }
}
