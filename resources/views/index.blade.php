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

    <div class="w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="sm:grid grid-cols-2 gap-20 mb-10">
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-4xl font-extrabold text-black">
                    <strong>Movies You Must Watch at Least Once in Your Life</strong>
                </h2>
                <p class="py-8 text-gray-500 text-s">
                    <em>Description:</em> Some films are a must-watch for everyone. These are the movies that left a mark on history.
                </p>
                <p class="py-8 text-gray-500 text-s">
                    <strong>Answer:</strong> We have compiled a list of iconic films that will broaden your cinematic horizons and leave a lasting impression.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/films1.jpg') }}" width="700" alt="Movie 1">
            </div>
        </div>

        <div class="sm:grid grid-cols-2 gap-20 mb-10">
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    <strong>Oscar-Winning Films That Quickly Faded into Obscurity</strong>
                </h2>
                <p class="py-8 text-gray-500 text-s">
                    <em>Description:</em> Some movies win the most prestigious award in cinema but are soon forgotten by audiences.
                </p>
                <p class="py-8 text-gray-500 text-s">
                    <strong>Answer:</strong> We analyze which Oscar-winning films failed to stand the test of time.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/movie2.jpg') }}" width="700" alt="Movie 2">
            </div>
        </div>

        <div class="sm:grid grid-cols-2 gap-20 mb-10">
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    <strong>Movies That Divided Audiences and Critics</strong>
                </h2>
                <p class="py-8 text-gray-500 text-s">
                    <em>Description:</em> Sometimes, the public and critics have vastly different opinions on a film.
                </p>
                <p class="py-8 text-gray-500 text-s">
                    <strong>Answer:</strong> We recall the most controversial movies that sparked heated debates.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/movie3.jpg') }}" width="700" alt="Movie 3">
            </div>
        </div>

        <div class="sm:grid grid-cols-2 gap-20 mb-10">
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    <strong>Real Events That Inspired Great Films</strong>
                </h2>
                <p class="py-8 text-gray-500 text-s">
                    <em>Description:</em> Sometimes, reality creates stories more fascinating than any screenwriter could imagine.
                </p>
                <p class="py-8 text-gray-500 text-s">
                    <strong>Answer:</strong> We examine films based on true stories and how accurately they depict real events.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/movie4.jpg') }}" width="700" alt="Movie 4">
            </div>
        </div>

        <div class="sm:grid grid-cols-2 gap-20 mb-10">
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    <strong>Movies That Will Make You Watch Them Twice</strong>
                </h2>
                <p class="py-8 text-gray-500 text-s">
                    <em>Description:</em> Some films are filled with hidden details that only become apparent on a second viewing.
                </p>
                <p class="py-8 text-gray-500 text-s">
                    <strong>Answer:</strong> We revisit films where every scene can change the way you perceive the story.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/movie5.jpg') }}" width="700" alt="Movie 5">
            </div>
        </div>

        <div class="text-center mt-10">
            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/new-image.jpg') }}" alt="">
        </div>
    </div>
@endsection