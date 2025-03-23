@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl font-medium">
            {{ $post->title }}
        </h1>
    </div>
</div>
<hr class="border-black my-4 w-4/5 m-auto">
<div class="w-4/5 m-auto pt-15">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <div class="pt-8">
        <img src="{{ asset('images/' . $post->image_path) }}" class="float-left mr-8 mb-3 mt-2" style="width: auto; height: 300px; object-fit: cover;" alt="">
        <p class="text-xl text-gray-700 leading-8 font-light">
            {{ $post->description }}
        </p>
    </div>
</div>

@endsection