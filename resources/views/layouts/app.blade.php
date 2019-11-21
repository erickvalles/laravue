<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
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


</head>
<body class="h-100">
    <div id="app" class="h-100">
        <b-navbar toggleable="lg" type="dark" variant="primary">
            <b-navbar-brand href="{{url('/')}}">{{config('app.name',"prueba xd")}}</b-navbar-brand>

            <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>

            <b-collapse is-nav id="nav_text_collapse">
                <b-navbar-nav  class="ml-auto">
                    @guest
                        <b-nav-item href="{{route('login')}}">Ingresar</b-nav-item>
                        <b-nav-item href="{{route('register')}}">Registrarme</b-nav-item>
                    @else
                        <b-nav-item-dropdown text="Usuario" right>
                            <b-dropdown-item href="#" @click="salir">Salir</b-dropdown-item>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">@csrf</form>
                        </b-nav-item-dropdown>
                    @endguest
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>

        <main class="py-0" style="height: calc(100vh - 56px);">
            @yield('content')
        </main>
    </div>
</body>
</html>
