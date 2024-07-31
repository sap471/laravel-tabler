<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>


    <link href="{{ asset('/vendors/pace/themes/blue/pace-theme-flash.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-icons.min.css') }}" rel="stylesheet" /> --}}

    @vite('resources/css/app.scss')
</head>

<body>

    <div class="page">
        @include('dashboard.partials.navbar')

        <div class="page-wrapper">
            @yield('content')

            @include('dashboard.partials.footer')
        </div>
    </div>

    @stack('modals')

    <script src="{{ asset('/vendors/pace/pace.min.js') }}" defer></script>
    @vite('resources/js/app.js')

    @stack('scripts')
</body>

</html>
