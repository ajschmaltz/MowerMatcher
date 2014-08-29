@extends('layouts.default')

@section('title', 'Home')

@section('content')

  @if (! $currentUser)
    <div class="row">
      <div class="col-lg-12">
        @include ('users.register-jumbotron')
      </div>
    </div>
  @endif

  <div class="row" ng-controller="filterMowers">
    <div class="col-md-3">
      @include ('mowers.search-mower-form')
    </div>
    <div class="col-md-9">

      @if (Request::query())
        @include ('mowers.smart-search')
      @endif

      @include ('mowers.mower-gallery')
    </div>
  </div>
@stop