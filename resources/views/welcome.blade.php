@extends('layout')

@section('content')
    <section class="container mx-auto py-16">
        <div class="flex flex-wrap items-center justify-center gap-3">
            <button
                class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg">
                <i class="ri-cloud-fill ri-lg"></i>
                <h2 class="font-semibold whitespace-nowrap">
                    Weather <span>(34)</span>
                </h2>
            </button>
            <button
                class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg">
                <i class="ri-book-2-fill ri-lg"></i>
                <h2 class="font-semibold whitespace-nowrap">
                    Books <span>(22)</span>
                </h2>
            </button>
            <button
                class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg">
                <i class="ri-login-circle-line ri-lg"></i>
                <h2 class="font-semibold whitespace-nowrap">
                    Login And Authentication <span>(12)</span>
                </h2>
            </button>
            <button
                class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg">
                <i class="ri-film-fill ri-lg"></i>
                <h2 class="font-semibold whitespace-nowrap">
                    Movie <span>(12)</span>
                </h2>
            </button>
        </div>
        <div class="flex items-center justify-center gap-3 py-2">
            <button
                class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg">
                <i class="ri-mail-fill ri-lg"></i>
                <h2 class="font-semibold whitespace-nowrap">
                    Email <span>(12)</span>
                </h2>
            </button>
            <button
                class="border-l-2 border-t-2 border-r-4 border-b-4 border-black bg-white rounded-3xl py-1.5 px-3 flex items-center gap-3 shadow-lg">
                <i class="ri-calendar-2-fill ri-lg"></i>
                <h2 class="font-semibold whitespace-nowrap">
                    Calendar <span>(22)</span>
                </h2>
            </button>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center gap-5 pt-6 px-3 lg:px-0">
            <div
                class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('/img/dribble.png') }}" alt="" />
                    <div>
                        <h3 class="font-semibold text-lg">Dribble</h3>
                        <p class="text-gray-500 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="flex items-center gap-4 py-2">
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
                                HTTPS
                            </span>
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
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
                        class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base">
                        Register Your App
                    </button>
                </div>
            </div>
            <div
                class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('/img/soundcloud.png') }}" alt="" />
                    <div>
                        <h3 class="font-semibold text-lg">SoundCloud</h3>
                        <p class="text-gray-500 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="flex items-center gap-4 py-2">
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
                                HTTPS
                            </span>
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
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
                        class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base">
                        Register Your App
                    </button>
                </div>
            </div>
            <div
                class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('/img/github.png') }}" alt="" />
                    <div>
                        <h3 class="font-semibold text-lg">GitHub</h3>
                        <p class="text-gray-500 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="flex items-center gap-4 py-2">
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
                                HTTPS
                            </span>
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
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
                        class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base">
                        Register Your App
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center gap-5 pt-6 px-3 lg:px-0">
            <div
                class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('/img/dribble.png') }}" alt="" />
                    <div>
                        <h3 class="font-semibold text-lg">Dribble</h3>
                        <p class="text-gray-500 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="flex items-center gap-4 py-2">
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
                                HTTPS
                            </span>
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
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
                        class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base">
                        Register Your App
                    </button>
                </div>
            </div>
            <div
                class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('/img/soundcloud.png') }}" alt="" />
                    <div>
                        <h3 class="font-semibold text-lg">SoundCloud</h3>
                        <p class="text-gray-500 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="flex items-center gap-4 py-2">
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
                                HTTPS
                            </span>
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
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
                        class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base">
                        Register Your App
                    </button>
                </div>
            </div>
            <div
                class="lg:w-1/3 bg-white shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl py-5 px-7">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('/img/github.png') }}" alt="" />
                    <div>
                        <h3 class="font-semibold text-lg">GitHub</h3>
                        <p class="text-gray-500 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="flex items-center gap-4 py-2">
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
                                HTTPS
                            </span>
                            <span class="py-1 px-2 bg-gray-200 rounded-xl text-xs font-semibold">
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
                        class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-blue-600 text-white py-2 px-4 whitespace-nowrap text-xs lg:text-base">
                        Register Your App
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-6">
        <div class="relative">
            <img src="{{ asset('img/bg.svg') }}" class="h-[350px] w-screen" alt="">
            <div class="absolute inset-0 flex flex-col items-center justify-center gap-4">
                <h1 class="text-white lg:text-4xl text-3xl font-semibold">Lorem Ipsum</h1>
                <p class="lg:w-[800px] text-white text-center px-5 lg:text-base text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Atque minima pariatur fugiat, vel labore aut eius delectus, totam officiis aperiam expedita,
                    aliquam debitis nesciunt magnam repellat perferendis porro optio? Dolorem?</p>
                <button
                    class="shadow-lg border-l-2 border-t-2 border-r-4 border-b-4 border-black rounded-xl bg-white text-blue-600 py-2 px-4 whitespace-nowrap text-xs lg:text-base">
                    Register Your App
                </button>
            </div>
        </div>
    </section>
    <section class="container mx-auto py-8 px-8 lg:px-0">
        <div class="">
            <div>
                <div class="pb-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-gray-900 text-xl">Recommended APIs</h2>
                        <a href="" class="text-[#0177ff] text-sm hover:text-sky-600 transition-all">View
                            All</a>
                    </div>
                    <p class="text-gray-900 text-xs mt-2">
                        Browse through our collections to learn about new use cases to
                        implement in your app
                    </p>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper mb-10">
                        <div class="swiper-slide">
                            <div
                                class="border border-gray-500 rounded-lg py-2 px-3 flex flex-col justify-between h-[240px] shadow-lg">
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between">
                                        <img src="{{ asset('/img/pp.png') }}" class="w-7 h-7 rounded-full"
                                             alt="" />
                                        <a href=""><i class="ri-heart-line text-gray-700 ri-lg"></i></a>
                                    </div>
                                    <h1 class="text-gray-900">Text Translator</h1>
                                    <p class="text-gray-900 text-sm">
                                        Translate text to 100+ languages ​. Fast processing,
                                        cost saving. Free up to 100,000 characters per month
                                    </p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="text-gray-900">
                                        <i class="ri-line-chart-line ri-sm"></i>
                                        <span class="text-xs">9.9</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-time-line ri-sm"></i>
                                        <span class="text-xs">611ms</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-check-line ri-sm"></i>
                                        <span class="text-xs">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="border border-gray-500 rounded-lg py-2 px-3 flex flex-col justify-between h-[240px] shadow-lg">
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between">
                                        <img src="{{ asset('/img/pp.png') }}" class="w-7 h-7 rounded-full"
                                             alt="" />
                                        <a href=""><i class="ri-heart-line text-gray-700 ri-lg"></i></a>
                                    </div>
                                    <h1 class="text-gray-900">Text Translator</h1>
                                    <p class="text-gray-900 text-sm">
                                        Translate text to 100+ languages ​. Fast processing,
                                        cost saving. Free up to 100,000 characters per month
                                    </p>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% rounded-xl w-[72px] px-1">
                                    <span class="text-xs text-white">Verified</span>
                                    <i class="ri-check-line ri-sm text-white"></i>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="text-gray-900">
                                        <i class="ri-line-chart-line ri-sm"></i>
                                        <span class="text-xs">9.9</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-time-line ri-sm"></i>
                                        <span class="text-xs">611ms</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-check-line ri-sm"></i>
                                        <span class="text-xs">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="border border-gray-500 rounded-lg py-2 px-3 flex flex-col justify-between h-[240px] shadow-lg">
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between">
                                        <img src="{{ asset('/img/pp.png') }}" class="w-7 h-7 rounded-full"
                                             alt="" />
                                        <a href=""><i class="ri-heart-line text-gray-700 ri-lg"></i></a>
                                    </div>
                                    <h1 class="text-gray-900">Text Translator</h1>
                                    <p class="text-gray-900 text-sm">
                                        Translate text to 100+ languages ​. Fast processing,
                                        cost saving. Free up to 100,000 characters per month
                                    </p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="text-gray-900">
                                        <i class="ri-line-chart-line ri-sm"></i>
                                        <span class="text-xs">9.9</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-time-line ri-sm"></i>
                                        <span class="text-xs">611ms</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-check-line ri-sm"></i>
                                        <span class="text-xs">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="border border-gray-500 rounded-lg py-2 px-3 flex flex-col justify-between h-[240px] shadow-lg">
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between">
                                        <img src="{{ asset('/img/pp.png') }}" class="w-7 h-7 rounded-full"
                                             alt="" />
                                        <a href=""><i class="ri-heart-line text-gray-700 ri-lg"></i></a>
                                    </div>
                                    <h1 class="text-gray-900">Text Translator</h1>
                                    <p class="text-gray-900 text-sm">
                                        Translate text to 100+ languages ​. Fast processing,
                                        cost saving. Free up to 100,000 characters per month
                                    </p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="text-gray-900">
                                        <i class="ri-line-chart-line ri-sm"></i>
                                        <span class="text-xs">9.9</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-time-line ri-sm"></i>
                                        <span class="text-xs">611ms</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-check-line ri-sm"></i>
                                        <span class="text-xs">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="border border-gray-500 rounded-lg py-2 px-3 flex flex-col justify-between h-[240px] shadow-lg">
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between">
                                        <img src="{{ asset('/img/pp.png') }}" class="w-7 h-7 rounded-full"
                                             alt="" />
                                        <a href=""><i class="ri-heart-line text-gray-700 ri-lg"></i></a>
                                    </div>
                                    <h1 class="text-gray-900">Text Translator</h1>
                                    <p class="text-gray-900 text-sm">
                                        Translate text to 100+ languages ​. Fast processing,
                                        cost saving. Free up to 100,000 characters per month
                                    </p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="text-gray-900">
                                        <i class="ri-line-chart-line ri-sm"></i>
                                        <span class="text-xs">9.9</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-time-line ri-sm"></i>
                                        <span class="text-xs">611ms</span>
                                    </div>
                                    <div class="text-gray-900">
                                        <i class="ri-check-line ri-sm"></i>
                                        <span class="text-xs">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
