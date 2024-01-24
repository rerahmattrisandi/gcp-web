@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <div class=" bg-grey rounded-md text-center shadow-md">
        <h3 class="text-black text-lg pt-10 mt-0">Login to your account</h3>

        <!-- Email form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-5 px-[7rem] flex items-center justify-center">
                <svg class="h-6 w-6 text-black absolute -translate-x-[6.9rem] pointer-events-none" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <input
                    class="w-[250px] h-[30px] pl-[1.8rem] text-sm rounded-lg border-0 focus:ring-1 ring-purple-500 focus:outline-none transition-all duration-250 ease-linear"
                    type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
            </div>

            <!-- Password form -->
            <div class="mt-7 mb-4 pb-3 flex justify-center items-center">
                <svg class="h-6 w-6 text-black absolute -translate-x-[6.9rem] pointer-events-none" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>

                <input
                    class="w-[250px] h-[30px] pl-[1.8rem] text-sm rounded-lg border-0 focus:ring-1 ring-purple-500 focus:outline-none transition-all duration-250 ease-linear"
                    type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}" required>
            </div>

            <!-- login btn -->
            <div class="flex justify-center">
                <button type="submit"
                    class="rounded-sm shadow text-lg bg-ungu-gelap m-3 px-6 py-1 hover:text-white hover:rounded-md hover:bg-biru-terang hover:ring-1 ring-blue-500 transition-all duration-200 ease-linear">{{ __('Login') }}</button>
            </div>

        </form>
        <!-- register btn -->
        <div class="pb-[1.22rem]">
            <a href="{{ route('register') }}"
                class="text-[12px] hover:text-blue-200 hover:underline transition-all duration-200 ease-linear">Doesn't
                have
                an account?
                Register here!</a>
        </div>
    </div>
@endsection
