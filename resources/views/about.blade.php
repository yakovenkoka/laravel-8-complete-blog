@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center pt-15 pb-10">
    <h1 class="text-5xl font-bold text-black pb-5">
        About Us
    </h1>
</div>

<div class="w-4/5 m-auto py-10">
    <div class="text-gray-800 text-lg leading-8 font-medium">
        <p class="mb-8">
            Welcome to FilmWords, a blog dedicated to sharing our love for movies. Here, you'll find a variety of posts written by passionate movie enthusiasts who enjoy discussing films, sharing insights, and exploring the world of cinema.
        </p>
        <p class="mb-8">
            Founded in 2025, FilmWords has grown from a simple idea into a platform where movie lovers can come together to share their thoughts and opinions. This site provides a space for many users to read and write posts.
        </p>
        <p class="mb-8">
            I hope you enjoy reading the posts as much as the authors enjoy writing them. If you have any questions or comments, please don't hesitate to contact me.
        </p>
    </div>
</div>

<div class="w-4/5 m-auto py-10">
    <div class="sm:grid grid-cols-2 gap-10">
        <div>
            <img src="{{ asset('images/about.jpg') }}" style="width: 600px; height: 350px; object-fit: cover;" alt="About Us">
        </div>
        <div class="text-gray-800 text-lg leading-8 font-medium">
            <h2 class="text-3xl font-extrabold mb-4 text-orange-400" style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.786);">About Us</h2>
            <p class="mb-8">
                We are movie enthusiasts dedicated to sharing our thoughts and opinions on films. From reviews to behind-the-scenes insights, we cover a wide range of topics related to cinema.
            </p>
            <p class="mb-8">
                We believe that movies have the power to inspire, entertain, and educate, and we are committed to sharing that power with our readers.
            </p>
        </div>
    </div>
</div>

<div class="w-4/5 m-auto py-10">
    <div class="sm:grid grid-cols-2 gap-10">
        <div class="text-gray-800 text-lg leading-8 font-medium">
            <h2 class="text-3xl font-extrabold mb-4 text-orange-400" style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.786);">My Mission</h2>
            <p class="mb-8">
                My mission is to create a community of movie lovers who can come together to share their passion for cinema. I aim to provide a platform where readers can find insightful posts, in-depth analysis, and engaging content that enhances their movie-watching experience.
            </p>
            <p class="mb-8">
                I believe that movies are more than just entertainment; they are a form of art that can evoke emotions, spark conversations, and bring people together. My goal is to celebrate that art and share it with the world.
            </p>
        </div>
        <div>
            <img src="{{ asset('images/mission.jpg') }}" style="width: 600px; height: 350px; object-fit: cover;" alt="My Mission">
        </div>
    </div>
</div>
<hr class="border-white my-4 w-4/5 m-auto mt-10 mb-12">
<div class="w-4/5 m-auto py-10">
    <div class="sm:grid grid-cols-2 gap-10">
        <div>
            <img src="{{ asset('images/movie_list.jpg') }}" style="width: 550px; height: 350px; object-fit: cover;" alt="My Movie List">
        </div>
        <div class="text-gray-800 text-lg leading-8 font-medium">
            <h2 class="text-3xl font-extrabold mb-4 text-orange-400" style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.786);">My Movie List</h2>
            <p class="mb-8">
                Our blog features a special section called "My Movie List" where you can keep track of movies you have discovered or read about in our blog. This section helps you manage all the movies you want to watch and those you have already seen.
            </p>
            <p class="mb-8">
                You can add new movies, specify their release year, mark movies as watched, and remove them from the list. Use this section to ensure you never forget about the movies you want to watch and share your experiences with friends!
            </p>
            <a 
                href="{{ url('/movies') }}"
                class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-1 px-8  rounded-3xl hover:bg-gray-200 hover:text-black">
                Go to My Movie List
            </a>
        </div>
    </div>
</div>
<hr class="border-white my-4 w-4/5 m-auto mt-10">
<div class="w-4/5 m-auto py-10">
    <div class="text-center">
        <h2 class="text-3xl font-extrabold mb-8 text-orange-400" style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.786);">Contact Me</h2>
        <p class="text-gray-800 text-lg leading-8 mb-12 font-medium">
            If you have any questions, comments, or suggestions, I would love to hear from you. Feel free to reach out to me through my contact page or connect with me on social media.
        </p>
        <a 
            href="/contact"
            class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:bg-gray-200 hover:text-black">
            Contact Me
        </a>
    </div>
</div>
@endsection