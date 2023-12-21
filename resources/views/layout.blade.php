<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    @vite([
    'resources/css/app.css',
    'resources/css/default.css'
    ])

    @vite('resources/css/default.css')
    @vite('resources/css/swiper.css')
    @vite('resources/css/swiper-bundle.min.css')
    @vite('resources/css/prism.min.css')

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="flex flex-col min-h-screen">
<section class="bg-[#0177ff]">
    <header class="container mx-auto lg:py-8 py-2 px-4 lg:px-0">
        <div class="flex items-center justify-between">
            <div class="bg-white py-1.5 px-3 rounded-2xl border border-gray-500">
                <div class="flex items-center gap-2">
                    <span class="rounded-full bg-[#da522e] py-0.5 px-2.5 text-white font-bold">P</span>
                    <div>
                        <h3 class="text-xs font-extralight text-[#da522e]">
                            PRODUCT HUNT
                        </h3>
                        <p class="text-xs text-[#da522e]">#1 Product of the day</p>
                    </div>
                </div>
            </div>
            <ul class="lg:flex items-center gap-5 hidden">
                <li>
                    <a href="" class="text-white font-bold hover:underline underline-offset-4 decoration-white transition-all">About us</a>
                </li>
                <li>
                    <a href="" class="text-white font-bold hover:underline underline-offset-4 decoration-white transition-all">Contact us</a>
                </li>
                <li>
                    <a href="/"><img class="w-24" src="{{ asset('img/logo.png') }}" alt="" /></a>
                </li>
                <li>
                    <a href=""
                       class="text-white font-bold hover:underline underline-offset-4 decoration-white transition-all">Tutorials</a>
                </li>
                <li>
                    <a href=""
                       class="text-white font-bold hover:underline underline-offset-4 decoration-white transition-all">Work
                        with us</a>
                </li>
            </ul>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}">
                    <button class="bg-white py-2 px-6 rounded-2xl border-t-2 border-l-2 border-b-4 border-r-4 border-black hidden lg:block">
                        Login
                    </button>
                </a>

                <button class="bg-white py-2 px-6 rounded-2xl border-t-2 border-l-2 border-b-4 border-r-4 border-black hidden lg:block">
                    Add Your API
                </button>
            </div>
            <button id="menu-toggle" class="py-1 px-2 border border-white rounded-lg lg:hidden block">
                <i class="ri-menu-line text-white"></i>
            </button>
        </div>
        <div id="mobile-menu" class="menu">
            <div class="bg-[#0177ff] text-white text-lg h-full w-72 p-8">
                <span id="close-btn" class="close-btn">&times;</span>
                <a href="index.html"><img class="w-2/3 my-4" src="./view/img/logo.png" alt="" /></a>
                <ul class="text-white text-base space-y-2">
                    <li class="pt-1"><a href="#" class="">Create Team</a></li>
                    <li class="pt-1"><a href="#">Add Your API</a></li>
                    <li class="pt-1"><a href="#">Docs</a></li>
                    <li class="pt-1 border-b border-gray-400"></li>
                    <li class="pt-1"><a href="#" class="">Log In</a></li>
                    <li class="pt-1"><button class="bg-blue-700 rounded w-full text-white py-1">Sign Up</button>
                    </li>
                    <li class="pt-1 border-b border-gray-400"></li>
                    <li class="pt-1">
                        <div class="flex items-center justify-between py-1 px-2 rounded bg-blue-600">
                            <input type="search" placeholder="Search for API's"
                                   class="bg-inherit focus:outline-none text-white text-xs" />
                            <i class="ri-search-line text-white"></i>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    @if(Request::path() === '/')
        @include('components.search-area')
    @endif

</section>

@yield('content')

<footer class="py-2 px-3 bg-[#0177ff] text-white font-semibold text-sm mt-auto">
    <div class="container mx-auto">
        <div class="flex items-center justify-between pb-3 border-b border-white">
            <p><a href="">Home</a> > <a href="">Recipe Food Nutrition</a></p>
            <div>
                <span>Language:</span>
                <select name="" id="" class="bg-inherit">
                    <option value="">English</option>
                    <option value="">Turkish</option>
                </select>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-between pt-2">
            <div class="flex flex-col lg:flex-row items-center lg:gap-8 gap-2">
                <p>© 2023 APIWIZZ. All Right Reserved.</p>
                <ul class="flex flex-wrap items-center gap-3">
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Learn</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Press</a></li>
                </ul>
            </div>
            <div class="flex items-center gap-3 lg:py-0 py-2">
                <a href="" class="py-1 px-2 rounded-full bg-white"><i
                        class="ri-facebook-fill text-black"></i></a>
                <a href="" class="py-1 px-2 rounded-full bg-white"><i
                        class="ri-twitter-fill text-black"></i></a>
                <a href="" class="py-1 px-2 rounded-full bg-white"><i
                        class="ri-linkedin-fill text-black"></i></a>
            </div>
        </div>
    </div>
</footer>
@vite('resources/js/jquery.min.js')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
@vite('resources/js/main.js')
</body>

</html>
