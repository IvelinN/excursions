@extends('layouts.app')
@section('content')
    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/transports')}}">Back</a>
    </div>
    <div class="form-group">
        <form method="post" action="{{url('/transports')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label  class="col-sm-2 col-form-label col-form-label-lg">
                    Transport type:
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="transportType">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Description:
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="description">
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
