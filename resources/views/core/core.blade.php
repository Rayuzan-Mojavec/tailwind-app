<!doctype html>
<html class="light scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('css/Icon.css') }}">
    <title>Ningen Sastrawijaya</title>

    <link rel="icon" href="{{ asset('hey.png') }}">

    <script src="{{ asset('js/Jquery.js') }}"></script>
    <script src="{{ asset('js/Icon.js') }}"></script>


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

        feather.replace();
    </script>
</body>

</html>
