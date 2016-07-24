<!-- Breadcrumb -->
<header class="header">
  <div class="container">
      <ol class="breadcrumb">
          <li><a href="#">Home</a>
          </li>
          <li><a href="#">Library</a>
          </li>
          <li class="active">Data</li>
      </ol>
      <div class="profile">
        <div><a href="profile.html"><img src="/img/profile-pic.png" alt="Profile Pic" /></a></div>
        <div class="">
          <a class="name" href="profile.html">{{ Auth::user()->name }}</a>
          <span class="designation">{{ Auth::user()->designation }}<span>
        </div>
      </div>
  </div>
</header><!-- End Header -->
<!-- Breadcrumb -->