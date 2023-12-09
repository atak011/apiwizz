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
        <div class="flex items-start gap-8">
            <div class="flex flex-col items-start gap-3 text-gray-900 tab-menu w-1/6">
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
                    <table class="w-[1000px] text-xs">
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
                                    <a href=""
                                        class="px-3 py-1 font-semibold rounded-md bg-sky-500 text-white">
                                        <span>Görüntüle</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-full hidden py-2" id="tab2">

                </div>
            </div>
        </div>
    </section>
</body>

</html>
