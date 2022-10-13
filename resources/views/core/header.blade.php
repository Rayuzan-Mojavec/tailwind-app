<nav
class="flex flex-row text-left justify-center py-4 px-6 dark:bg-slate-900 bg-gray-100 items-baseline w-full transition duration-500">
<ul class="navbar-nav inline-flex">
    <li class="nav-item mx-4">
        <a class="transition duration-500 nav-link text-xl font-semibold active:text-black dark:active:text-white {{ Request::is('/') ? 'text-black dark:text-white' : ' text-gray-500 hover:text-gray-700'}} " href="/">Home</a>
    </li>
    <li class="nav-item mx-4">
        <a class="transition duration-500 nav-link text-xl font-semibold active:text-black dark:active:text-white {{ Request::is('about') ? 'text-black dark:text-white' : ' text-gray-500 hover:text-gray-700'}}"
            href="/about">About</a>
    </li>
    <li class="nav-item mx-4">
        <a class="transition duration-500 nav-link text-xl font-semibold active:text-black dark:active:text-white {{ Request::is('tables') ? 'text-black dark:text-white' : ' text-gray-500 hover:text-gray-700'}}"
            href="/tables">Tables</a>
    </li>
</ul>
</nav>