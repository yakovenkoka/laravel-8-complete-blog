@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-15">
    <h1 class="text-center text-5xl font-bold text-black mb-15">My Movie List</h1>

    <div class="text-center mb-10">
        <p class="text-xl text-gray-700 mb-6">
            <img src="{{ asset('images/movie_icon.png') }}" alt="Movie Icon" class="inline-block w-8 h-8 mr-2">
            Welcome to the "My Movie List" page! Here, you can keep track of movies you have discovered or read about in our blog. 
            This page helps you manage all the movies you want to watch and those you have already seen.
        </p>
        <p class="text-xl text-gray-700">
            <img src="{{ asset('images/list_icon.png') }}" alt="List Icon" class="inline-block w-8 h-8 mr-2">
            You can add new movies, specify their release year, mark movies as watched, and remove them from the list. 
            Use this page to ensure you never forget about the movies you want to watch and share your experiences with friends!
        </p>
    </div>

    <form action="{{ route('movies.store') }}" method="POST" class="mb-8">
        @csrf
        <div class="flex items-center mb-4">
            <input type="text" name="title" placeholder="Movie Title" class="border p-2 mr-2 w-full" required>
            <input type="number" name="year" placeholder="Release Year" class="border p-2 mr-2 w-full">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Add</button>
        </div>
    </form>

    <ul class="space-y-4">
        @foreach($movies as $movie)
            <li class="flex items-center justify-between p-4 border rounded shadow">
                <div>
                    <span class="font-bold text-lg">{{ $movie->title }}</span>
                    @if($movie->year)
                        <span class="text-gray-600">({{ $movie->year }})</span>
                    @endif
                </div>
                <div class="flex space-x-2">
                    <form action="{{ route('movies.markAsWatched', $movie) }}" method="POST" class="inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="bg-green-500 text-white p-2 rounded">Mark as Watched</button>
                    </form>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white p-2 rounded">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection