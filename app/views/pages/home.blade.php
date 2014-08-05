@extends('layouts.default')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h1>Buy and Sell Lawn Mowers</h1>
        <p>Welcome to MowerMatcher, the place to buy and sell your lawn mowers for free.  Anyone can search and members can list their mowers.</p>
        <p>Our Smart Search allows you to save searches and get notified when other users post mowers that fit your needs.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Register »</a>
        </p>
      </div>
    </div>
  </div>
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