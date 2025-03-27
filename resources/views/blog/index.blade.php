@extends('layouts.app')

@section('content')
<div class="w-5/6 m-auto text-center">
    <div class="py-15 border-b border-gray-700">
        <h1 class="text-5xl font-bold text-black">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-5/6 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-6 rounded-3xl hover:bg-gray-200 hover:text-black">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $index => $post)
    <div class="sm:grid grid-cols-2 gap-12 w-5/6 mx-auto py-15 border-b border-gray-700 ">
        <div class="pl-5">
            <img src="{{ asset('images/' . $post->image_path) }}" style="width: 520px; height: 305px; object-fit: cover; margin-top:0.6em;" alt="">
        </div>
        <div>
            <h2 class="text-black font-bold text-3xlxl pb-4 w-6/10">
                {{ $post->title }}
            </h2>

            <span class="text-gray-700">
                By <span class="font-bold italic text-gray-900">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl font-normal text-gray-900 pt-8 pb-10 leading-8 font-light">
                {{ Str::limit($post->description, 600) }}
            </p>

            <div class="flex items-center">
                <a href="/blog/{{ $post->slug }}" class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-2 px-4 rounded-3xl hover:bg-gray-200 hover:text-black">
                    Read More
                </a>
                <a href="/blog/{{ $post->slug }}#comments" class="ml-6 text-black hover:text-gray-700">
                    <i class="fas fa-comments fa-lg"></i>
                </a>
            </div>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right pr-2 ">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="font-mono font-semibold text-gray-900 italic hover:text-gray-700 pb-1 pr-1 pl-1 border-b-2  border-gray-800">
                        Edit
                    </a>
                </span>

                <span class="float-right pr-5">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class=" font-mono font-semibold text-red-600 hover:text-red-500"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection