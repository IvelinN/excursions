@extends('layouts.app')
@section('content')

<div class="pull-right">
    <a class="btn btn-primary" href="{{URL::to('/transports')}}">Back</a>

</div>
    <table class="table table-bordered table-hover">
        <tr>
            <td>
                Vehicle type:
            </td>
            <td>
                {{$transport->typeTransport}}
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