@extends('layouts.app')
@section('content')
    <div class="ml-4">
<div class="pull-right">
    <a class="btn btn-primary" href="{{URL::to('/organisators')}}">Back</a>

</div><br>
    <table class="table table-bordered table-hover" style="width: 60%">
        <tr>
            <td>
                First name:
            </td>
            <td>
                {{$organisator->firstName}}
            </td>
        </tr>
        <tr>
            <td>
                Last name:
            </td>
            <td>
                {{$organisator->lastName}}
            </td>
        </tr>
        <tr>
            <td>
                 Age:
            </td>
            <td>
                {{$organisator->age}}
            </td>
        </tr>
    </table>
    </div>
@endsection