@extends('layouts.app')
@section('content')

<div class="pull-right">
    <a class="btn btn-primary" href="{{URL::to('/organisators')}}">Back</a>

</div>
    <table class="table table-bordered table-hover">
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
                {{$organisator->age}} minet
            </td>
        </tr>
    </table>
@endsection