<div class="pad text-center">
  @include ('users.avatar', ['size' => 100])
  <h3>{{ $user->username }}</h3>
</div>
<hr/>
<ul class="nav nav-pills nav-stacked">
  <li>{{ link_to_route('profile_path', $user->username, $user->username) }}</li>
  @if ($user->is($currentUser))
    <li>{{ link_to_route('sell_path', 'Sell a Mower') }}</li>
    <li><a href="#">Edit Profile</a></li>
    <li><a href="/filters/manage">Manage Smart Search</a></li>
  @endif
</ul>