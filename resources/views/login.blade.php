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
<body class="bg-gray-200">
    <header class="bg-[#0177ff] lg:py-4 py-2 px-4 lg:px-0">
        <div class="flex items-center justify-between container mx-auto">
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
    <div class="lg:min-h-screen py-10 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-indigo-500 via-sky-500 to-emerald-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="text-white relative px-4 py-10 bg-[#0177ff] shadow-lg sm:rounded-3xl sm:p-20">
    
                <div class="text-center pb-6">
                    <h1 class="text-3xl">Login</h1>
    
                    <p class="text-gray-300">
                        Welcome Back!
                    </p>
                </div>
                <a href="#" class="flex items-center justify-center mb-5 bg-white text-white rounded-lg shadow-md hover:bg-gray-100">
                    <div class="px-4 py-3">
                        <svg class="h-6 w-6" viewBox="0 0 40 40">
                            <path
                                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                fill="#FFC107" />
                            <path
                                d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                fill="#FF3D00" />
                            <path
                                d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                fill="#4CAF50" />
                            <path
                                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                fill="#1976D2" />
                        </svg>
                    </div>
                    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Sign in with Google</h1>
                </a>
                <div class="mt-4 mb-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-white uppercase">or login with email</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <form>
    
                    <input
                            class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="mail" placeholder="E-Mail" name="name">
    
                    <input
                            class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="password" placeholder="Password" name="email">
    
                    <div class="flex justify-center">
                        <input
                            class="shadow bg-white text-gray-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" value="Login">
                       
                    </div>
    
                </form>
            </div>
        </div>
    </div>
<footer class="py-2 px-3 bg-[#0177ff] text-white font-semibold text-sm">
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
<script src="./view/js/jquery.min.js"></script>
<script src="./view/js/swiper-bundle.min.js"></script>
<script src="./view/js/main.js"></script>
</body>
</html>
