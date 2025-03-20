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
                            <img src="{{ asset('images/films1.jpeg') }}" width="600" alt="Movie 1">
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
                            <img src="{{ asset('images/films2.jpg') }}" width="600" alt="Movie 2">
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="border border-white">
                <td class="p-10">
                    <div class="sm:grid grid-cols-2 gap-15 mb-7">
                        <div class="m-auto sm:m-auto text-left w-4/5 block">
                            <h2 class="pb-16 text-4xl font-black text-black">
                                <strong>Movies That Divided Audiences and Critics</strong>
                            </h2>
                            <p class="pb-14 text-gray-900 text-xl">
                                These films sparked debates, ignited controversies, and split audiences into passionate defenders and harsh critics. Some were hailed as masterpieces by critics but dismissed by viewers, while others won the hearts of audiences despite professional backlash. What makes them so polarizing?
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/films3.jpeg') }}" width="600" alt="Movie 2">
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="border border-white">
                <td class="p-10">
                    <div class="sm:grid grid-cols-2 gap-15 mb-7">
                        <div class="m-auto sm:m-auto text-left w-4/5 block">
                            <h2 class="pb-16 text-4xl font-black text-black">
                                <strong>Real Events That Inspired Great Films</strong>
                            </h2>
                            <p class="pb-14 text-gray-900 text-xl">
                                Sometimes, reality writes the most compelling scripts. Tragic fates, incredible triumphs, and shocking true events have inspired some of the most powerful films ever made. But how much of what we see on screen is true, and where does fiction take over?
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/films4.jpeg') }}" width="600" alt="Movie 2">
                        </div>
                    </div>
                </td>
            </tr>
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
                            <img src="{{ asset('images/films5.jpg') }}" width="600" alt="Movie 2">
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="text-center mt-10">
            <a 
                href="/blog"
                class="uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
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