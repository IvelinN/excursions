@extends('layouts.app')
@section('content')
    <div class="ml-4">

<div class="pull-right">
    <a class="btn btn-primary" href="{{URL::to('/excursions')}}">Back</a>

</div><br>
    <table class="table table-bordered table-hover" style="width: 60%">
        <tr>
            <td>
                Excursion name:
            </td>
            <td>
                {{$excursion->name}}
            </td>
        </tr>
        <tr>
            <td>
                Conduction date:
            </td>
            <td>
                {{$excursion->conDate}}
            </td>
        </tr>
        <tr>
            <td>
                 Duration:
            </td>
            <td>
                {{$excursion->duration}} days
            </td>
        </tr>
        <tr>
            <td>
                Type transport:
            </td>
            <td>
                {{$excursion->typeTransport}}
            </td>
        </tr>
        <tr>
            <td>
                Organisator:
            </td>
            <td>
                {{$excursion->organisator}}
            </td>
        </tr>
    </table>
    </div>
@endsection