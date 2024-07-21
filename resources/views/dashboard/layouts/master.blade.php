<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>


    <link href="{{ asset('/vendors/pace/themes/blue/pace-theme-flash.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/tabler-icons.min.css') }}" rel="stylesheet" />

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        .navbar {
            padding: 0 !important;
        }

        .ti {
            font-size: 1.35em;
        }
    </style>
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

    <!-- Libs JS -->
    {{-- <script src="{{ asset('/libs/tom-select/dist/js/tom-select.base.min.js') }}" defer></script>
    <script src="{{ asset('/libs/fslightbox/index.js') }}" defer></script> --}}
    <script src="{{ asset('/vendors/pace/pace.min.js') }}" defer></script>

    <!-- Tabler Core -->
    <script src="{{ asset('/js/tabler.min.js') }}" defer></script>

    @stack('scripts')
</body>

</html>
