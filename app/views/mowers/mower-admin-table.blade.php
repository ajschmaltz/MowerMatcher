<table class="table">
  <thead>
    <tr>
      <th>Image</th>
      <th>Mower Description</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user->mowers as $mower)
    <tr>
      <td>{{ $mower->present()->image('resize', 100, 100) }}</td>
      <td>{{ $mower->present()->description() }}</td>
      <td>
        @include ('mowers.mower-admin-functions')
      </td>
    </tr>
    @endforeach
  <tbody>
</table>