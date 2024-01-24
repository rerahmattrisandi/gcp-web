<div class="order-1">
    <a href="{{ route('homepage.index') }}">
        <h2 class="text-slate-300 font-bold text-2xl">E-Project </h2>
    </a>
</div>

<div class="order-2">
    <div class="hidden sm:hidden md:flex lg:flex">
        <ul class="flex gap-8">
            <li>
                <a class="text-slate-300 hover:text-white transition-all ease-in-out 5s" href="{{ route('homepage.index') }}">Home</a>
            </li>
            <li>
                <a class="text-slate-300 hover:text-black transition-all ease-in-out 5s" href="{{ route('homepage.project') }}">Projects</a>
            </li>
            <li>
                <a class="text-slate-300 hover:text-black transition-all ease-in-out 5s" href="">Contact</a>
            </li>
        </ul>
    </div>
</div>

<div class="order-3 hidden">
    <div class="flex justify-between items-center">
        <div class="hamburger bg-light-sage-green hover:bg-ungu-gelap transition-all ease-in-out 5s rounded-md block sm:block md:hidden lg:hidden">
            <img class="w-7" src="{{ asset('icon/list-outline.svg') }}" alt="">
        </div>
        <div class="hidden sm:hidden md:flex lg:flex">
            <ul class="flex gap-2">
                @if (Auth::check())
                <li class="py-3">
                    <a class="text-biru-terang hover:text-ungu-gelap transition-all ease-in-out 5s" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="rounded-full bg-biru-terang hover:bg-ungu-gelap hover:text-putih transition-all ease-in-out 5s p-3">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout
                        </a>
                    </li>
                </form>
                @else
                <li class="p-3">
                    <a class="text-biru-terang hover:text-ungu-gelap transition-all ease-in-out 5s" href="{{ route('login') }}">Login</a>
                </li>
                <li class="rounded-full bg-light-sage-green hover:bg-ungu-gelap hover:text-putih transition-all ease-in-out 5s p-3">
                    <a href="{{ route('user.index') }}">SignUp</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>

