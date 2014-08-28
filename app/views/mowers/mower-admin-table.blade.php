<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Mower Description</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user->mowers as $mower)
    <tr>
      <td>{{ $mower->id }}</td>
      <td>{{ $mower->mower_make }}</td>
      <td>
        @include ('mowers.partials.mower-admin-functions')
      </td>
    </tr>
    @endforeach
  <tbody>
</table>