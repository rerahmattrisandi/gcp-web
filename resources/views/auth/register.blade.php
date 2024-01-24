@extends('layouts.guest')

@section('title')
    Register
@endsection

@section('content')
    <div class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4 my-24 w-[70rem] flex flex-col font-Poppins">
        <h3 class="text-center pb-5 text-[30px]">Register your account</h3>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-first-name">
                        Full Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 focus:ring-1 ring-purple-500 focus:outline-none transition-all duration-250 ease-linear"
                        name="name" id="name grid-first-name" type="text" placeholder="Full Name" required>
                    <p class="text-red text-xs italic">Please fill out this field.</p>
                </div>

                <div class="md:w-1/2 px-3 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-last-name">
                        Username
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 focus:ring-1 ring-purple-500 focus:outline-none transition-all duration-250 ease-linear"
                        name="username" id="username grid-last-name" type="text" placeholder="Username" required>
                    <p class="text-red text-xs italic">Please fill out this field.</p>
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-email">
                        Email
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 focus:ring-1 ring-purple-500 focus:outline-none transition-all duration-250 ease-linear"
                        name="email" id="email grid-email" type="email" placeholder="youremail@example.com" required>
                    <p class="text-grey-dark text-xs italic">Please fill out this field.</p>
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-password">
                        Password
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 focus:ring-1 ring-purple-500 focus:outline-none transition-all duration-250 ease-linear"
                        name="password" id="password grid-password" type="password" placeholder="******************" required>
                    <p class="text-grey-dark text-xs italic">Please fill out this field.</p>
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-password">
                        Confirm Password
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 focus:ring-1 ring-purple-500 focus:outline-none transition-all duration-250 ease-linear"
                        name="password_confirmation" id="password_confirmation grid-password" type="password" placeholder="******************" required>
                    <p class="text-grey-dark text-xs italic">Please fill out this field.</p>
                </div>
            </div>
            <div class="md:w-1/2 px-1 mt-8">
                <button
                    class="rounded-sm shadow text-lg bg-purple-500 px-5 py-1 hover:text-white hover:rounded-md hover:bg-purple-950 hover:ring-1 ring-blue-500 transition-all duration-200 ease-linear"
                    type="submit">Sign Up
                </button>
            </div>
        </form>
        <div class="md:w-1/2 px-1 mt-8">
            <a href="{{ route('login') }}"
                class="text-[12px] hover:text-blue-200 hover:underline transition-all duration-200 ease-linear">Have
                an account already? Sign In</a>
        </div>
    </div>
@endsection
