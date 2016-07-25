<!-- Breadcrumb -->
<header class="header">
  <div class="container">
      <ol class="breadcrumb">
        @if(Route::currentRouteName() == 'dashboard')
          <li class="active">Dashboard</li>
        @else
          <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="active">{{ Route::currentRouteName() }}</li>
        @endif
      </ol>
      <div class="profile">
        <div><a href="{{ route('profile') }}"><img src="/img/{{ Auth::user()->photo }}" alt="Profile Pic" /></a></div>
        <div class="">
          <a class="name" href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
          <span class="designation">{{ Auth::user()->current_designation }}<span>
        </div>
      </div>
  </div>
</header><!-- End Header -->
<!-- Breadcrumb -->