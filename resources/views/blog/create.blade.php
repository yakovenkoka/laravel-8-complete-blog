@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl font-medium text-center">
            Create Post
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

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 border-black w-full h-20 text-6xl font-medium italic outline-none placeholder-gray-600 placeholder-sm">

        <textarea 
            name="description"
            placeholder="Description..."
            class="bg-transparent block border border-gray-700 w-full h-80 text-xl outline-none p-4 mb-4 mt-8 rounded-lg placeholder-gray-600 italic"></textarea>

        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class=" text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="mt-10 border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-6 rounded-3xl hover:bg-gray-200 hover:text-black focus:outline-none">
            Submit Post
        </button>
    </form>
</div>

@endsection