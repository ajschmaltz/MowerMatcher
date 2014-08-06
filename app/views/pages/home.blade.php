@extends('layouts.default')

@section('content')

  @if (! $currentUser)
    <div class="row">
      <div class="col-lg-12">
        @include ('layouts.partials.register-jumbotron')
      </div>
    </div>
  @endif

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