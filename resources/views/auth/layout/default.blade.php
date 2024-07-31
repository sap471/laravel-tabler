<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        @yield('title', config('app.name'))
    </title>

    @vite('resources/css/app.scss')
</head>

<body class="d-flex flex-column">

    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="." class="navbar-brand navbar-brand-autodark">
                                <img src="/static/logo.svg" height="36" alt="">
                            </a>
                        </div>

                        @yield('content')
                    </div>
                </div>

                <div class="col-lg d-none d-lg-block">
                    <img src="{{ asset('/static/illustrations/undraw_secure_login_pdn4.svg') }}" height="300"
                        class="d-block mx-auto" alt="" />
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
