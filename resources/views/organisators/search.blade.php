@extends('layouts.app')
@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/organisators')}}">Back</a>

    </div>

@if(isset($details))

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>FName</th>
            <th>LName</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $organisator)
            <tr>
                <td>{{$organisator->firstName}}</td>
                <td  width="15%">{{$organisator->lastName}}</td>
                <td>{{$organisator->age}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <h1>{{$message}}</h1>
    @endif
@endsection
