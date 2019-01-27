@extends('layouts.app')
@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/images')}}">Images</a>
    </div><br>


    <div class="panel-heading">
        <a class="btn btn-small btn-success" href="{{ URL::to('organisators/create') }}">Create organisator</a>
    </div><br>
    <form action="{{action("SearchController@searchOrganisator")}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group" style="width: 68%"  >
            <input type="text" class="form-control" name="q"
                   placeholder="Search by first name"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default btn-warning">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
        </div>
    </form><br>
    <table class="table table-bordered table-hover" style="width: 62%; background-image: "  >
        <thead>
        <tr>
            <th>ID</th>
            <th>FName</th>
            <th>LName</th>
            <th>age</th>
            <th colspan="3" style="width: 20%">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($organisators as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->firstName}}</td>
                <td  width="15%">{{$value->lastName}}</td>
                <td>{{$value->age}}</td>
                <td>
                    <a class="btn btn-primary btn-red" href="{{ URL::to('organisators/' . $value->id) }}" method="POST">Show</a>
                </td>

                @guest
                @else
                    <td>
                        <a class="btn btn-info btn- " href="{{ URL::to('organisators/' . $value->id . '/edit') }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{action('OrganisatorsController@destroy', $value->id)}}" method="POST">
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
@endsection
