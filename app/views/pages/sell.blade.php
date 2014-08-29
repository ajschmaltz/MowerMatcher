@extends('layouts.default')

@section('content')
<div class="row">
  <div class="col-md-3">
    @include ('users.sidenav', ['user' => $currentUser])
  </div>
  <div class="col-md-9">

    @include ('mowers.publish-mower-form')

  </div>
</div>
@stop