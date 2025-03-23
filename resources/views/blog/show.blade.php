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
<hr class="border-black my-4 w-4/5 m-auto mt-15">
<div id="comments" class="w-4/5 m-auto pt-12">
    <h2 class="text-5xl font-semibold text-gray-900 mb-12">Comments</h2>

    @auth
    <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-6">
        @csrf
        <textarea name="content" rows="4" class="bg-transparent block border-b-3 border-r-1 border-l-1 border-t-1 border-black w-full h-40 text-xl outline-none pt-7 pl-8 mb-4 rounded-lg placeholder-gray-600 italic resize-none" placeholder="Add a comment..."></textarea>
        <button type="submit" class="mt-6 mb-2 ml-2 border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-2 px-8 rounded-3xl hover:bg-gray-200 hover:text-black focus:outline-none">Submit</button>
    </form>
    @endauth

    @guest
    <p class="text-gray-700 text-xl">Please <a href="{{ route('login') }}" class="text-orange-400 hover:underline font-medium italic">login</a> to add a comment.</p>
    @endguest

    <div id="commentList">
        @foreach ($post->comments as $index => $comment)
            <div class="mt-5 border-t border-gray-500 pt-4 comment-item {{ $index >= 5 ? 'hidden' : '' }}">
                <p class="text-gray-800 mt-1"><strong>{{ $comment->user->name }}</strong> said:</p>
                <p class="text-gray-600 pt-1">{{ $comment->content }}</p>
                <p class="text-gray-400 text-sm pt-1">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>

    @if ($post->comments->count() > 9)
        <div class="text-center mt-6">
            <button id="showMoreBtn" class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-2 px-8 rounded-3xl hover:bg-gray-200 hover:text-black focus:outline-none">Show More</button>
            <button id="showLessBtn" class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-2 px-8 rounded-3xl hover:bg-gray-200 hover:text-black focus:outline-none hidden">Show Less</button>
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const showMoreBtn = document.getElementById('showMoreBtn');
        const showLessBtn = document.getElementById('showLessBtn');
        const commentItems = document.querySelectorAll('.comment-item');

        if (showMoreBtn) {
            showMoreBtn.addEventListener('click', function () {
                commentItems.forEach(item => item.classList.remove('hidden'));
                showMoreBtn.classList.add('hidden');
                showLessBtn.classList.remove('hidden');
            });
        }

        if (showLessBtn) {
            showLessBtn.addEventListener('click', function () {
                commentItems.forEach((item, index) => {
                    if (index >= 9) {
                        item.classList.add('hidden');
                    }
                });
                showLessBtn.classList.add('hidden');
                showMoreBtn.classList.remove('hidden');
            });
        }
    });
</script>

@endsection