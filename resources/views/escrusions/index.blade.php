@extends('layouts.app')
@section('content')


    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Duration</th>
            <th>Transport</th>
            <th>Organisator</th>
        </tr>
        @foreach($excursions as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->conDate}}</td>
            <td>{{$value->duration}}</td>
            <td>{{$value->typeTransport}}</td>
            <td>{{$value->organisator}}</td>
        </tr>
        @endforeach
    </table>
@endsection
