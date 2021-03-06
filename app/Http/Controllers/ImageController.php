<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ImageUpload;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exmodel = new Images();
        $allImages =  $exmodel::all();
        return view('images.index')->with('images', $allImages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('customImage')->store('public/sample-images');

        $image = new Images([
           'fileName' =>basename($path),
           'imageDescription' => $request->get('imageDescription')
        ]);
        $image->save();

        return redirect('images');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $image = Images::find($id);
        Storage::delete('public/sample-images' . $image->fileName);
        $image->delete();

        return redirect('images')->with('delete', 'Image was deleted!');
    }
}
