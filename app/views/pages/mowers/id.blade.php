@extends('layouts.default')

@section('title', $mower->present()->description() . ' For Sale')

@section('content')
<div class="row">

  <div class="col-md-3">
    @include ('users.profile', ['user' => $mower->user])
    @include ('mowers.specs')
  </div>

  <div class="col-md-9">
    @include ('mowers.mower')
  </div>

</div>
@stop