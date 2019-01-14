@extends('layouts.app')
@section('content')

    <div class="panel-heading">
        <a class="btn btn-small btn-success" href="{{ URL::to('transports/create') }}">Create a vehicle</a>
    </div><br>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Transport type</th>
            <th>Description</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transports as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->transportType}}</td>
                <td  width="15%">{{$value->description}}</td>
                <td>
                    <a class="btn btn-primary btn-red" href="{{ URL::to('transports/' . $value->id) }}" method="POST">Show</a>
                </td>
                <td>
                    <a class="btn btn-info btn- " href="{{ URL::to('transports/' . $value->id . '/edit') }}">Edit</a>
                </td>
                <td>
                    <form action="{{action('TransportsController@destroy', $value->id)}}" method="POST">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
