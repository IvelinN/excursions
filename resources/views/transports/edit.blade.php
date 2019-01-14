@extends('layouts.app')
@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="{{URL::to('/transports')}}">Back</a>

    </div>
    <div class="form-group">
        <form method="post" action="{{action('TransportsController@update', $id)}}">
            <div class="form-group row">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label  class="col-sm-2 col-form-label col-form-label-lg">
                    Transport type
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="transportType" value="{{$transport->transportType}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    Description
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="description" value="{{$transport->description}}">
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