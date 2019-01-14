<?php

namespace App\Http\Controllers;

use App\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exmodel = new Transport();
        $allTransports =  $exmodel::all();
        return view('transports.index')->with('transports', $allTransports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transports.create');
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
            'transportType' => 'required|min:2|max:25',
            'description' => 'required',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()) {
            return redirect('transports/create')->WithErrors($validator);
        }
        else {
            $transport = new Transport([
                'transportType' => $request->get('transportType'),
                'description' => $request->get('description'),
            ]);
            $transport->save();
            return redirect('transports');
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
        $transport = Transport::find($id);

        return view('transports.show', compact('transport', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transport = Transport::find($id);

        return view('transports.edit', compact('transport', 'id'));
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
        $transport = Transport::find($id);
        $transport->transportType = $request->get('transportType');
        $transport->description = $request->get('description');
        $transport->save();
        return redirect('transports')->with('success', 'Task was successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transport = Transport::find($id);
        $transport->delete();
        return redirect('transports')->with('success', 'Excursion has been deleted');
    }
}
