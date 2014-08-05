@extends('layouts.default')

@section('content')
<div class="row">
  <div class="col-md-3">
    @include ('users.partials.sidenav', ['user' => $currentUser])
  </div>
  <div class="col-md-9">

    {{ $filters }}

  </div>
</div>
@stop