@include('layouts.includes.app-header')
@include('layouts.includes.app-nav')
@include('layouts.includes.app-breadcrumb')

<div class="container-fluid mainContent">

	@hasSection('pageTitle'))
		<h3 class="heading">@yield('pageTitle')</h3>
	@endif
      
    @yield('content')

</div><!--/.Main Content-->

@include('layouts.includes.app-footer')
