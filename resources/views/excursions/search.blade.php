@extends('layouts.app')
@section('content')
    <div class="ml-4">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/excursions')}}">Back</a>

    </div>

@if(isset($details))

    <table class="table table-bordered table-hover" style="width: 60%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Duration</th>
            <th>Transport</th>
            <th>Organisator</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $excursions)
            <tr>
                <td>{{$excursions->name}}</td>
                <td>{{$excursions->conDate}}</td>
                <td>{{$excursions->duration}}</td>
                <td>{{$excursions->typeTransport}}</td>
                <td>{{$excursions->organisator}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <h1>{{$message}}</h1>
    @endif
    </>
@endsection
