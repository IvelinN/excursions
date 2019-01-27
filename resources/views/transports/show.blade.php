@extends('layouts.app')
@section('content')

<div class="pull-right">
    <a class="btn btn-primary" href="{{URL::to('/transports')}}">Back</a>

</div><br>
    <table class="table table-bordered table-hover" style="width: 60%">
        <tr>
            <td>
                Vehicle type:
            </td>
            <td>
                {{$transport->transportType}}
            </td>
        </tr>
        <tr>
            <td>
                Description:
            </td>
            <td>
                {{$transport->description}}
            </td>
        </tr>
    </table>
@endsection