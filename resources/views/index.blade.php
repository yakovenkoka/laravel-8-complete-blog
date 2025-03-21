@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto" style="background-image: url('{{ asset('images/cinema-background.jpg') }}');">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Lights, Camera, Action!
                </h1>
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Your Movie Adventure Starts Here
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-black py-2 px-8 font-bold text-xl uppercase hover:bg-orange-400 hover:text-black rounded-lg">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="w-4/5 mx-auto py-20 border-b border-gray-200">
        <table class="w-full border border-white">
            <tr class="border border-white">
                <td class="p-10">
                    <div class="sm:grid grid-cols-2 gap-15 mb-7">
                        <div class="m-auto sm:m-auto text-left w-4/5 block">
                            <h2 class="pb-16 text-4xl font-black text-black">
                                <strong>Movies You Must Watch at Least Once in Your Life</strong>
                            </h2>
                            <p class="pb-14 text-gray-900 text-xl">
                                Some films are not just watched – they are experienced. They challenge perceptions, leave a lasting impact, and pull you into stories that refuse to let go. Here is a list of movies that will redefine how you think about film.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/films3.jpg') }}" style="width: 500px; height: 300px; object-fit: cover; margin-top: 5px" alt="Movie 1">
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="border border-white">
                <td class="p-10">
                    <div class="sm:grid grid-cols-2 gap-15 mb-7">
                        <div class="m-auto sm:m-auto text-left w-4/5 block">
                            <h2 class="pb-16 text-4xl font-black text-black">
                                <strong>Oscar-Winning Films That Quickly Faded into Obscurity</strong>
                            </h2>
                            <p class="pb-14 text-gray-900 text-xl">
                                Every year, Hollywood crowns its best films, but how many truly stand the test of time? Some Oscar winners fade into obscurity, lost in the shadows of history. Let us explore why some films remain unforgettable while others vanish without a trace.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/films2.jpg') }}" style="width: 500px; height: 300px; object-fit: cover; margin-top: 8px" alt="Movie 1">
                        </div>
                    </div>
                </td>
            <tr class="border border-white">
                <td class="p-10">
                    <div class="sm:grid grid-cols-2 gap-15 mb-7">
                        <div class="m-auto sm:m-auto text-left w-4/5 block">
                            <h2 class="pb-16 text-4xl font-black text-black">
                                <strong>Movies That Will Make You Watch Them Twice</strong>
                            </h2>
                            <p class="pb-14 text-gray-900 text-xl">
                                You reach the final scene, the credits roll, and you are left thinking, What just happened? Some films hide their meaning beneath layers of symbolism, clues, and twists that only become clear upon a second viewing. Here is a selection of mind-bending movies that demand to be watched again.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/films6.jpg') }}" style="width: 500px; height: 300px; object-fit: cover; margin-top: 8px" alt="Movie 1">
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="w-full border-t border-white my-10"></div>
            <div class="text-center mt-10">
                <p class="text-orange-500 pb-8 text-2xl font-bold">🍿  Flops That Became Cult Classics</p>
                <p class="text-gray-900 text-xl mb-10">Some movies started as box office failures but later gained a devoted fanbase.</p>
                <div class="w-full border-t border-white my-10"></div>
                <p class="text-orange-500 pb-8 text-2xl font-bold">🎬  Movies Filmed in a Single Take</p>
                <p class="text-gray-900 text-xl mb-10">Shooting a film in one continuous shot is a rare and risky approach. Here are the most impressive examples.</p>
                <div class="w-full border-t border-white my-10"></div>
                <p class="text-orange-500 pb-8 text-2xl font-bold">🎥  Where Were Iconic Movie Scenes Filmed?</p>
                <p class="text-gray-900 text-xl mb-10">These locations became legendary in cinema history. Find out where they exist in real life.</p>
                <div class="w-full border-t border-white my-10"></div>
                <a 
                    href="/blog"
                    class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:bg-gray-200 hover:text-black">
                    Find Out More
                </a>
            </div>
        </div>
    </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-3xl pb-7 font-semibold text-orange-500"> 
            Explore the World of Cinema
        </h2>

        <span class="font-extrabold block text-4xl py-2">
            Film Reviews
        </span>
        <span class="font-extrabold block text-4xl py-2">
            Movie Analysis
        </span>
        <span class="font-extrabold block text-4xl py-2">
            Behind the Scenes
        </span>
        <span class="font-extrabold block text-4xl py-2">
            Upcoming Releases
        </span>
    </div>

    <div class="text-center pt-15 pb-5">
        <span class="uppercase text-l text-gray-500">
            Blog
        </span>
    
        <h2 class="text-4xl font-extrabold pt-10 text-black">
            Recent Posts
        </h2>
    
        <div class="w-4/6 mx-auto pt-3">
            <div class="w-full border-t border-white my-15"></div>
            @foreach ($latestPosts as $index => $post)
                <div class="sm:grid grid-cols-2 gap-10 mb-7">
                    @if ($index % 2 == 0)
                        <div class="m-auto sm:m-auto text-left w-5/6 block">
                            <h3 class="text-3xl pb-8 font-bold">{{ $post->title }}</h3>
                            <p class="text-gray-800 pb-8 text-lg">{{ Str::limit($post->description, 500, '...') }}</p>
                            <a
                            href="/blog/{{ $post->slug }}" 
                            class="border-2 border-black uppercase bg-light-black text-gray-100 text-xs font-extrabold py-2 px-4 rounded-3xl hover:bg-gray-200 hover:text-black transition duration-300 ease-in-out">
                            Read More
                            </a>
                        </div>
                        <div class="flex content-center">
                            <img src="{{ asset('images/' . $post->image_path) }}" style="height: auto; object-fit: contain;" alt="{{ $post->title }}">
                        </div>
                    @else
                        <div>
                            <img src="{{ asset('images/' . $post->image_path) }}" width="300" alt="{{ $post->title }}">
                        </div>
                        <div class="m-auto sm:m-auto text-left w-4/5 block">
                            <h3 class="text-3xl pb-8 font-bold">{{ $post->title }}</h3>
                            <p class="text-gray-800 pb-8 text-lg">{{ Str::limit($post->description, 500, '...') }}</p>
                            <a
                            href="/blog/{{ $post->slug }}" 
                            class="border-2 border-black uppercase bg-light-black text-gray-100 text-xs font-extrabold py-2 px-4 rounded-3xl hover:bg-gray-200 hover:text-black transition duration-300 ease-in-out">
                            Read More
                            </a>
                        </div>
                    @endif
                </div>
                <div class="w-full border-t border-white my-15"></div>
            @endforeach
        </div>
    </div>
    </div>

    <div class="text-center">
        <a 
            href="/blog"
            class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:bg-gray-200 hover:text-black">
            Find Out More
        </a>
    </div>
@endsection