<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Laravel 9 Admin Starter Kit"/>
    <meta name="author" content="Vassili JOFFROY (@vassilidev)"/>
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    <script data-search-pseudo-elements defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
            crossorigin="anonymous"></script>
    @stack('css')
</head>
<body class="nav-fixed">
@include('layouts.panel.dashboard.navbar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('layouts.panel.dashboard.sidenav')
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        @include('layouts.panel.dashboard.footer')
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
@stack('js')
</body>
</html>
