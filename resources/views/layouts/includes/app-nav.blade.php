<!--Navbar-->
  <div id="myNavbar" class="navbar navbar-default" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand">Todo</a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="{{ Route::currentRouteName() == 'client' ? 'active' : '' }}"><a href="{{ route('client') }}">New Client</a></li>
                <li class="{{ Route::currentRouteName() == 'project' ? 'active' : '' }}"><a href="{{ route('project') }}">New Project</a></li>
                <li class="{{ Route::currentRouteName() == 'new-task' ? 'active' : '' }}"><a href="{{ route('new-task') }}">New Task</a></li>
                <li class=""><a href="">Archieve</a></li>
                <li class=""><a href="{{ route('logout') }}">Logout</a></li>
              </ul>
          </div>
      </div>
  </div><!--Navbar End-->