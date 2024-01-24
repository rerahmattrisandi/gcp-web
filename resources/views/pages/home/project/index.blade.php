@extends('layouts.home')

@section('title')
    Re | BimBim
@endsection

@section('content')
    <div class="bg-putih pt-32 flex">
        @foreach ($projects as $project)
            <div class="flex w-[300px] px-5 mx-auto">
                <a class="border shadow-lg rounded-xl hover:shadow-lg transition dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]" href="#">
                    <div class="py-5 px-5 rounded-lg">
                        <img class="" src="{{ Storage::url($project->img) }}" alt="Project Image">
                    </div>
                    <div class="p-4 lg:p-2 md:p-5 sm:p-2">
                        <h3 class="text-lg text-center font-bold text-gray-800 dark:text-putih">
                        {{ $project->title }}
                        </h3>
                        <p class="mt-1 text-justify text-gray-800 dark:text-gray-400">
                        {{ $project->description }}
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
