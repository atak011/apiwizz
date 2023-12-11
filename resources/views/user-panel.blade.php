<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    @vite('resources/css/app.css')
    @vite('resources/css/default.css')

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="flex flex-col min-h-screen">
    <header class="bg-[#0177ff] lg:py-4 py-2 px-4 lg:px-0">
        <div class="flex items-center justify-between container mx-auto">
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
                    <a href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all">About
                        us</a>
                </li>
                <li>
                    <a href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all">Contact
                        us</a>
                </li>
                <li>
                    <a href=""><img class="w-24" src="{{ asset('img/logo.png') }}" alt="" /></a>
                </li>
                <li>
                    <a href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all">Tutorials</a>
                </li>
                <li>
                    <a href=""
                        class="text-white font-light hover:underline underline-offset-4 decoration-white transition-all">Work
                        with us</a>
                </li>
            </ul>
            <button
                class="bg-white py-2 px-6 rounded-2xl border-t-2 border-l-2 border-b-4 border-r-4 border-black hidden lg:block">
                Add Your API
            </button>
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
                    <li class="pt-1"><button class="bg-blue-700 rounded w-full text-white py-1">Sign Up</button></li>
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
    <section class="container mx-auto py-8">
        <div class="flex flex-col lg:flex-row items-start gap-8">
            <div class="flex flex-col items-start gap-3 text-gray-900 tab-menu lg:w-1/6 px-5 w-full">
                <h1 class="font-semibold text-xl border-b border-gray-300 pb-2 w-full">Hesabım</h1>
                <a href="#tab1"
                    class="text-base font-medium transition-all py-2 rounded-lg bg-gray-100 px-2 w-full hover:bg-gray-200 shadow">
                    Siparişler
                </a>
                <a href="#tab2"
                    class="text-base font-medium transition-all py-2 rounded-lg bg-gray-100 px-2 w-full hover:bg-gray-200 shadow">
                    Hesap Detayları
                </a>
            </div>
            <div class="tab-content">
                <div class="w-full pt-2" id="tab1">
                    <div class="overflow-x-scroll lg:overflow-x-hidden w-screen lg:w-fit">
                        <table class="lg:w-[1000px] text-xs">
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead class="bg-gray-200">
                                <tr class="text-left">
                                    <th class="p-3">SİPARİŞ</th>
                                    <th class="p-3">ÜRÜN</th>
                                    <th class="p-3">SİPARİŞ TARİHİ</th>
                                    <th class="p-3">DURUM</th>
                                    <th class="p-3 text-right">FİYAT</th>
                                    <th class="p-3 text-right">EYLEMLER</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-opacity-20">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Deneme Ürün</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Ocak 2022</p>
                                    </td>
                                    <td class="p-3">
                                        <p class="text-green-500">Tamamlandı</p>
                                    </td>
                                    <td class="p-3 text-right">
                                        <p>₺15,792</p>
                                    </td>
                                    <td class="text-right">
                                        <a href=""
                                            class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                            <span>Görüntüle</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="lg:w-[1000px] hidden py-2 px-5 w-screen" id="tab2">
                    <div class="">
                        <h1 class="text-xl font-bold text-gray-900">Hesap Detayları</h1>
                        <form class="">
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2 w-full">
                                <div>
                                    <label class="text-gray-900" for="username">İsim</label>
                                    <input id="username" type="text"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="text-gray-900" for="username">Soyisim</label>
                                    <input id="username" type="text"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="text-gray-900" for="username">Kullanıcı Adı</label>
                                    <input id="username" type="text"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-900" for="emailAddress">E-Posta</label>
                                    <input id="emailAddress" type="email"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-900  " for="password">Şifre</label>
                                    <input id="password" type="password"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-900  " for="passwordConfirmation">Şifre Tekrar</label>
                                    <input id="passwordConfirmation" type="password"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="text-gray-900  "
                                        for="passwordConfirmation">Doğum Tarihi</label>
                                    <input id="date" type="date"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-900">
                                        Profil Fotoğrafı
                                    </label>
                                    <div
                                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-900" stroke="currentColor"
                                                fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload"
                                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span class="">Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file"
                                                        class="sr-only">
                                                </label>
                                                <p class="pl-1 text-gray-900">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-900">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end mt-6">
                                <button
                                    class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-sky-500 rounded-md  focus:outline-none">Güncelle</button>
                            </div>
                        </form>
                    </div>
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
    @vite('resources/js/jquery.min.js')
    @vite('resources/js/swiper-bundle.min.js')
    @vite('resources/js/main.js')
</body>

</html>
