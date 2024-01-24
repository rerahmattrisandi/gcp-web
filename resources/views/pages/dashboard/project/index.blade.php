@extends('layouts.admin')

@section('title')
    Dashboard | Product
@endsection

@section('content')
    <div class="m-auto justify-center py-16 px-10 lg:w-full md:w-[500spx] sm:w-1/2">
        <div class="pb-3">
            <button class="bg-slate-500 px-2 py-2 rounded-md hover:bg-gradient-to-r from-slate-100 to-slate-500 transition-all ease-in-out duration-500">
                <a href="{{ route('project.create') }}">Add Data</a>
            </button>
        </div>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200 dark:border-black dark:divide-black">
                        <div class="py-3 px-4">
                            <div class="relative max-w-xs">
                                <label for="hs-table-with-pagination-search" class="sr-only">Search</label>
                                <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="p-3 pl-10 block w-full border-gray-200 rounded-md text-sm focus:border-slate-500 focus:ring-blue-500" placeholder="Search for items">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-slate-500">
                                <tr>
                                    <th scope="col" class="py-3 px-4 pr-0">
                                    <div class="flex items-center h-5">
                                        <input id="hs-table-pagination-checkbox-all" type="checkbox" class="border-slate-500 rounded text-slate-500 focus:ring-blue-500">
                                        <label for="hs-table-pagination-checkbox-all" class="sr-only">Checkbox</label>
                                    </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase">Title</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase">Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase">Image</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-black uppercase">Action</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ( $projects as $project )
                                    <tr>
                                        <td class="py-3 pl-4">
                                            <div class="flex items-center h-5">
                                                <input id="hs-table-pagination-checkbox-1" type="checkbox" class="border-gray-200 rounded text-black focus:ring-blue-500">
                                                <label for="hs-table-pagination-checkbox-1" class="sr-only">Checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $project->title }}</td>
                                        <td class="px-6 py-4 whitespace-wrap text-sm text-gray-800">{{ $project->description }}</td>
                                        <td class="px-6 py-4 w-20 whitespace-wrap text-sm text-gray-800">{{ $project->img }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-blue-500 hover:text-blue-700" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="py-1 px-4">
                            <nav class="flex items-center space-x-2">
                                <a class="text-gray-400 hover:text-blue-600 p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="w-10 h-10 bg-slate-500 text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="#" aria-current="page">1</a>
                                <a class="w-10 h-10 text-gray-400 hover:text-blue-600 p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">2</a>
                                <a class="w-10 h-10 text-gray-400 hover:text-blue-600 p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">3</a>
                                <a class="text-gray-400 hover:text-blue-600 p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                                <span class="sr-only">Next</span>
                                <span aria-hidden="true">»</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
