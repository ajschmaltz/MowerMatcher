@extends('layouts.default')

@section('content')
  <div class="row" ng-controller="filterMowers">
    <div class="col-md-3">
      @include ('mowers.partials.search-mower-form')
    </div>
    <div class="col-md-9">

      @if (Request::query())
        @include ('mowers.partials.smart-search')
      @endif

      @include ('mowers.partials.mowers')
    </div>
  </div>
@stop