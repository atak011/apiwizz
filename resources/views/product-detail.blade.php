@extends('layout')

@section('content')
    <section class="pt-6 bg-[#0177ff]">
        <div
            class="flex flex-col lg:flex-row items-center justify-between border-b border-white pb-4 px-14"
        >
            <div class="flex flex-col lg:flex-row items-center gap-3">
                <img
                    class="lg:w-16 w-10 lg:h-16 h-10"
                    src="{{asset ('/img/pp2.png')}}"
                    alt=""
                />
                <h1 class="lg:text-2xl text-lg text-white lg:hidden block">
                    Recipe - Food - Nutrition
                </h1>
                <div class="space-y-2">
                    <div
                        class="flex justify-center lg:justify-start items-center gap-5"
                    >
                        <h1 class="lg:text-2xl text-lg text-white hidden lg:block">
                            Recipe - Food - Nutrition
                        </h1>
                        <button>
                            <i class="ri-heart-line ri-xl text-white"></i>
                        </button>
                        <button
                            class="text-xs text-white px-0.5 py-0.5 bg-gray-500 rounded"
                        >
                            FREEMIUM
                        </button>
                        <div
                            class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% rounded-xl w-[72px] px-1"
                        >
                            <span class="text-xs text-white">Verified</span>
                            <i class="ri-check-line ri-sm text-white"></i>
                        </div>
                    </div>
                    <p class="text-sm text-white text-center lg:text-left">
                        By
                        <a
                            href=""
                            class="text-gray-200 hover:text-blue-700 hover:underline underline-offset-4 decoration-blue-700 transition-all"
                        >Davıd</a
                        >
                        | Updated a year ago |
                        <a
                            href=""
                            class="text-gray-200 hover:text-blue-700 hover:underline underline-offset-4 decoration-blue-700 transition-all"
                        >Food</a
                        >
                        | Featured in
                        <a
                            href=""
                            class="text-gray-200 hover:text-blue-700 hover:underline underline-offset-4 decoration-blue-700 transition-all"
                        >Food & Restaurant</a
                        >
                    </p>
                </div>
            </div>
            <div
                class="lg:flex grid grid-cols-2 lg:gap-0 gap-2 items-center py-3 lg:py-0"
            >
                <div class="border-r border-white px-3 space-y-1">
                    <div class="text-white text-sm lg:text-base whitespace-nowrap">
                        <i class="ri-line-chart-line ri-lg"></i>
                        <span>Popularity</span>
                    </div>
                    <p class="text-white text-2xl text-center">9.9 / 10</p>
                </div>
                <div class="border-r border-white px-3 space-y-1">
                    <div class="text-white text-sm lg:text-base whitespace-nowrap">
                        <i class="ri-time-line ri-lg"></i>
                        <span>Latency</span>
                    </div>
                    <p class="text-white text-2xl text-center">454ms</p>
                </div>
                <div class="border-r border-white px-3 space-y-1">
                    <div class="text-white text-sm lg:text-base whitespace-nowrap">
                        <i class="ri-check-line ri-lg"></i>
                        <span>Service Level</span>
                    </div>
                    <p class="text-white text-2xl text-center">100%</p>
                </div>
                <div class="border-r border-white lg:border-0 px-3 space-y-1">
                    <div class="text-white text-sm lg:text-base whitespace-nowrap">
                        <i class="ri-add-line ri-lg"></i>
                        <span>Health Check</span>
                    </div>
                    <p class="text-white text-2xl text-center">N/A</p>
                </div>
            </div>
        </div>
        <div class="pt-2">
            <div
                class="flex items-center justify-center gap-5 tab-menu border-b border-white px-14 "
            >
                <a
                    href="#tab1"
                    class="text-white hover:text-gray-200 font-semibold transition-all pb-2 border-b-2 border-blue-500"
                >
                    Endpoints
                </a>
                <a
                    href="#tab2"
                    class="text-white hover:text-gray-200 font-semibold transition-all pb-2"
                >
                    About
                </a>
                <a
                    href="#tab3"
                    class="text-white hover:text-gray-200 font-semibold transition-all pb-2"
                >
                    Tutorials
                </a>
                <a
                    href="#tab4"
                    class="text-white hover:text-gray-200 font-semibold transition-all pb-2"
                >
                    Discussions
                </a>
                <a
                    href="#tab5"
                    class="text-white hover:text-gray-200 font-semibold transition-all pb-2"
                >
                    Pricing
                </a>
            </div>
            <div class="tab-content">
                <div class="w-full pt-2" id="tab1">
                    <p class="text-white px-14">
                        The spoonacular Recipe - Food - Nutrition API gives you to access
                        to thousands of recipes, storeboug
                    </p>
                    
                    <div class="bg-white pt-4 mt-2 border-b border-black">
                        <div class="pb-3 px-14 text-center text-gray-900">
                            <h1 class="font-semibold text-lg">Başlık</h1>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aut deserunt ut tenetur vero fugiat eaque, officiis labore reiciendis molestias distinctio asperiores ab nemo voluptatem atque aperiam. Velit, enim sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio minima nulla maxime quod sapiente, sed ducimus praesentium et enim doloribus reiciendis veniam eius iusto aperiam. A omnis ex adipisci accusantium?</p>
                        </div>
                        <div class="px-4 border-b border-black pb-2">
                            <select
                                name=""
                                id=""
                                disabled
                                class="bg-gray-200 px-2 pr-20 py-1 rounded-lg border border-gray-500 text-gray-900"
                            >
                                <option value="">V1 (Current)</option>
                            </select>
                        </div>
                        <div class="lg:flex h-[75vh]">
                            <div
                                class="lg:w-1/3 border-r border-blue-600  overflow-y-scroll"
                            >
                                <div class="py-3 border-b border-black">
                                    <div
                                        class="lg:flex items-center justify-between py-1 px-2 rounded bg-gray-200 hidden mx-4"
                                    >
                                        <input
                                            type="search"
                                            placeholder="Search Endpoints"
                                            class="bg-inherit focus:outline-none text-gray-900 text-xs w-full"
                                        />
                                        <i class="ri-search-line text-gray-900"></i>
                                    </div>
                                </div>
                                <div x-data="{selected:1}" class="text-gray-900">
                                    <ul class="">
                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 1 ? selected = 1 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Recipes </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container1"
                                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''"
                                            >
                                                <div
                                                    class="px-4 pb-2 flex items-start justify-start flex-col text-sm"
                                                >
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-blue-600">POST</span>
                                                        Search Recipes
                                                    </button>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 2 ? selected = 2 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Ingredients </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container2"
                                                x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''"
                                            >
                                                <div
                                                    class="px-4 pb-2 flex items-start justify-start flex-col text-sm"
                                                >
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-blue-600">POST</span>
                                                        Search Recipes
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 3 ? selected = 3 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Products </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container3"
                                                x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''"
                                            >
                                                <div
                                                    class="px-4 pb-2 flex items-start justify-start flex-col text-sm"
                                                >
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-blue-600">POST</span>
                                                        Search Recipes
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 4 ? selected = 4 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Products </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container4"
                                                x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''"
                                            >
                                                <div
                                                    class="px-4 pb-2 flex items-start justify-start flex-col text-sm"
                                                >
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-blue-600">POST</span>
                                                        Search Recipes
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 5 ? selected = 5 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Products </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container5"
                                                x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''"
                                            >
                                                <div
                                                    class="px-4 pb-2 flex items-start justify-start flex-col text-sm"
                                                >
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-green-600">GET</span>
                                                        Search Recipes
                                                    </button>
                                                    <button
                                                        class="w-full text-left py-2 px-1 rounded-lg transition-all"
                                                    >
                                                        <span class="text-xs text-blue-600">POST</span>
                                                        Search Recipes
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="lg:w-1/3 border-r border-blue-600  overflow-y-scroll"
                            >
                                <div
                                    class="py-3 border-b border-t lg:border-t-0 border-black px-5"
                                >
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="text-green-600">GET</span>
                                            <span class="text-gray-900 text-sm">Search Recipes</span>
                                        </div>
                                        <button
                                            class="text-white py-[5.5px] px-3 text-sm bg-blue-600 rounded-lg"
                                        >
                                            <i class="ri-arrow-left-right-line ri-base"></i>
                                            Test Endpoint
                                        </button>
                                    </div>
                                </div>
                                <div class="py-2 border-b border-black">
                                    <div class="px-5">
                                        <p class="text-gray-900">
                                            Search through thousands of recipes using advanced
                                            filtering and ranking. NOTE: Since this method combines
                                            searching by query, by ingredients, and by nutrients
                                            into one endpoint, each request counts as 3 requests.
                                        </p>
                                    </div>
                                </div>
                                <div class="py-2 border-b border-black">
                                    <div class="px-5 pb-5 flex items-start gap-16 w-full">
                                        <h3
                                            class="text-gray-900 font-light text-sm whitespace-nowrap"
                                        >
                                            Request URL
                                        </h3>
                                        <div class="w-full">
                                            <select
                                                name=""
                                                id=""
                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900"
                                            >
                                                <option value="">rapidapi.com</option>
                                            </select>
                                            <h4 class="text-blue-600 font-light text-sm">
                                                REQUIRED
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div x-data="{selected:0}" class="text-gray-900">
                                    <ul class="">
                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 1 ? selected = 1 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Header Parameters </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container1"
                                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''"
                                            >
                                                <div class="py-2">
                                                    <div class="px-5 flex items-start gap-16 w-full">
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-600 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <select
                                                                name=""
                                                                id=""
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900"
                                                            >
                                                                <option value="">rapidapi.com</option>
                                                            </select>
                                                            <h4 class="text-blue-600 font-light text-sm">
                                                                REQUIRED
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="py-2 border-b border-black"
                                                >
                                                    <div
                                                        class="px-5 pb-5 flex items-start gap-16 w-full"
                                                    >
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-600 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <input
                                                                type="text"
                                                                disabled
                                                                placeholder=""
                                                                value="spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900 text-sm"
                                                            />
                                                            <h4 class="text-blue-600 font-light text-sm">
                                                                REQUIRED
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 2 ? selected = 2 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Ingredients </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container2"
                                                x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''"
                                            >
                                                <div class="py-2">
                                                    <div class="px-5 flex items-start gap-16 w-full">
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-600 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <select
                                                                name=""
                                                                id=""
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900"
                                                            >
                                                                <option value="">rapidapi.com</option>
                                                            </select>
                                                            <div class="flex items-start gap-2">
                                                                <h4 class="text-blue-600 font-light text-sm">
                                                                    REQUIRED
                                                                </h4>
                                                                <p class="text-xs text-gray-900">
                                                                    The cuisine(s) of the recipes. One or more
                                                                    (comma separated) of the following: african,
                                                                    chinese, japanese, korean, vietnamese, thai,
                                                                    indian, british, irish, french, italian,
                                                                    mexican, spanish, middle eastern, jewish,
                                                                    american, cajun, southern, greek, german,
                                                                    nordic, eastern european, caribbean, or
                                                                    latin american.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="py-2 border-b border-black"
                                                >
                                                    <div
                                                        class="px-5 pb-5 flex items-start gap-16 w-full"
                                                    >
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-700 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <input
                                                                type="text"
                                                                disabled
                                                                placeholder=""
                                                                value="spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900 text-sm"
                                                            />
                                                            <h4 class="text-blue-600 font-light text-sm">
                                                                REQUIRED
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 3 ? selected = 3 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Products </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container3"
                                                x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''"
                                            >
                                                <div class="py-2">
                                                    <div class="px-5 flex items-start gap-16 w-full">
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-600 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <select
                                                                name=""
                                                                id=""
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900"
                                                            >
                                                                <option value="">rapidapi.com</option>
                                                            </select>
                                                            <div class="flex items-start gap-2">
                                                                <h4 class="text-blue-600 font-light text-sm">
                                                                    REQUIRED
                                                                </h4>
                                                                <p class="text-xs text-gray-900">
                                                                    The cuisine(s) of the recipes. One or more
                                                                    (comma separated) of the following: african,
                                                                    chinese, japanese, korean, vietnamese, thai,
                                                                    indian, british, irish, french, italian,
                                                                    mexican, spanish, middle eastern, jewish,
                                                                    american, cajun, southern, greek, german,
                                                                    nordic, eastern european, caribbean, or
                                                                    latin american.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="py-2 border-b border-black"
                                                >
                                                    <div
                                                        class="px-5 pb-5 flex items-start gap-16 w-full"
                                                    >
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-700 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <input
                                                                type="text"
                                                                disabled
                                                                placeholder=""
                                                                value="spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900 text-sm"
                                                            />
                                                            <h4 class="text-blue-600 font-light text-sm">
                                                                REQUIRED
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="relative border-b border-black">
                                            <button
                                                type="button"
                                                class="w-full px-5 pt-2 pb-1 text-left border-b border-black"
                                                @click="selected !== 5 ? selected = 5 : selected = null"
                                            >
                                                <div class="flex items-center justify-between">
                                                    <span> Products </span>
                                                    <i class="ri-arrow-down-s-line ri-lg"></i>
                                                </div>
                                            </button>

                                            <div
                                                class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                style=""
                                                x-ref="container5"
                                                x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''"
                                            >
                                                <div class="py-2">
                                                    <div class="px-5 flex items-start gap-16 w-full">
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-600 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <select
                                                                name=""
                                                                id=""
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900"
                                                            >
                                                                <option value="">rapidapi.com</option>
                                                            </select>
                                                            <div class="flex items-start gap-2">
                                                                <h4 class="text-blue-600 font-light text-sm">
                                                                    REQUIRED
                                                                </h4>
                                                                <p class="text-xs text-gray-900">
                                                                    The cuisine(s) of the recipes. One or more
                                                                    (comma separated) of the following: african,
                                                                    chinese, japanese, korean, vietnamese, thai,
                                                                    indian, british, irish, french, italian,
                                                                    mexican, spanish, middle eastern, jewish,
                                                                    american, cajun, southern, greek, german,
                                                                    nordic, eastern european, caribbean, or
                                                                    latin american.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="py-2 border-b border-black"
                                                >
                                                    <div
                                                        class="px-5 pb-5 flex items-start gap-16 w-full"
                                                    >
                                                        <div>
                                                            <h3
                                                                class="text-gray-900 font-light text-sm whitespace-nowrap"
                                                            >
                                                                Request URL
                                                            </h3>
                                                            <h5
                                                                class="text-gray-700 pt-1 font-light text-sm"
                                                            >
                                                                STRING
                                                            </h5>
                                                        </div>
                                                        <div class="w-full">
                                                            <input
                                                                type="text"
                                                                disabled
                                                                placeholder=""
                                                                value="spoonacular-recipe-food-nutrition-v1.p.rapidapi.com"
                                                                class="border rounded-lg border-black py-1 px-2 w-full bg-gray-200 text-gray-900 text-sm"
                                                            />
                                                            <h4 class="text-blue-600 font-light text-sm">
                                                                REQUIRED
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="lg:w-1/3 border-r border-blue-600  overflow-y-scroll"
                            >
                                <div
                                    class="pt-[18px] border-b border-t lg:border-t-0 border-black px-5"
                                >
                                    <div class="flex items-center gap-5">
                                        <a
                                            href=""
                                            class="text-sm text-gray-900 hover:text-blue-700 transition-all pb-4 border-b-2 border-blue-500"
                                        >
                                            Code Snippets
                                        </a>
                                        <a
                                            href=""
                                            class="text-sm text-gray-600 hover:text-blue-700 transition-all pb-4"
                                        >
                                            Results
                                        </a>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 px-5 pt-4">
                                    <select
                                        name=""
                                        id=""
                                        class="border rounded-lg border-black py-1 px-2 bg-gray-200 text-gray-900 w-52 text-xs"
                                    >
                                        <option value="">(Node.js) Axios</option>
                                    </select>
                                    <button
                                        id="btn"
                                        class="flex items-center gap-1 text-sky-400 text-sm"
                                    >
                                        <i class="ri-file-copy-line"></i>
                                        Copy
                                    </button>
                                </div>
                                <pre>
                    <code class="language-javascript" id="bar">
      const axios = require('axios');

      const options = {
        method: 'GET',
        url: 'https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/complexSearch',
        params: {
          query: 'pasta',
          cuisine: 'italian',
          excludeCuisine: 'greek',
          diet: 'vegetarian',
          intolerances: 'gluten',
          equipment: 'pan',
          includeIngredients: 'tomato,cheese',
          excludeIngredients: 'eggs',
          type: 'main course',
          instructionsRequired: 'true',
          fillIngredients: 'false',
          addRecipeInformation: 'false',
          titleMatch: 'Crock Pot',
          maxReadyTime: '20',
          ignorePantry: 'true',
          sort: 'calories',
          sortDirection: 'asc',
          minCarbs: '10',
          maxCarbs: '100',
          minProtein: '10',
          maxProtein: '100',
          minCalories: '50',
          maxCalories: '800',
          minFat: '10',
          maxFat: '100',
          minAlcohol: '0',
          maxAlcohol: '100',
          minCaffeine: '0',
          maxCaffeine: '100',
          minCopper: '0',
          maxCopper: '100',
          minCalcium: '0',
          maxCalcium: '100',
          minCholine: '0',
          maxCholine: '100',
          minCholesterol: '0',
          maxCholesterol: '100',
          minFluoride: '0',
          maxFluoride: '100',
          minSaturatedFat: '0',
          maxSaturatedFat: '100',
          minVitaminA: '0',
          maxVitaminA: '100',
          minVitaminC: '0',
          maxVitaminC: '100',
          minVitaminD: '0',
          maxVitaminD: '100',
          minVitaminE: '0',
          maxVitaminE: '100',
          minVitaminK: '0',
          maxVitaminK: '100',
          minVitaminB1: '0',
          maxVitaminB1: '100',
          minVitaminB2: '0',
          maxVitaminB2: '100',
          minVitaminB5: '0',
          maxVitaminB5: '100',
          minVitaminB3: '0',
          maxVitaminB3: '100',
          minVitaminB6: '0',
          maxVitaminB6: '100',
          minVitaminB12: '0',
          maxVitaminB12: '100',
          minFiber: '0',
          maxFiber: '100',
          minFolate: '0',
          maxFolate: '100',
          minFolicAcid: '0',
          maxFolicAcid: '100',
          minIodine: '0',
          maxIodine: '100',
          minIron: '0',
          maxIron: '100',
          minMagnesium: '0',
          maxMagnesium: '100',
          minManganese: '0',
          maxManganese: '100',
          minPhosphorus: '0',
          maxPhosphorus: '100',
          minPotassium: '0',
          maxPotassium: '100',
          minSelenium: '0',
          maxSelenium: '100',
          minSodium: '0',
          maxSodium: '100',
          minSugar: '0',
          maxSugar: '100',
          minZinc: '0',
          maxZinc: '100',
          offset: '0',
          number: '10',
          limitLicense: 'false',
          ranking: '2'
        },
        headers: {
          'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
          'X-RapidAPI-Host': 'spoonacular-recipe-food-nutrition-v1.p.rapidapi.com'
        }
      };

      try {
        const response = await axios.request(options);
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    </code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full hidden py-2 bg-white" id="tab5">
                    <div>
                        <h3 class="text-gray-900 text-2xl font-light text-center pt-6">
                            Choose the Right Plan For You
                        </h3>
                        <p class="text-gray-900 text-sm font-light text-center">
                            RapidAPI partners directly with API providers to give you
                            no-fuss, transparent pricing. Find a plan that best matches the
                            <br/>
                            scale you need for your application.
                        </p>
                    </div>
                    <div class="">
                        <div class="relative px-4 py-4 mx-auto md:px-24 lg:px-8 lg:py-4">
                            <div class="grid gap-10 md:grid-cols-4 sm:mx-auto">
                                <div>
                                    <div class="p-8 bg-gray-700 rounded">
                                        <div class="mb-4 text-center">
                                            <p class="text-xl font-medium tracking-wide text-white">
                                                Starter Plan
                                            </p>
                                            <div class="flex items-center justify-center">
                                                <p
                                                    class="mr-2 text-5xl font-semibold text-white lg:text-6xl"
                                                >
                                                    $39
                                                </p>
                                                <p class="text-lg text-gray-500">/ month</p>
                                            </div>
                                        </div>
                                        <ul class="mb-8 space-y-2">
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 deploys per day
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 GB of storage
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">3 domains</p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    SSL Certificates
                                                </p>
                                            </li>
                                        </ul>
                                        <button
                                            type="submit"
                                            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-gray-900 focus:shadow-outline focus:outline-none"
                                        >
                                            Get Now
                                        </button>
                                    </div>
                                    <div
                                        class="w-11/12 h-2 mx-auto bg-gray-700 rounded-b opacity-75"
                                    ></div>
                                    <div
                                        class="w-10/12 h-2 mx-auto bg-gray-700 rounded-b opacity-50"
                                    ></div>
                                    <div
                                        class="w-9/12 h-2 mx-auto bg-gray-700 rounded-b opacity-25"
                                    ></div>
                                </div>
                                <div>
                                    <div class="p-8 bg-gray-700 rounded">
                                        <div class="mb-4 text-center">
                                            <p class="text-xl font-medium tracking-wide text-white">
                                                Starter Plan
                                            </p>
                                            <div class="flex items-center justify-center">
                                                <p
                                                    class="mr-2 text-5xl font-semibold text-white lg:text-6xl"
                                                >
                                                    $39
                                                </p>
                                                <p class="text-lg text-gray-500">/ month</p>
                                            </div>
                                        </div>
                                        <ul class="mb-8 space-y-2">
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 deploys per day
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 GB of storage
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">3 domains</p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    SSL Certificates
                                                </p>
                                            </li>
                                        </ul>
                                        <button
                                            type="submit"
                                            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-gray-900 focus:shadow-outline focus:outline-none"
                                        >
                                            Get Now
                                        </button>
                                    </div>
                                    <div
                                        class="w-11/12 h-2 mx-auto bg-gray-700 rounded-b opacity-75"
                                    ></div>
                                    <div
                                        class="w-10/12 h-2 mx-auto bg-gray-700 rounded-b opacity-50"
                                    ></div>
                                    <div
                                        class="w-9/12 h-2 mx-auto bg-gray-700 rounded-b opacity-25"
                                    ></div>
                                </div>
                                <div>
                                    <div class="p-8 bg-gray-700 rounded">
                                        <div class="mb-4 text-center">
                                            <p class="text-xl font-medium tracking-wide text-white">
                                                Starter Plan
                                            </p>
                                            <div class="flex items-center justify-center">
                                                <p
                                                    class="mr-2 text-5xl font-semibold text-white lg:text-6xl"
                                                >
                                                    $39
                                                </p>
                                                <p class="text-lg text-gray-500">/ month</p>
                                            </div>
                                        </div>
                                        <ul class="mb-8 space-y-2">
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 deploys per day
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 GB of storage
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">3 domains</p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    SSL Certificates
                                                </p>
                                            </li>
                                        </ul>
                                        <button
                                            type="submit"
                                            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-gray-900 focus:shadow-outline focus:outline-none"
                                        >
                                            Get Now
                                        </button>
                                    </div>
                                    <div
                                        class="w-11/12 h-2 mx-auto bg-gray-700 rounded-b opacity-75"
                                    ></div>
                                    <div
                                        class="w-10/12 h-2 mx-auto bg-gray-700 rounded-b opacity-50"
                                    ></div>
                                    <div
                                        class="w-9/12 h-2 mx-auto bg-gray-700 rounded-b opacity-25"
                                    ></div>
                                </div>
                                <div>
                                    <div class="p-8 bg-gray-700 rounded">
                                        <div class="mb-4 text-center">
                                            <p class="text-xl font-medium tracking-wide text-white">
                                                Starter Plan
                                            </p>
                                            <div class="flex items-center justify-center">
                                                <p
                                                    class="mr-2 text-5xl font-semibold text-white lg:text-6xl"
                                                >
                                                    $39
                                                </p>
                                                <p class="text-lg text-gray-500">/ month</p>
                                            </div>
                                        </div>
                                        <ul class="mb-8 space-y-2">
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 deploys per day
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    10 GB of storage
                                                </p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">3 domains</p>
                                            </li>
                                            <li class="flex items-center">
                                                <div class="mr-3">
                                                    <svg
                                                        class="w-4 h-4 text-white"
                                                        viewBox="0 0 24 24"
                                                        stroke-linecap="round"
                                                        stroke-width="2"
                                                    >
                                                        <polyline
                                                            fill="none"
                                                            stroke="currentColor"
                                                            points="6,12 10,16 18,8"
                                                        ></polyline>
                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            fill="none"
                                                            r="11"
                                                            stroke="currentColor"
                                                        ></circle>
                                                    </svg>
                                                </div>
                                                <p class="font-medium text-gray-300">
                                                    SSL Certificates
                                                </p>
                                            </li>
                                        </ul>
                                        <button
                                            type="submit"
                                            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-gray-900 focus:shadow-outline focus:outline-none"
                                        >
                                            Get Now
                                        </button>
                                    </div>
                                    <div
                                        class="w-11/12 h-2 mx-auto bg-gray-700 rounded-b opacity-75"
                                    ></div>
                                    <div
                                        class="w-10/12 h-2 mx-auto bg-gray-700 rounded-b opacity-50"
                                    ></div>
                                    <div
                                        class="w-9/12 h-2 mx-auto bg-gray-700 rounded-b opacity-25"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-4">
                        <h3 class="text-gray-900 text-2xl font-light text-center pt-6">
                            Frequently Asked Questions
                        </h3>
                        <div class="flex flex-col items-center justify-center pt-2 gap-3 px-4">
                            <div>
                                <h4 class="text-sm text-gray-900 font-semibold">
                                    Is my payment information secure?
                                </h4>
                                <p class="text-xs text-gray-900 font-light lg:w-[800px]">
                                    Credit cards are processed through a PCI compliant banking
                                    partner.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-sm text-gray-900 font-semibold">
                                    Is my payment information secure?
                                </h4>
                                <p class="text-xs text-gray-900 font-light lg:w-[800px]">
                                    We work directly with API providers to implement clear,
                                    transparent pricing for developers. The Provider may require
                                    a credit card if a plan has a quota with an overage fee. If
                                    you would no longer like to use the API, you can unsubscribe
                                    from the plan at anytime by clicking the "unsubscribe"
                                    button under the Billing section of the RapidAPI Dashboard.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-sm text-gray-900 font-semibold">
                                    What if I exceed my plan limits?
                                </h4>
                                <p class="text-xs text-gray-900 font-light lg:w-[800px]">
                                    Depending on your plan's specification, you will either
                                    incur overage charges or be suspended.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-sm text-gray-900 font-semibold">
                                    What if I exceed my plan limits?
                                </h4>
                                <p class="text-xs text-gray-900 font-light lg:w-[800px]">
                                    Depending on your plan's specification, you will either
                                    incur overage charges or be suspended.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-sm text-gray-900 font-semibold">
                                    What if I exceed my plan limits?
                                </h4>
                                <p class="text-xs text-gray-900 font-light lg:w-[800px]">
                                    Depending on your plan's specification, you will either
                                    incur overage charges or be suspended.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-gray-900 text-2xl font-light text-center pt-6">
                            A Proven Platform With Scale
                        </h3>
                        <p class="text-gray-900 text-sm font-light text-center">
                            Starting with the Recipe - Food - Nutrition API - you have
                            access to an extensive ecosystem to accelerate your <br/>
                            development process
                        </p>
                    </div>
                    <div class="grid lg:grid-cols-4 grid-cols-2">
                        <div class="flex flex-col items-center justify-center">
                            <i class="ri-user-3-fill ri-4x text-blue-600"></i>
                            <h5 class="text-gray-900 text-2xl font-light -mt-4">300.000</h5>
                            <p class="text-gray-900 text-center font-light text-sm">Developers</p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <i class="ri-organization-chart ri-4x text-blue-600"></i>
                            <h5 class="text-gray-900 text-2xl font-light -mt-4">Thousands</h5>
                            <p class="text-gray-900 text-center font-light text-sm">of Public APIs</p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <i class="ri-phone-fill ri-4x text-blue-600"></i>
                            <h5 class="text-gray-900 text-2xl font-light -mt-4">Billions</h5>
                            <p class="text-gray-900 text-center font-light text-sm">of API Calls / Month</p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <i class="ri-earth-fill ri-4x text-blue-600"></i>
                            <h5 class="text-gray-900 text-2xl font-light -mt-4">175</h5>
                            <p class="text-gray-900 text-center font-light text-sm">Countries served</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
