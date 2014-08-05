@extends('layouts.default')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      @include ('mowers.partials.publish-mower-form')

      @include ('mowers.partials.mowers')
    </div>
  </div>
@stop