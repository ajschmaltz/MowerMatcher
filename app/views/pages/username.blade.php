@extends('layouts.default')

@section('content')
<div class="row">
  <div class="col-md-3">
    @include ('users.sidenav')
  </div>
  <div class="col-md-9">

    @include ('mowers.mower-gallery', ['mowers' => $user->mowers])

  </div>
</div>
@stop