@extends('layouts.app')

@section('content')
<div class="w-5/6 m-auto text-center">
    <div class="py-15 border-b border-gray-700">
        <h1 class="text-5xl font-bold text-black">
            Posts by {{ $user->name }}
        </h1>
    </div>
</div>

@if ($posts->isEmpty())
    <div class="w-5/6 m-auto mt-10">
        <p class="text-gray-700 text-xl">No posts found for this user.</p>
    </div>
@else
    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-12 w-5/6 mx-auto py-15 border-b border-gray-700">
            <div class="pl-5">
                <img src="{{ asset('images/' . $post->image_path) }}" style="width: 520px; height: 305px; object-fit: cover;" alt="{{ $post->title }}">
            </div>
            <div>
                <h2 class="text-black font-bold text-3xlxl pb-4">
                    {{ $post->title }}
                </h2>
                <span class="text-gray-700">
                    Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>
                <p class="text-xl font-normal text-gray-900 pt-8 pb-10 leading-8 font-light">
                    {{ Str::limit($post->description, 200) }}
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
                    <span class="float-right pr-2">
                        <a 
                            href="/blog/{{ $post->slug }}/edit"
                            class="font-mono font-semibold text-gray-900 italic hover:text-gray-700 pb-1 pr-1 pl-1 border-b-2 border-gray-800">
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
                                class="font-mono font-semibold text-red-600 hover:text-red-500"
                                type="submit">
                                Delete
                            </button>
                        </form>
                    </span>
                @endif
            </div>
        </div>
    @endforeach
@endif
@endsection