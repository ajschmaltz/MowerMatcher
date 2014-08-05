@forelse($mowers->chunk(3) as $mowerSet)
  <div class="row mowers">
    @foreach ($mowerSet as $mower)
      <div class="col-md-4">
        @include ('mowers.partials.mower')
      </div>
    @endforeach
  </div>
@empty
  <p>There are no mowers to show.</p>
@endforelse