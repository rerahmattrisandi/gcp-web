<button
    @click="sidenav = true"
    class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-teal-500 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden">
    <svg
        class="w-5 h-5 fill-current"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd">
        </path>
    </svg>
</button>
<div
    id="sidebar"
    class="bg-putih h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out"
    x-show="sidenav"
    @click.away="sidenav = true">
    <div class="space-y-6 md:space-y-10 mt-10">
        <h1
            class="hidden md:block font-bold text-sm md:text-xl text-center">
            <a href="{{ route('dashboard') }}">
                Dashboard
            </a>
            <span class="text-teal-600">.</span>
        </h1>
        <div id="profile" class="space-y-3">
            <img
                src=""
                alt=""
                class="w-10 md:w-16 rounded-full mx-auto" />
            <div>
                @if (Auth::check())
                <h2
                    class="font-medium text-xs md:text-sm text-center text-teal-500">
                </h2>
                <p class="text-xs text-gray-500 text-center">
                    Administrator
                </p>
                @endif
            </div>
        </div>
        <div
            class="flex border-2 border-gray-200 rounded-md focus-within:ring-2 ring-teal-500">
            <input
                type="text"
                class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
                placeholder="Search" />
            <button
                class="rounded-tr-md rounded-br-md px-2 py-3 hidden md:block">
                <svg
                    class="w-4 h-4 fill-current"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div id="menu" class="flex flex-col space-y-2">
            <a
                href="{{ route('homepage.index') }}"
                class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-slate-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out">
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="">Home</span>
            </a>
            <a
                href="{{ route('project.index') }}"
                class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-slate-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"></path>
                </svg>
                <span class="">Projects</span>
            <a
                href=""
                class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-slate-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <svg
                    class="w-6 h-6 fill-current inline-block"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                </svg>
                <span class="">Users</span>
            </a>
            @if (Auth::check())
            <form method="POST" action="{{ route('logout') }}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-slate-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                @csrf
                <a
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();this.closest('form').submit();">
                    <svg
                        class="w-6 h-6 fill-current inline-block"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                    <span class="">Logout</span>
                </a>
            </form>
            @endif
        </div>
    </div>
</div>
