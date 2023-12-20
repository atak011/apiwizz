@extends('layout')

@section('content')
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

@endsection
