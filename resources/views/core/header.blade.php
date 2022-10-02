<nav
class="flex flex-row text-left justify-center py-4 px-6 dark:bg-slate-900 bg-gray-100 items-baseline w-full">
<ul class="navbar-nav inline-flex">
    <li class="nav-item mx-4">
        <a class="nav-link text-xl font-semibold active:text-black {{ Request::is('/') ? 'text-black' : ' text-gray-500 hover:text-gray-700'}} " href="/">Home</a>
    </li>
    <li class="nav-item mx-4">
        <a class="nav-link text-xl font-semibold active:text-black {{ Request::is('about') ? 'text-black' : ' text-gray-500 hover:text-gray-700'}}"
            href="/about"><i class="bi bi-arrow-down-left-square"></i>About</a>
    </li>
    <li class="nav-item mx-4">
        <a class="nav-link text-xl font-semibold active:text-black {{ Request::is('tables') ? 'text-black' : ' text-gray-500 hover:text-gray-700'}}"
            href="/tables">Tables</a>
    </li>
</ul>
</nav>