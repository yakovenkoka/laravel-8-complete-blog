<!-- filepath: /Users/karinayakovenko/VSCode/Server side/CA2/laravel-8-complete-blog/resources/views/layouts/footer.blade.php -->
<footer class="bg-light-black py-20 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b border-gray-100 justify-center text-center">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400 footer-links">
                <li class="pb-1">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/blog">
                        Blog
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/movies">
                        My Movie List
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/about">
                        About Us
                    </a>
                </li>
                @guest
                <li class="pb-1">
                    <a href="/login">
                        Login
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/register">
                        Register
                    </a>
                </li>
                @endguest
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Find Us
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400 footer-links">
                <li class="pb-1">
                    <a href="/contact">
                        Contact Us
                    </a>
                </li>
                <li class="pb-1">
                    <a href="tel:+1234567890">
                        Phone: +1 234 567 890
                    </a>
                </li>
                <li class="pb-1">
                    <a href="mailto:contact@filmwords.com">
                        Email: contact@filmwords.com
                    </a>
                </li>
                <li class="pb-1">
                    <a href="https://www.instagram.com/filmwords" target="_blank">
                        Instagram
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Latest posts
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400 footer-links">
                @foreach($latestPosts as $post)
                    <li class="pb-1">
                        <a href="{{ url('/blog/' . $post->slug) }}">
                            {{ \Illuminate\Support\Str::words($post->title, 4, '...') }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <p class="w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6 text-center">
        2025 FilmWords. All Rights Reserved.
    </p>
</footer>