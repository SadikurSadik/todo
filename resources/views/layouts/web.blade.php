@include('layouts.includes.web-header')
@include('layouts.includes.web-nav')

    <div class="container">
        @yield('content')
    </div>

@include('layouts.includes.web-footer')