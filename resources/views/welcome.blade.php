<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    @vite('resources/css/app.css')
    @vite('resources/css/default.css')

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>
<body class="flex flex-col min-h-screen">
<section class="bg-[#0177ff]">
    <header class="container mx-auto lg:py-8 py-2 px-4 lg:px-0">
        <div class="flex items-center justify-between">
            <div class="bg-white py-1.5 px-3 rounded-2xl border border-gray-500">
                <div class="flex items-center gap-2">
              <span
                  class="rounded-full bg-[#da522e] py-0.5 px-2.5 text-white font-bold"
              >P</span
              >
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
                    <a
                        href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all"
                    >About us</a
                    >
                </li>
                <li>
                    <a
                        href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all"
                    >Contact us</a
                    >
                </li>
                <li>
                    <a href=""
                    ><img class="w-24" src="{{asset ('img/logo.png')}}" alt=""
                        /></a>
                </li>
                <li>
                    <a
                        href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all"
                    >Tutorials</a
                    >
                </li>
                <li>
                    <a
                        href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all"
                    >Work with us</a
                    >
                </li>
            </ul>
            <button
                class="bg-white py-2 px-6 rounded-2xl border-t-2 border-l-2 border-b-4 border-r-4 border-black hidden lg:block"
            >
                Add Your API
            </button>
            <button id="menu-toggle"
                    class="py-1 px-2 border border-white rounded-lg lg:hidden block"
            >
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
                    <li class="pt-1"><button class="bg-blue-700 rounded w-full text-white py-1">Sign Up</button></li>
                    <li class="pt-1 border-b border-gray-400"></li>
                    <li class="pt-1">
                        <div
                            class="flex items-center justify-between py-1 px-2 rounded bg-blue-600"
                        >
                            <input
                                type="search"
                                placeholder="Search for API's"
                                class="bg-inherit focus:outline-none text-white text-xs"
                            />
                            <i class="ri-search-line text-white"></i>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <div
        class="container mx-auto flex flex-col lg:flex-row items-center justify-between lg:py-14 py-2 px-4 lg:px-0 relative"
    >
        <div class="flex items-center justify-between w-screen px-4 lg:hidden">
            <div
                class="rounded-full w-[80px] h-[80px] bg-gradient-to-r from-[#020ea0] via-[#0b50cd] to-[#1063e5] relative lg:hidden block"
            >
                <div class="absolute top-1 left-[17px]">
                    <i class="ri-database-2-fill ri-3x text-white"></i>
                </div>
            </div>
            <div
                class="rounded-full w-[80px] h-[80px] bg-gradient-to-r from-[#020ea0] via-[#0b50cd] to-[#1063e5] relative lg:hidden block"
            >
                <div class="absolute top-1 left-[17px]">
                    <i class="ri-database-2-fill ri-3x text-white"></i>
                </div>
            </div>
        </div>
        <div
            class="w-11/12 h-1 border-b-4 border-dashed border-black absolute top-20 left-14 hidden lg:block"
        ></div>
        <div
            class="rounded-full w-[250px] h-[250px] bg-gradient-to-r from-[#020ea0] via-[#0b50cd] to-[#1063e5] relative hidden lg:block"
        >
            <div class="absolute top-8 left-16 z-[99999]">
                <i class="ri-database-2-fill ri-8x text-white"></i>
            </div>
        </div>
        <div class="text-center relative lg:top-28 top-7">
            <h1 class="text-white text-4xl font-bold">
                A Curated List For The Public APIs
            </h1>
            <p class="mt-4 lg:w-[500px] text-white font-light text-sm">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea culpa
                voluptatum odio omnis enim vero dignissimos hic, praesentium odit
                nulla architecto excepturi impedit commodi
            </p>
            <div
                class="flex items-center justify-between bg-white rounded-3xl py-2 px-3 border-t-2 border-l-2 border-r-4 border-b-4 border-black mt-8 shadow-lg"
            >
                <div class="flex items-center gap-2">
                    <i class="ri-search-line ri-xl"></i>
                    <input
                        type="text"
                        class="w-full focus:outline-none text-black bg-inherit py-1"
                        placeholder="Search 3200+ free APIs"
                    />
                </div>
                <i class="ri-mic-fill ri-xl"></i>
            </div>
        </div>
        <div
            class="rounded-full w-[250px] h-[250px] bg-gradient-to-r from-[#1063e5] via-[#0b50cd] to-[#020ea0] relative hidden lg:block"
        >
            <div class="absolute top-8 left-16 z-[99999]">
                <i class="ri-database-2-fill ri-8x text-white"></i>
            </div>
        </div>
    </div>
