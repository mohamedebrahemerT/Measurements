<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">

<style type="text/css">
    .form-check-label {
  margin-bottom: 0;
  margin-right: 4%;
}
.navbar-light .navbar-nav .nav-link
{
    color: #fff !important;
}
</style>
</head>

<body style="text-align: right;direction: rtl;
font-family: 'Cairo', sans-serif !important;
padding: 5px;
font-size: 16px;
font-weight: bold;

 ">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style=" background: rgb(75,79,240);
background: linear-gradient(90deg, rgba(75,79,240,1) 18%, rgba(255,197,77,1) 32%, rgba(249,81,80,1) 48%); ">
            <div class="container">
                <a style="font-size: 20px;
font-weight: bold;
color: #fff !important;" class="navbar-brand" href="{{ url('/') }}">
                    {{ trans('panel.site_title') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('client.home') }}">
                                    

                                       {{ trans('panel.Dashboard') }}
                                </a>
                            </li>
                            <li class="nav-item">
          <a class="nav-link" href="{{ route('client.select_Measurement') }}">                                
  {{ trans('panel.Start Test') }}
                                </a>
                            </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" >
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" style="text-align: right;">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item" style="text-align: right;">
                                    <a class="nav-link" href="{{ route('register') }}"> 
  {{ trans('panel.Register') }}
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('client.password.create') }}">
                                        حسابي 


                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      

                                           {{ trans('panel.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

       <script>
        function printDiv2(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
    </script>
</body>

</html>