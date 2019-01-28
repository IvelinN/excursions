@extends('layouts.app')
@section('content')
    <div class="ml-4">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/transports')}}">Back</a>

    </div>

@if(isset($details))

    <table class="table table-bordered table-hover" style="width: 60%">
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
                <td>{{$transport->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <h1>{{$message}}</h1>
    @endif
    </div>
@endsection
