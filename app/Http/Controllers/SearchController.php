<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Excursion;
use App\Organisator;
use App\Transport;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchExcursion(){

            $q = Input::get ( 'q' );
            $excursion = Excursion::where('conDate','LIKE','%'.$q.'%')->get();
            if(count($excursion) > 0)
                return view('excursions.search')->withDetails($excursion)->withQuery ( $q );
            else return view ('excursions.search')->withMessage('No Details with this date found. Try to search again !');

    }

    public function searchOrganisator(){

        $q = Input::get ( 'q' );
        $organisator = Organisator::where('firstName','LIKE','%'.$q.'%')->get();
        if(count($organisator) > 0)
            return view('organisators.search')->withDetails($organisator)->withQuery ( $q );
        else return view ('organisators.search')->withMessage('No Details with this name found. Try to search again !');

    }

    public function searchTransport(){

        $q = Input::get ( 'q' );
        $transport = Transport::where('transportType','LIKE','%'.$q.'%')->get();
        if(count($transport) > 0)
            return view('transports.search')->withDetails($transport)->withQuery ( $q );
        else return view ('transports.search')->withMessage('No Details with this transport found. Try to search again !');

    }

}
