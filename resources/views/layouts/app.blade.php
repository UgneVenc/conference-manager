<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('site.name'))</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark"
         aria-label="{{ __('site.navigation') }}"
         x-data="{ menuOpen: false }">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ __('site.name') }}
            </a>

            <button type="button"
                    class="btn btn-outline-light d-md-none"
                    aria-controls="mobile-navigation"
                    aria-expanded="false"
                    x-bind:aria-expanded="menuOpen.toString()"
                    x-on:click="menuOpen = !menuOpen">
                {{ __('site.menu') }}
            </button>

            <a class="nav-link text-white d-none d-md-block" href="{{ url('/') }}">
                {{ __('site.conferences') }}
            </a>

            <div id="mobile-navigation" class="w-100 pt-2 d-md-none"
                 x-cloak x-show="menuOpen">
                <a class="nav-link text-white" href="{{ url('/') }}">
                    {{ __('site.conferences') }}
                </a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>
</body>
</html>