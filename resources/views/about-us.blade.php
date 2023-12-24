@extends('layout')

@section('content')
<section class="container mx-auto py-10 px-5 lg:px-0">
    <div class="flex flex-col lg:flex-row items-center justify-center lg:gap-32 gap-10">
        <img class="lg:w-[350px] rounded-bl-2xl rounded-tr-2xl shadow-lg" src="{{asset('/img/api.jpg')}}" alt="">
        <div>
            <h1 class="text-lg font-bold text-gray-900 text-center">About Us</h1>
            <p class="text-gray-900 text-center lg:w-[700px] lg:text-base text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel labore facilis vitae aliquam assumenda explicabo incidunt iusto maxime harum excepturi dicta hic eius, error odit, repellat odio molestiae sequi recusandae! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum explicabo reprehenderit fuga vel delectus dolorem quae quam quos numquam nihil velit eos, sit at aliquam aut sunt corrupti iusto cumque!</p>
        </div>
    </div>
    <div class="py-20">
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
    <div class="flex flex-col lg:flex-row items-center justify-center lg:gap-32 gap-10">
        <div class="space-y-3">
            <h1 class="text-xl font-bold text-gray-900">Lorem Ipsum</h1>
            <p class="text-gray-900 lg:w-[700px] lg:text-base text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit non quidem eveniet velit vel ex eaque pariatur dolor quas ducimus, fuga eius repellat deserunt debitis. Soluta repellendus voluptates dolorum accusamus!</p>
            <ul class="space-y-3">
                <li class="flex items-center gap-2"><i class="ri-check-line ri-lg text-[#0177ff]"></i><p class="lg:w-[700px] lg:text-base text-sm text-gray-900">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias possimus ipsum natus beatae aliquam </p></li>
                <li class="flex items-center gap-2"><i class="ri-check-line ri-lg text-[#0177ff]"></i><p class="lg:w-[700px] lg:text-base text-sm text-gray-900">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias possimus ipsum natus beatae aliquam </p></li>
                <li class="flex items-center gap-2"><i class="ri-check-line ri-lg text-[#0177ff]"></i><p class="lg:w-[700px] lg:text-base text-sm text-gray-900">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias possimus ipsum natus beatae aliquam </p></li>
            </ul>
        </div>
        <img class="w-[400px] rounded-bl-2xl rounded-tr-2xl shadow-lg" src="{{asset('/img/api.jpg')}}" alt="">
    </div>
</section>
@endsection