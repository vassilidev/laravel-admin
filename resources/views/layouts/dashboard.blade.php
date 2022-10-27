<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Laravel 9 Admin Starter Kit"/>
    <meta name="author" content="Vassili JOFFROY (@vassilidev)"/>
    <title>@yield('title', config('app.name'))</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
@include('sweetalert::alert')
<script src="{{ asset('vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
@stack('js')
</body>
</html>
