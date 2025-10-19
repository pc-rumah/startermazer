<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - @yield('title')</title>

    @include('includes.style')
</head>

<body>
    <div id="app">
        @include('sweetalert::alert')
        @include('sweetalert::error')

        <x-dashboard.sidebar />

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('title')</h3>
            </div>

            <div class="page-content">
                @yield('content')
            </div>

            <x-dashboard.footer />
        </div>
    </div>
    @include('includes.script')
</body>

</html>
