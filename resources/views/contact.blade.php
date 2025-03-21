@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center pt-15 pb-10">
    <h1 class="text-5xl font-bold text-black">
        Contact Us
    </h1>
</div>

<div class="w-4/5 m-auto py-10">
    <div class="text-gray-800 text-lg leading-8 font-medium">
        <p class="mb-8">
            We would love to hear from you! Whether you have a question, feedback, or just want to say hello, feel free to reach out to us using the form below. Your thoughts and opinions are important to us, and we are always looking to improve our blog and provide the best content for our readers.
        </p>
        <p class="mb-8">
            Please fill out the form with your name, email, and message, and we will get back to you as soon as possible. We appreciate your interest in FilmWords and look forward to connecting with you.
        </p>
    </div>
</div>

<div class="w-2/4 m-auto py-5">
    <div class="bg-gray-100 p-10 rounded-lg shadow-lg">
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-8">
                <label for="name" class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-8">
                <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-8">
                <label for="message" class="block mb-2 text-sm font-bold text-gray-700">Message</label>
                <textarea id="message" name="message" rows="5" class="w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="border-2 border-black uppercase bg-light-black text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:bg-gray-200 hover:text-black">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>


@endsection