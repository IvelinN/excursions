@extends('layouts.app')
@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/excursions')}}">Back</a>

    </div>
    <div class="form-group">
        <form method="post" action="{{action('ExcursionsController@update', $id)}}">
            <div class="form-group row">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label  class="col-sm-2 col-form-label col-form-label-lg">
                    Name
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="name" value="{{$excursion->name}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Date
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="conDate" value="{{$excursion->conDate}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Duration
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="duration" value="{{$excursion->duration}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Transport
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="typeTransport" value="{{$excursion->typeTransport}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Organisator
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="organisator" value="{{$excursion->organisator}}">
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