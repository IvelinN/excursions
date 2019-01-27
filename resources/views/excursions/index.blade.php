@extends('layouts.app')
@section('content')





    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/images')}}">Images</a>
    </div><br>


    <div class="panel-heading" >
    <a class="btn btn-small btn-success" href="{{ URL::to('excursions/create') }}">Create an excursions</a>
</div><br>
<form action="{{action("SearchController@searchExcursion")}}" method="POST" role="search" >
    {{ csrf_field() }}
    <div class="input-group"style="width: 68%">
        <input type="text" class="form-control" name="q"
               placeholder="Search by date"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default btn-warning">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div><br>
</form>
    <table class="table table-bordered table-hover" style="width: 62%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Duration</th>
            <th>Transport</th>
            <th>Organisator</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach($excursions as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td  width="15%">{{$value->conDate}}</td>
            <td>{{$value->duration}}</td>
            <td>{{$value->typeTransport}}</td>
            <td>{{$value->organisator}}</td>
            <td>
                <a class="btn btn-primary btn-red" href="{{ URL::to('excursions/' . $value->id) }}" method="POST">Show</a>
            </td>
            <td>
                <a class="btn btn-info btn- " href="{{ URL::to('excursions/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('ExcursionsController@destroy', $value->id)}}" method="POST">
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

