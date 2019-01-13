@extends('layouts.app')
@section('content')
    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/excursions')}}">Back</a>
    </div>
<div class="form-group">
<form method="post" action="{{url('/excursions')}}">
    <div class="form-group row">
        {{csrf_field()}}
        <label  class="col-sm-2 col-form-label col-form-label-lg">
            Name
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" name="name">
        </div>
    </div>
    <div class="form-group row">
        {{csrf_field()}}
        <label class="col-sm-2 col-form-label col-form-label-lg">
            Date
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" name="conDate">
        </div>
    </div>
    <div class="form-group row">
        {{csrf_field()}}
        <label class="col-sm-2 col-form-label col-form-label-lg">
            Duration
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" name="duration">
        </div>
    </div>
    <div class="form-group row">
        {{csrf_field()}}
        <label class="col-sm-2 col-form-label col-form-label-lg">
            Transport
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" name="typeTransport">
        </div>
    </div>
    <div class="form-group row">
        {{csrf_field()}}
        <label class="col-sm-2 col-form-label col-form-label-lg">
            Organisatior
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" name="organisator">
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