</section>
<section class="container mx-auto py-16">
    <div class="flex flex-wrap items-center justify-center gap-3">
        <button
            class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg"
        >
            <i class="ri-cloud-fill ri-lg"></i>
            <h2 class="font-semibold whitespace-nowrap">
                Weather <span>(34)</span>
            </h2>
        </button>
        <button
            class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg"
        >
            <i class="ri-book-2-fill ri-lg"></i>
            <h2 class="font-semibold whitespace-nowrap">
                Books <span>(22)</span>
            </h2>
        </button>
        <button
            class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg"
        >
            <i class="ri-login-circle-line ri-lg"></i>
            <h2 class="font-semibold whitespace-nowrap">
                Login And Authentication <span>(12)</span>
            </h2>
        </button>
        <button
            class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg"
        >
            <i class="ri-film-fill ri-lg"></i>
            <h2 class="font-semibold whitespace-nowrap">
                Movie <span>(12)</span>
            </h2>
        </button>
    </div>
    <div class="flex items-center justify-center gap-3 py-2">
        <button
            class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg"
        >
            <i class="ri-mail-fill ri-lg"></i>
            <h2 class="font-semibold whitespace-nowrap">
                Email <span>(12)</span>
            </h2>
        </button>
        <button
            class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg"
        >
            <i class="ri-calendar-2-fill ri-lg"></i>
            <h2 class="font-semibold whitespace-nowrap">
                Calendar <span>(22)</span>
            </h2>
        </button>
    </div>
    <div class="flex flex-col lg:flex-row items-center justify-center gap-5 pt-6 px-3 lg:px-0">
        <div
            class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7"
        >
            <div class="flex items-start gap-4">
                <img src="{{asset ('/img/dribble.png')}}" alt="" />
                <div>
                    <h3 class="font-semibold text-lg">Dribble</h3>
                    <p class="text-gray-500 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="flex items-center gap-4 py-2">
                <span
                    class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold"
                >
                  HTTPS
                </span>
                        <span
                            class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold"
                        >
                  Auth: OAuth
                </span>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center gap-8 pt-4">
                <button class="text-blue-600 font-semibold whitespace-nowrap text-xs lg:text-base">
                    API Documentation
                </button>
                <button
                    class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base"
                >
                    Register Your App
                </button>
            </div>
        </div>
        <div
            class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7"
        >
            <div class="flex items-start gap-4">
                <img src="{{asset ('/img/soundcloud.png')}}" alt="" />
                <div>
                    <h3 class="font-semibold text-lg">SoundCloud</h3>
                    <p class="text-gray-500 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="flex items-center gap-4 py-2">
                <span
                    class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold"
                >
                  HTTPS
                </span>
                        <span
                            class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold"
                        >
                  Auth: OAuth
                </span>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center gap-8 pt-4">
                <button class="text-blue-600 font-semibold whitespace-nowrap text-xs lg:text-base">
                    API Documentation
                </button>
                <button
                    class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base"
                >
                    Register Your App
                </button>
            </div>
        </div>
        <div
            class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7"
        >
            <div class="flex items-start gap-4">
                <img src="{{asset ('/img/github.png')}}" alt="" />
                <div>
                    <h3 class="font-semibold text-lg">GitHub</h3>
                    <p class="text-gray-500 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="flex items-center gap-4 py-2">
                <span
                    class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold"
                >
                  HTTPS
                </span>
                        <span
                            class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold"
                        >
                  Auth: OAuth
                </span>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center gap-8 pt-4">
                <button class="text-blue-600 font-semibold whitespace-nowrap text-xs lg:text-base">
                    API Documentation
                </button>
                <button
                    class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base"
                >
                    Register Your App
                </button>
            </div>
        </div>
    </div>
</section>
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
                <a href="" class="py-1 px-2 rounded-full bg-white"><i class="ri-facebook-fill text-black"></i></a>
                <a href="" class="py-1 px-2 rounded-full bg-white"><i class="ri-twitter-fill text-black"></i></a>
                <a href="" class="py-1 px-2 rounded-full bg-white"><i class="ri-linkedin-fill text-black"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset ('resources/js/jquery.min.js')}}"></script>
<script src="{{asset ('resources/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset ('resources/js/main.js')}}"></script>
    @vite('resources/js/jquery.min.js')
    @vite('resources/js/swiper-bundle.min.js')
    @vite('resources/js/main.js')
</body>
</html>
