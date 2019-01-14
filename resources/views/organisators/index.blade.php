@extends('layouts.app')
@section('content')

    <div class="panel-heading">
        <a class="btn btn-small btn-success" href="{{ URL::to('organisators/create') }}">Create organisator</a>
    </div><br>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>FName</th>
            <th>LName</th>
            <th>age</th>
            <th colspan="3">Actions</th>
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
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection