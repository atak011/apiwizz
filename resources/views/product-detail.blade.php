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
    @vite('resources/css/prism.min.css')
    @vite('resources/css/default.css')
    @vite('resources/css/swiper.css')
    @vite('resources/css/swiper.min.css')

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>
<body class="flex flex-col min-h-screen">
    <header class="py-4 px-8 bg-gray-800">
      <div class="flex items-center justify-between">
        <img class="w-[120px]" src="./view/img/logo.png" alt="" />
        <ul class="lg:flex items-center gap-5 hidden">
          <li>
            <a
              href=""
              class="text-gray-300 text-sm hover:text-white hover:underline underline-offset-4 decoration-white transition-all"
              >Create Team</a
            >
          </li>
          <li>
            <a
              href=""
              class="text-gray-300 text-sm hover:text-white hover:underline underline-offset-4 decoration-white transition-all"
              >Add Your API</a
            >
          </li>
          <li>
            <a
              href=""
              class="text-gray-300 text-sm hover:text-white hover:underline underline-offset-4 decoration-white transition-all"
              >Docs</a
            >
          </li>
          <li>
            <a
              href=""
              class="text-gray-300 text-sm hover:text-white hover:underline underline-offset-4 decoration-white transition-all"
              >Log In</a
            >
          </li>
          <li>
            <a href="" class="text-white text-sm py-2 px-2 bg-blue-700 rounded"
              >Sign Up</a
            >
          </li>
        </ul>
        <div
          class="lg:flex items-center justify-between py-1 px-2 rounded bg-gray-600 hidden"
        >
          <input
            type="search"
            placeholder="Search for API's"
            class="bg-inherit focus:outline-none text-white text-xs"
          />
          <i class="ri-search-line text-white"></i>
        </div>
        <button
          id="menu-toggle"
          class="py-1 px-2 border border-gray-400 rounded-lg lg:hidden block"
        >
          <i class="ri-menu-line text-white"></i>
        </button>
      </div>
      <div id="mobile-menu" class="menu">
        <div class="bg-gray-900 text-white text-lg h-full w-72 p-8">
          <span id="close-btn" class="close-btn">&times;</span>
          <a href="index.html"
            ><img class="w-2/3 my-4" src="./view/img/logo.png" alt=""
          /></a>
          <ul class="text-gray-400 text-base space-y-2">
            <li class="pt-1"><a href="#" class="">Create Team</a></li>
            <li class="pt-1"><a href="#">Add Your API</a></li>
            <li class="pt-1"><a href="#">Docs</a></li>
            <li class="pt-1 border-b border-gray-400"></li>
            <li class="pt-1"><a href="#" class="">Log In</a></li>
            <li class="pt-1">
              <button class="bg-blue-700 rounded w-full text-white py-1">
                Sign Up
              </button>
            </li>
            <li class="pt-1 border-b border-gray-400"></li>
            <li class="pt-1">
              <div
                class="flex items-center justify-between py-1 px-2 rounded bg-gray-600"
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
    <section class="pt-6">
      <div
        class="flex flex-col lg:flex-row items-center justify-between border-b border-gray-600 pb-4 px-14"
      >
        <div class="flex flex-col lg:flex-row items-center gap-3">
          <img
            class="lg:w-16 w-10 lg:h-16 h-10"
            src="./view/img/pp2.png"
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
                class="text-blue-500 hover:text-blue-700 hover:underline underline-offset-4 decoration-blue-700 transition-all"
                >Davıd</a
              >
              | Updated a year ago |
              <a
                href=""
                class="text-blue-500 hover:text-blue-700 hover:underline underline-offset-4 decoration-blue-700 transition-all"
                >Food</a
              >
              | Featured in
              <a
                href=""
                class="text-blue-500 hover:text-blue-700 hover:underline underline-offset-4 decoration-blue-700 transition-all"
                >Food & Restaurant</a
              >
            </p>
          </div>
        </div>
        <div
          class="lg:flex grid grid-cols-2 lg:gap-0 gap-2 items-center py-3 lg:py-0"
        >
          <div class="border-r border-gray-600 px-3 space-y-1">
            <div class="text-white text-sm lg:text-base whitespace-nowrap">
              <i class="ri-line-chart-line ri-lg"></i>
              <span>Popularity</span>
            </div>
            <p class="text-white text-2xl text-center">9.9 / 10</p>
          </div>
          <div class="border-r border-gray-600 px-3 space-y-1">
            <div class="text-white text-sm lg:text-base whitespace-nowrap">
              <i class="ri-time-line ri-lg"></i>
              <span>Latency</span>
            </div>
            <p class="text-white text-2xl text-center">454ms</p>
          </div>
          <div class="border-r border-gray-600 px-3 space-y-1">
            <div class="text-white text-sm lg:text-base whitespace-nowrap">
              <i class="ri-check-line ri-lg"></i>
              <span>Service Level</span>
            </div>
            <p class="text-white text-2xl text-center">100%</p>
          </div>
          <div class="border-r border-gray-600 lg:border-0 px-3 space-y-1">
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
          class="flex items-center justify-center gap-5 tab-menu border-b border-gray-600 px-14 overflow-x-scroll"
        >
          <a
            href="#tab1"
            class="text-sm text-blue-500 hover:text-blue-700 transition-all pb-2 border-b-2 border-blue-500"
          >
            Endpoints
          </a>
          <a
            href="#tab2"
            class="text-sm text-blue-500 hover:text-blue-700 transition-all pb-2"
          >
            About
          </a>
          <a
            href="#tab3"
            class="text-sm text-blue-500 hover:text-blue-700 transition-all pb-2"
          >
            Tutorials
          </a>
          <a
            href="#tab4"
            class="text-sm text-blue-500 hover:text-blue-700 transition-all pb-2"
          >
            Discussions
          </a>
          <a
            href="#tab5"
            class="text-sm text-blue-500 hover:text-blue-700 transition-all pb-2"
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
            <div class="bg-gray-800 pt-4 mt-2 border-b border-gray-600">
              <div class="px-4 border-b border-gray-600 pb-2">
                <select
                  name=""
                  id=""
                  disabled
                  class="bg-gray-600 px-2 pr-20 py-1 rounded-lg border border-gray-500 text-gray-800"
                >
                  <option value="">V1 (Current)</option>
                </select>
              </div>
              <div class="lg:flex">
                <div
                  class="lg:w-1/3 border-r border-white h-[450px] overflow-y-scroll"
                >
                  <div class="py-3 border-b border-gray-600">
                    <div
                      class="lg:flex items-center justify-between py-1 px-2 rounded bg-gray-600 hidden mx-4"
                    >
                      <input
                        type="search"
                        placeholder="Search Endpoints"
                        class="bg-inherit focus:outline-none text-white text-xs w-full"
                      />
                      <i class="ri-search-line text-white"></i>
                    </div>
                  </div>
                  <div x-data="{selected:1}" class="text-white">
                    <ul class="">
                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                            class="px-4 pb-2 flex items-start justify-start flex-col text-sm bg-gray-900"
                          >
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-blue-600">POST</span>
                              Search Recipes
                            </button>
                          </div>
                        </div>
                      </li>

                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                            class="px-4 pb-2 flex items-start justify-start flex-col text-sm bg-gray-900"
                          >
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-blue-600">POST</span>
                              Search Recipes
                            </button>
                          </div>
                        </div>
                      </li>
                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                            class="px-4 pb-2 flex items-start justify-start flex-col text-sm bg-gray-900"
                          >
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-blue-600">POST</span>
                              Search Recipes
                            </button>
                          </div>
                        </div>
                      </li>
                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                            class="px-4 pb-2 flex items-start justify-start flex-col text-sm bg-gray-900"
                          >
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-blue-600">POST</span>
                              Search Recipes
                            </button>
                          </div>
                        </div>
                      </li>
                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                            class="px-4 pb-2 flex items-start justify-start flex-col text-sm bg-gray-900"
                          >
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
                            >
                              <span class="text-xs text-green-600">GET</span>
                              Search Recipes
                            </button>
                            <button
                              class="hover:bg-gray-900 w-full text-left py-2 px-1 rounded-lg transition-all"
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
                  class="lg:w-1/3 border-r border-white h-[450px] overflow-y-scroll"
                >
                  <div
                    class="py-3 border-b border-t lg:border-t-0 border-gray-600 px-5"
                  >
                    <div class="flex items-center justify-between">
                      <div>
                        <span class="text-green-600">GET</span>
                        <span class="text-white text-sm">Search Recipes</span>
                      </div>
                      <button
                        class="text-white py-[5.5px] px-3 text-sm bg-blue-600 rounded-lg"
                      >
                        <i class="ri-arrow-left-right-line ri-base"></i>
                        Test Endpoint
                      </button>
                    </div>
                  </div>
                  <div class="py-2 bg-gray-900 border-b border-gray-600">
                    <div class="px-5">
                      <p class="text-white">
                        Search through thousands of recipes using advanced
                        filtering and ranking. NOTE: Since this method combines
                        searching by query, by ingredients, and by nutrients
                        into one endpoint, each request counts as 3 requests.
                      </p>
                    </div>
                  </div>
                  <div class="py-2 bg-gray-900 border-b border-gray-600">
                    <div class="px-5 pb-5 flex items-start gap-16 w-full">
                      <h3
                        class="text-white font-light text-sm whitespace-nowrap"
                      >
                        Request URL
                      </h3>
                      <div class="w-full">
                        <select
                          name=""
                          id=""
                          class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200"
                        >
                          <option value="">rapidapi.com</option>
                        </select>
                        <h4 class="text-blue-600 font-light text-sm">
                          REQUIRED
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div x-data="{selected:0}" class="text-white">
                    <ul class="">
                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                          <div class="py-2 bg-gray-900">
                            <div class="px-5 flex items-start gap-16 w-full">
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
                                >
                                  STRING
                                </h5>
                              </div>
                              <div class="w-full">
                                <select
                                  name=""
                                  id=""
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200"
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
                            class="py-2 bg-gray-900 border-b border-gray-600"
                          >
                            <div
                              class="px-5 pb-5 flex items-start gap-16 w-full"
                            >
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
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
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200 text-sm"
                                />
                                <h4 class="text-blue-600 font-light text-sm">
                                  REQUIRED
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                          <div class="py-2 bg-gray-900">
                            <div class="px-5 flex items-start gap-16 w-full">
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
                                >
                                  STRING
                                </h5>
                              </div>
                              <div class="w-full">
                                <select
                                  name=""
                                  id=""
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200"
                                >
                                  <option value="">rapidapi.com</option>
                                </select>
                                <div class="flex items-start gap-2">
                                  <h4 class="text-blue-600 font-light text-sm">
                                    REQUIRED
                                  </h4>
                                  <p class="text-xs text-white">
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
                            class="py-2 bg-gray-900 border-b border-gray-600"
                          >
                            <div
                              class="px-5 pb-5 flex items-start gap-16 w-full"
                            >
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
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
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200 text-sm"
                                />
                                <h4 class="text-blue-600 font-light text-sm">
                                  REQUIRED
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                          <div class="py-2 bg-gray-900">
                            <div class="px-5 flex items-start gap-16 w-full">
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
                                >
                                  STRING
                                </h5>
                              </div>
                              <div class="w-full">
                                <select
                                  name=""
                                  id=""
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200"
                                >
                                  <option value="">rapidapi.com</option>
                                </select>
                                <div class="flex items-start gap-2">
                                  <h4 class="text-blue-600 font-light text-sm">
                                    REQUIRED
                                  </h4>
                                  <p class="text-xs text-white">
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
                            class="py-2 bg-gray-900 border-b border-gray-600"
                          >
                            <div
                              class="px-5 pb-5 flex items-start gap-16 w-full"
                            >
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
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
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200 text-sm"
                                />
                                <h4 class="text-blue-600 font-light text-sm">
                                  REQUIRED
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="relative border-b border-gray-600">
                        <button
                          type="button"
                          class="w-full px-5 pt-2 pb-1 text-left border-b border-gray-600"
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
                          <div class="py-2 bg-gray-900">
                            <div class="px-5 flex items-start gap-16 w-full">
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
                                >
                                  STRING
                                </h5>
                              </div>
                              <div class="w-full">
                                <select
                                  name=""
                                  id=""
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200"
                                >
                                  <option value="">rapidapi.com</option>
                                </select>
                                <div class="flex items-start gap-2">
                                  <h4 class="text-blue-600 font-light text-sm">
                                    REQUIRED
                                  </h4>
                                  <p class="text-xs text-white">
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
                            class="py-2 bg-gray-900 border-b border-gray-600"
                          >
                            <div
                              class="px-5 pb-5 flex items-start gap-16 w-full"
                            >
                              <div>
                                <h3
                                  class="text-white font-light text-sm whitespace-nowrap"
                                >
                                  Request URL
                                </h3>
                                <h5
                                  class="text-gray-400 pt-1 font-light text-sm"
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
                                  class="border rounded-lg border-gray-600 py-1 px-2 w-full bg-gray-600 text-gray-200 text-sm"
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
                  class="lg:w-1/3 border-r border-white h-[450px] overflow-y-scroll"
                >
                  <div
                    class="pt-3 border-b border-t lg:border-t-0 border-gray-600 px-5"
                  >
                    <div class="flex items-center gap-5">
                      <a
                        href=""
                        class="text-sm text-blue-500 hover:text-blue-700 transition-all pb-2 border-b-2 border-blue-500"
                      >
                        Code Snippets
                      </a>
                      <a
                        href=""
                        class="text-sm text-gray-600 hover:text-blue-700 transition-all pb-2"
                      >
                        Results
                      </a>
                    </div>
                  </div>
                  <div class="flex items-center gap-4 bg-gray-900 px-5 pt-4">
                    <select
                      name=""
                      id=""
                      class="border rounded-lg border-gray-600 py-1 px-2 bg-gray-600 text-gray-200 w-52 text-xs"
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
          <div class="w-full hidden py-2" id="tab5">
            <div>
              <h3 class="text-white text-2xl font-light text-center pt-6">
                Choose the Right Plan For You
              </h3>
              <p class="text-white text-sm font-light text-center">
                RapidAPI partners directly with API providers to give you
                no-fuss, transparent pricing. Find a plan that best matches the
                <br />
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
              <h3 class="text-white text-2xl font-light text-center pt-6">
                Frequently Asked Questions
              </h3>
              <div class="flex flex-col items-center justify-center pt-2 gap-3 px-4">
                <div>
                  <h4 class="text-sm text-white font-semibold">
                    Is my payment information secure?
                  </h4>
                  <p class="text-xs text-white font-light lg:w-[800px]">
                    Credit cards are processed through a PCI compliant banking
                    partner.
                  </p>
                </div>
                <div>
                  <h4 class="text-sm text-white font-semibold">
                    Is my payment information secure?
                  </h4>
                  <p class="text-xs text-white font-light lg:w-[800px]">
                    We work directly with API providers to implement clear,
                    transparent pricing for developers. The Provider may require
                    a credit card if a plan has a quota with an overage fee. If
                    you would no longer like to use the API, you can unsubscribe
                    from the plan at anytime by clicking the "unsubscribe"
                    button under the Billing section of the RapidAPI Dashboard.
                  </p>
                </div>
                <div>
                  <h4 class="text-sm text-white font-semibold">
                    What if I exceed my plan limits?
                  </h4>
                  <p class="text-xs text-white font-light lg:w-[800px]">
                    Depending on your plan's specification, you will either
                    incur overage charges or be suspended.
                  </p>
                </div>
                <div>
                  <h4 class="text-sm text-white font-semibold">
                    What if I exceed my plan limits?
                  </h4>
                  <p class="text-xs text-white font-light lg:w-[800px]">
                    Depending on your plan's specification, you will either
                    incur overage charges or be suspended.
                  </p>
                </div>
                <div>
                  <h4 class="text-sm text-white font-semibold">
                    What if I exceed my plan limits?
                  </h4>
                  <p class="text-xs text-white font-light lg:w-[800px]">
                    Depending on your plan's specification, you will either
                    incur overage charges or be suspended.
                  </p>
                </div>
              </div>
            </div>
            <div>
              <h3 class="text-white text-2xl font-light text-center pt-6">
                A Proven Platform With Scale
              </h3>
              <p class="text-white text-sm font-light text-center">
                Starting with the Recipe - Food - Nutrition API - you have
                access to an extensive ecosystem to accelerate your <br />
                development process
              </p>
            </div>
            <div class="grid lg:grid-cols-4 grid-cols-2">
              <div class="flex flex-col items-center justify-center">
                <i class="ri-user-3-fill ri-4x text-blue-600"></i>
                <h5 class="text-white text-2xl font-light -mt-4">300.000</h5>
                <p class="text-white text-center font-light text-sm">Developers</p>
              </div>
              <div class="flex flex-col items-center justify-center">
                <i class="ri-organization-chart ri-4x text-blue-600"></i>
                <h5 class="text-white text-2xl font-light -mt-4">Thousands</h5>
                <p class="text-white text-center font-light text-sm">of Public APIs</p>
              </div>
              <div class="flex flex-col items-center justify-center">
                <i class="ri-phone-fill ri-4x text-blue-600"></i>
                <h5 class="text-white text-2xl font-light -mt-4">Billions</h5>
                <p class="text-white text-center font-light text-sm">of API Calls / Month</p>
              </div>
              <div class="flex flex-col items-center justify-center">
                <i class="ri-earth-fill ri-4x text-blue-600"></i>
                <h5 class="text-white text-2xl font-light -mt-4">175</h5>
                <p class="text-white text-center font-light text-sm">Countries served</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="w-full bg-gray-800 py-8">
      <div class="md:px-12 lg:px-28">
        <div class="container m-auto space-y-6 text-white">
          <img src="./view/img/logo.png" alt="logo" class="m-auto w-40" />
          <ul
            role="list"
            class="flex flex-col items-center justify-center gap-4 py-4 sm:flex-row sm:gap-8"
          >
            <li role="listitem">
              <a href="#" class="hover:text-primary">Home</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">About</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">Blog</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">Learn</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">Careers</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">Preess</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">Contact</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">Terms</a>
            </li>
            <li role="listitem">
              <a href="#" class="hover:text-primary">Privacy</a>
            </li>
          </ul>
          <div class="m-auto flex w-max items-center justify-between space-x-4">
            <a href="tel:+243996660436" aria-label="call">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="m-auto w-5"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                ></path>
              </svg>
            </a>
            <a href="mailto:hello@mail.com" aria-label="send mail">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="m-auto w-5"
                viewBox="0 0 16 16"
              >
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                ></path>
              </svg>
            </a>
            <a href="#" title="facebook" target="blank" aria-label="facebook">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="m-auto w-5"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                ></path>
              </svg>
            </a>
            <a href="#" title="linkedin" target="blank" aria-label="linkedin">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="m-auto w-5"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"
                ></path>
              </svg>
            </a>
          </div>

          <div class="text-center">
            <span class="text-sm tracking-wide"
              >Copyright © RapidAPI <span id="year"></span> | All right
              reserved</span
            >
          </div>
        </div>
      </div>
    </footer>
    @vite('resources/js/jquery.min.js')
    @vite('resources/js/swiper-bundle.min.js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    @vite('resources/js/main.js')
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script>
      var btn = document.querySelector("#btn");

      btn.addEventListener("click", () => {
        const textCopied = ClipboardJS.copy(document.querySelector("#bar"));
        console.log("copied!", textCopied);
      });
    </script>
  </body>
</body>
</html>
