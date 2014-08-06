<div class="row mowers">
  @forelse($mowers as $mower)
    <div class="col-sm-4 col-xs-6">
      @include ('mowers.partials.mower')
    </div>
  @empty
    <p>There are no mowers to show.</p>
  @endforelse
</div>