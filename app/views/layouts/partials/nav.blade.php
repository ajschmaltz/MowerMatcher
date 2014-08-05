<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{ link_to_route('home', 'MowerMatcher', null, ['target' => '_self', 'class' => 'navbar-brand']) }}
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- Links should go here -->
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if($currentUser)
          <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ $currentUser->present()->gravatar }}" alt="{{ md5($currentUser->email) }}" class="nav-gravatar">
              {{ $currentUser->username }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>{{ link_to_route('profile_path', 'Your Profile', $currentUser->username, ['target' => '_self']) }}</li>
              <li><a href="#">Another action</a></li>
              <li class="divider"></li>
              <li>{{ link_to_route('logout_path', 'Log Out', null, ['target' => '_self']) }}</li>
            </ul>
          </li>
        @else
          <li>
            {{ link_to_route('register_path', 'Register', null, ['target' => '_self']) }}
          </li>
          <li>
            {{ link_to_route('login_path', 'Login', null, ['target' => '_self']) }}
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>