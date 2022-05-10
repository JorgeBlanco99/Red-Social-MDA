<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/home') }}">
                    <div><img src = "/svg/logo.jpg" style="height: 35px; border-right: 1px solid #333;"></div>
                    <div class="pl-3 pt-1" style="padding-left:12px;">RedSocial</div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <search-bar> </search-bar>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile/{{auth()->user()->id}}" style="display:flex">
                                        <svg style="margin-right:12px" width="22" height="21" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C9.37665 2.25 7.25 4.37665 7.25 7C7.25 9.62335 9.37665 11.75 12 11.75C14.6234 11.75 16.75 9.62335 16.75 7C16.75 4.37665 14.6234 2.25 12 2.25ZM9 14.25C6.37665 14.25 4.25 16.3766 4.25 19C4.25 20.5188 5.48122 21.75 7 21.75H17C18.5188 21.75 19.75 20.5188 19.75 19C19.75 16.3766 17.6234 14.25 15 14.25H9Z" fill="#22282F"/>
                                        </svg>

                                        {{ 'Profile' }}
                                    </a>
                                    <a style="display:flex" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <svg style="margin-right:9px; margin-left:3px;" width="22" height="21" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.54651 1.25061H8.51072C7.60648 1.2506 6.8772 1.25059 6.28891 1.30391C5.68256 1.35887 5.15276 1.47517 4.67151 1.75302C4.10144 2.08215 3.62805 2.55554 3.29892 3.12561C3.02107 3.60686 2.90477 4.13666 2.84981 4.74301C2.7965 5.33129 2.7965 6.06054 2.79651 6.96476V6.96482V7.00061L2.79651 17.0006V17.0364C2.7965 17.9406 2.79649 18.6699 2.84981 19.2582C2.90477 19.8646 3.02106 20.3944 3.29891 20.8756C3.62804 21.4457 4.10144 21.9191 4.67151 22.2482C5.15276 22.5261 5.68256 22.6424 6.28891 22.6973C6.87719 22.7506 7.60646 22.7506 8.51069 22.7506H8.54651H8.58232C9.48656 22.7506 10.2158 22.7506 10.8041 22.6973C11.4105 22.6424 11.9403 22.5261 12.4215 22.2482C12.9916 21.9191 13.465 21.4457 13.7941 20.8756C14.072 20.3944 14.1883 19.8646 14.2432 19.2582C14.2965 18.6699 14.2965 17.9406 14.2965 17.0364V17.0006V16.0006C14.2965 15.5864 13.9607 15.2506 13.5465 15.2506C13.1323 15.2506 12.7965 15.5864 12.7965 16.0006V17.0006C12.7965 17.949 12.7958 18.6102 12.7493 19.1228C12.7038 19.6251 12.6191 19.9107 12.4951 20.1256C12.2976 20.4677 12.0136 20.7517 11.6715 20.9492C11.4566 21.0732 11.171 21.1579 10.6687 21.2034C10.1561 21.2499 9.49493 21.2506 8.54651 21.2506C7.59809 21.2506 6.93692 21.2499 6.4243 21.2034C5.92199 21.1579 5.63641 21.0732 5.42151 20.9492C5.07947 20.7517 4.79543 20.4677 4.59795 20.1256C4.47388 19.9107 4.38921 19.6251 4.34369 19.1228C4.29723 18.6102 4.29651 17.949 4.29651 17.0006L4.29651 7.00061C4.29651 6.05219 4.29723 5.39102 4.34369 4.8784C4.38922 4.3761 4.47388 4.09051 4.59795 3.87561C4.79543 3.53357 5.07947 3.24953 5.42151 3.05205C5.63641 2.92798 5.922 2.84332 6.4243 2.79779C6.93692 2.75133 7.59809 2.75061 8.54651 2.75061C9.49493 2.75061 10.1561 2.75133 10.6687 2.79779C11.171 2.84332 11.4566 2.92798 11.6715 3.05205C12.0136 3.24953 12.2976 3.53357 12.4951 3.87561C12.6191 4.09051 12.7038 4.3761 12.7493 4.8784C12.7958 5.39102 12.7965 6.05219 12.7965 7.00061V8.00061C12.7965 8.41482 13.1323 8.75061 13.5465 8.75061C13.9607 8.75061 14.2965 8.41482 14.2965 8.00061V7.00061V6.96484C14.2965 6.06059 14.2965 5.33131 14.2432 4.74301C14.1883 4.13666 14.072 3.60686 13.7941 3.12561C13.465 2.55554 12.9916 2.08215 12.4215 1.75302C11.9403 1.47517 11.4105 1.35887 10.8041 1.30391C10.2158 1.25059 9.48654 1.2506 8.5823 1.25061H8.54651ZM18.0768 7.46979C17.7839 7.1769 17.3091 7.1769 17.0162 7.46979C16.7233 7.76269 16.7233 8.23756 17.0162 8.53045L19.7358 11.2501L8.54651 11.2501C8.1323 11.2501 7.79651 11.5859 7.79651 12.0001C7.79651 12.4143 8.1323 12.7501 8.54651 12.7501L19.7358 12.7501L17.0162 15.4698C16.7233 15.7627 16.7233 16.2376 17.0162 16.5305C17.3091 16.8233 17.7839 16.8233 18.0768 16.5305L22.0768 12.5305C22.3697 12.2376 22.3697 11.7627 22.0768 11.4698L18.0768 7.46979Z" fill="#22282F"/>
                                        </svg>

                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
