@extends('layouts.app')

@section('content')
<div class="ml-4">



    <div class="panel-heading">
        <a class="btn btn-small btn-success" href="{{ URL::to('transports/create') }}">Create a vehicle</a>
    </div><br>


    <form action="{{action("SearchController@searchTransport")}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group" style="width: 68%">
            <input type="text" class="form-control" name="q"
                   placeholder="Search by transport"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default btn-warning">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
        </div>
    </form><br>
    <table class="table table-bordered table-hover"style="width: 63%">
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
                @guest
                @else
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
                @endguest
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
