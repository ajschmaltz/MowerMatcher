<table class="table">
  <thead>
  <tr>
    <th>Spec</th>
    <th>Value</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Price</td>
    <td>${{ number_format($mower->price) }}</td>
  </tr>
  <tr>
    <td>Availability</td>
    <td>{{ $mower->present()->availability() }}</td>
  </tr>
  <tr>
    <td>Make</td>
    <td>{{ $mower->mower_make }}</td>
  </tr>
  <tr>
    <td>Model</td>
    <td>{{ $mower->mower_model }}</td>
  </tr>
  <tr>
    <td>Year</td>
    <td>{{ $mower->year }}</td>
  </tr>
  <tr>
    <td>Cutting Width</td>
    <td>{{ $mower->cutting_width }}"</td>
  </tr>
  <tr>
    <td>Engine Make</td>
    <td>{{ $mower->engine_make }}</td>
  </tr>
  <tr>
    <td>Engine Model</td>
    <td>{{ $mower->engine_model }}</td>
  </tr>
  <tr>
    <td>Engine Hours</td>
    <td>{{ $mower->engine_hours }}</td>
  </tr>
  </tbody>
</table>