@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="m-auto flex flex-col justify-center bg-putih rounded-lg shadow-lg py-16 lg:w-1/2 md:w-2/6 sm:w-1/2">
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <h1 class="font-bold text-[40px] items-center">
                    Add a Product
                </h1>
            </div>
            <div class="pt-2 pb-2 w-1/2 lg:w-1/2 md:w-2/6 sm:w-1/2 m-auto">
                <span>Title :</span>
                <br>
                <input class="w-full rounded-lg focus:ring-1 transition-all ease-linear 10s focus:animate-pulse" type="text" name="title" id="title">
            </div>
            <div class="pt-2 pb-2 w-1/2 lg:w-1/2 md:w-2/6 sm:w-1/2 m-auto">
                <span>Description :</span>
                <br>
                <textarea class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500" rows="3" name="description" id="description" placeholder="This is a textarea placeholder"></textarea>
            </div>
            <div class="pt-2 pb-2 w-1/2 lg:w-1/2 md:w-2/6 sm:w-1/2 m-auto">
                <span>Image : </span>
                <br>
                <input class="w-full rounded-lg" type="file" name="img" id="img">
            </div>
            <div class="flex items-center pt-3">
                <button type="submit" class="py-3 px-10 m-auto rounded-md bg-biru-terang hover:bg-ungu-gelap transition-all ease-linear 8s">Add</button>
            </div>
        </form>
    </div>

@endsection
