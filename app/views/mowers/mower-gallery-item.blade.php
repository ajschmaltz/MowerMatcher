<a class="mower" href="/mowers/1" target="_self">
  <div class="mower-image">
    @if (count($mower->images) > 0)
    {{ $mower->present()->image('resizeCrop', 400, 300) }}
    @endif
  </div>
  <div class="mower-details clearfix text-center">
    <strong>{{ $mower->present()->description() }}</strong>
    <br/>
    {{ $mower->engine_make }} {{ $mower->engine_model }} &middot; {{ $mower->engine_hours }} hours
    <br/>
    <span class="lead">${{ number_format($mower->price) }}</span> OBO
  </div>
</a>