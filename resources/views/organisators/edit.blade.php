@extends('layouts.app')
@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/organisators')}}">Back</a>

    </div>
    <div class="form-group">
        <form method="post" action="{{action('OrganisatorsController@update', $id)}}">
            <div class="form-group row"  style="width: 50%">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label  class="col-sm-2 col-form-label col-form-label-lg">
                    First name
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="firstName" value="{{$organisator->firstName}}">
                </div>
            </div>
            <div class="form-group row" style="width: 50%">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Last name
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="lastName" value="{{$organisator->lastName}}">
                </div>
            </div>
            <div class="form-group row" style="width: 50%">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Age
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="age" value="{{$organisator->age}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                </div>
                <button type="submit" class="btn btn-primary" value="Update" >Update</button>
            </div>
        </form>
    </div>

@endsection