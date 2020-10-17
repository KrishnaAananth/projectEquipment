<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

	<!-- Title for the page -->
	<title>@yield('Title')</title>

	@include('equipment_provider.includes.head')

	<!-- Special Styles for Equipment Provider View -->
    @yield('Special_Style')

    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <!-- Logout -->
                                <div class="dropdown">
                                    <div class="cart">
                                        <a style="width:auto; cursor: pointer;">
                                            <div>
                                                <img class="svg" src="{{asset('assets/images/Navigation Bar/logout.svg')}}" alt="Logout">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-content">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

	<div class="super_container">

		<div class="super_container_inner">
			<div class="super_overlay"></div>

			<!-- Contents for Equipment Provider View -->
			@yield('Content')
			
		</div>
			
	</div>

	@include('equipment_provider.includes.script')

</body>

</html>