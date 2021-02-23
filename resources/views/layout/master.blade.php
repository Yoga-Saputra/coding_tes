<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link  href="{{ asset('bootstrap/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">


    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}"> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: paleturquoise">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ url('/pegawai') }}">Pegawai</a>
                        </li>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>


    </div>

    <script src="{{ asset('bootstrap/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
    <script>

        $(document).ready(function() {

            $('#date').datepicker({

                format: 'yyyy-mm-dd',

                autoclose: true,

            });

        });

    </script>


</body>
</html>
