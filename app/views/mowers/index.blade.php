@extends('layouts.default')

@section('content')
  <div class="row">

    <div class="col-md-3">
      @include ('mowers.partials.search-mower-form')
    </div>

    <div class="col-md-9">
      @include ('mowers.partials.publish-mower-form')
      @include ('mowers.partials.mower-gallery')
    </div>

  </div>
@stop