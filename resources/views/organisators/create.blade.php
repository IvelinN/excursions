@extends('layouts.app')
@section('content')
    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/organisators')}}">Back</a>
    </div>
    <div class="form-group">
        <form method="post" action="{{url('/organisators')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label  class="col-sm-2 col-form-label col-form-label-lg">
                    FName
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="firstName">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    LName
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="lastName">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Age
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="age">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                </div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection