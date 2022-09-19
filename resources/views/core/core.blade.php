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

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>

</head>

<body class="dark:bg-slate-800">


    <nav class="flex flex-row text-left justify-center py-4 px-6 dark:bg-slate-900 bg-gray-200 shadow-xl items-baseline w-full">
        <div class="mx-5 ">
            <a href="/" class="text-xl text-black dark:text-slate-200 font-bold">Home</a>
        </div>
        <div class="mx-5 ">
            <a href="/about" class="text-xl text-black  dark:text-slate-200 font-bold">About</a>
        </div>
    </nav>


    <div class="w-10 h-10 fixed flex bottom-16 left-5 z-50">
        <input type="checkbox" id="toggle" class="hidden" />
        <label for="toggle">
            <div
                class=" toggle-circle bg-slate-500 rounded-sm flex shadow-2xl border-2 border-blue-900 items-center cursor-pointer p-2">
                GELAP CUK, GELAP
            </div>
        </label>
    </div>

    <div
        class="z-50 w-10 h-10 fixed bg-purple-800 shadow-2xl border border-yellow-400 rounded-full flex bottom-5 right-5">
        <a href="#" class="w-8 h-8 m-auto bg-orange-600 rounded-full text-center text-xl">
            <i class="bi bi-arrow-up mt-5"></i>
        </a>
    </div>

    @yield('main-part')

    <script>
        const checkbox = document.querySelector('#toggle');
        const html = document.querySelector('html');

        checkbox.addEventListener('click', function() {
            checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');

        });
    </script>
</body>

</html>
