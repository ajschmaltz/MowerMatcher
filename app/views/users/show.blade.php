@extends('layouts.default')

@section('content')
  <div class="row">
    <div class="col-md-3">
      @include ('users.partials.sidenav')
    </div>
    <div class="col-md-9">

      @include ('mowers.partials.mowers', ['mowers' => $user->mowers])

    </div>
  </div>
@stop