<a class="mower" href="/mower/1">
  <div class="mower-image">
    @if(count($mower->images) > 0)
    <img class="img-responsive" src="/{{ $mower->images[0]->filename }}" />
    @endif
  </div>
  <div class="mower-details clearfix text-center">
    <strong>{{ $mower->year }} {{ $mower->mower_make }} {{ $mower->mower_model }} {{ $mower->cutting_width }}"</strong>
    <br/>
    {{ $mower->engine_make }} {{ $mower->engine_model }} &middot; {{ $mower->engine_hours }} hours
    <br/>
    <span class="lead">${{ number_format($mower->price) }}</span> OBO
  </div>
</a>