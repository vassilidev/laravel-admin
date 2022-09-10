<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>@yield('title', config('app.name'))</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
</head>
<body class="bg-dark">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            @yield('content')
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        @include('layouts.auth.footer')
    </div>
</div>
@include('sweetalert::alert')
<script src="{{ asset('vendor/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('js/scripts.js') }}" defer></script>
</body>
</html>
