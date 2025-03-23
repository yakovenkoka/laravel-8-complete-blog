@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl font-medium text-center">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-5/6 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-b-2 w-full h-20 text-5xl outline-none p-4 mb-8 border-black ">

        <textarea 
            name="description"
            placeholder="Description..."
            class="bg-transparent block border border-gray-700 w-full h-80 text-xl outline-none p-4 mb-4 rounded-lg">{{ $post->description }}</textarea> 

        <button    
            type="submit"
            class="mt-10 border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-6 rounded-3xl hover:bg-gray-200 hover:text-black">
            Submit Post
        </button>
    </form>
</div>

@endsection