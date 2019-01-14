@extends('layouts.app')
@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/transports')}}">Back</a>

    </div>

@if(isset($details))

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Transport type</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $transport)
            <tr>
                <td>{{$transport->transportType}}</td>
                <td  width="15%">{{$transport->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <h1>{{$message}}</h1>
    @endif
@endsection
