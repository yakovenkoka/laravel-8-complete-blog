<!-- filepath: /Users/karinayakovenko/VSCode/Server side/CA2/laravel-8-complete-blog/resources/views/movies/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-15">
    <h1 class="text-center text-5xl font-bold text-black mb-15">My Movie List</h1>

    <div class="text-center mb-10">
        <p class="text-xl text-gray-900 mb-6">
            <img src="{{ asset('images/movie_icon4.png') }}" alt="Movie Icon" class="inline-block w-8 h-8 mr-2">
            Welcome to the "My Movie List" page! Here, you can keep track of movies you have discovered or read about in our blog. 
            This page helps you manage all the movies you want to watch and those you have already seen.
        </p>
        <p class="text-xl text-gray-900">
            <img src="{{ asset('images/list_icon.png') }}" alt="List Icon" class="inline-block w-8 h-8 mr-2">
            You can add new movies, specify their release year, mark movies as watched, and remove them from the list. 
            Use this page to ensure you never forget about the movies you want to watch and share your experiences with friends!
        </p>
    </div>

    <h2 class="text-center text-3xl font-bold text-black mb-6">Add a New Movie</h2>

    <form id="addMovieForm" action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data" class="mb-8 border-2 border-black p-8 rounded-lg w-1/2 mx-auto no-spin-buttons focus-outline">
        @csrf
        <div class="flex flex-col items-center mb-4 space-y-5">
            <label for="title" class="pt-3 self-start pl-12 font-mono font-medium text-gray-700 text-sm">Movie Title</label>
            <input type="text" name="title" id="title" placeholder="Movie Title" class="border p-2 w-5/6 rounded-lg" required>
            
            <label for="year" class="self-start pl-12 font-mono font-medium text-gray-700 text-sm">Release Year</label>
            <input type="number" name="year" id="year" placeholder="Release Year" class="border p-2 w-5/6 rounded-lg">
            
            <label for="image" class="self-start pl-12 font-mono font-medium text-gray-700 text-sm">Movie Image</label>
            <input type="file" name="image" id="image" class="border p-2 w-5/6 rounded-lg">
            
            <div class="flex space-x-4 pt-3">
                <button type="submit" class="border-2 border-black uppercase bg-light-black text-gray-100 text-sm font-extrabold py-2 px-4 rounded-3xl hover:bg-gray-200 hover:text-black">ADD</button>
            </div>
        </div>
    </form>

    <div class="header-row flex justify-between mb-4 pt-12 pb-1">
        <span class="header-item w-1/12 text-center font-bold pl-8">Watched</span>
        <span class="header-item w-1/12 text-center font-bold pl-8">Image</span>
        <span class="header-item w-4/12 text-center font-bold">Title</span>
        <span class="header-item w-2/12 text-center font-bold">Year</span>
        <span class="header-item w-2/12 text-center font-bold">Actions</span>
    </div>

    <ul id="movieList" class="space-y-4">
        @foreach($movies as $movie)
            <li class="flex items-center justify-between p-4 border rounded shadow">
                <div class="w-1/12 text-center">
                    <form action="{{ route('movies.markAsWatched', $movie) }}" method="POST" class="inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="focus:outline-none">
                            @if($movie->watched)
                                ✅
                            @else
                                <div class="w-6 h-6 border-2 border-gray-400 rounded-lg"></div>
                            @endif
                        </button>
                    </form>
                </div>
                <div class="w-1/12 text-center" style="display: flex; justify-content: center; align-items: center; height: 100%; padding-left: 10px;">
                    @if($movie->image)
                        <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="w-16 h-8 rounded" style="object-fit: cover; max-width: 100%; max-height: 100%;">
                    @else
                        🎬
                    @endif
                </div>
                <div class="w-4/12 text-center">
                    <span class="font-bold text-lg">{{ $movie->title }}</span>
                </div>
                <div class="w-2/12 text-center pl-5">
                    @if($movie->year)
                        <span class="text-gray-600">{{ $movie->year }}</span>
                    @endif
                </div>
                <div class="w-2/12 flex justify-center space-x-2 pl-8">
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-mono font-semibold text-red-600 hover:text-red-500">
                            Delete
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection