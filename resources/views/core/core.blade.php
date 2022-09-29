<!doctype html>
<html class="light scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css') }}">
    <title>Ningen Sastrawijaya</title>

    <link rel="icon" href="{{ asset('hey.png') }}">

    <script src="{{ url('https://code.jquery.com/jquery-3.6.1.js') }}"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('js/DataTable_Jquery.js') }}"></script> --}}

</head>

<body class="dark:bg-slate-800 font-japanese">


    @include('core.header')
    @include('core.buttons')

    @yield('main-part')

    @include('core.footer')

    <script>
        const checkbox = document.querySelector('#toggle');
        const html = document.querySelector('html');

        checkbox.addEventListener('click', function() {
            checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');

        });
    </script>
</body>

</html>
