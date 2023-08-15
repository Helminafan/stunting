@extends('admin.master')
@section('master')
    <div class="h-28 bg-green-500 rounded-b-[60px] relative">
        <div class="flex justify-between items-center mx-6 pt-4">
            <div class="text-white">
                <h1 class="font-medium text-lg">Stunting</h1>
            </div>
            <div class="text-white">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-xl absolute -bottom-12 w-[250px] left-1/2 -translate-x-1/2">
            <div class="flex items-center px-5 py-3">
                <div class="bg-red-500 bg-cover w-12 h-12 mr-2 rounded-[500px]"
                    style="background-image: url({{ asset('kader/foto/helmi.jpg') }});"></div>
                <div>
                    <h2 class="font-bold text-xs">Kader Mawar 5</h2>
                    <h2 class="font-extralight text-xs">@mawar 5</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="text-gray-600 mt-16 mx-6 mb-5">
        <h1>Data</h1>
        <hr class="border-gray-500 ">
    </div>
    <div class="grid grid-cols-2 gap-2 mb-5 mx-6 justify-between">
        <div class="bg-white  p-4 rounded-xl">
            <h1 class="text-[14px]">Jumlah Anak</h1>
            <div class="flex">
                <h1 class="text-[30px]">203</h1>
                <img src="{{ asset('kader/foto/bayi.png') }}" alt="">
            </div>
        </div>
        <div class="bg-white p-4 rounded-xl">
            <h1 class="text-[14px]">Jumlah Stunting</h1>
            <div class="flex">
                <h1 class="text-[30px]">203</h1>
            </div>
        </div>
    </div>
    <div class="text-gray-600  mx-6 mb-5">
        <h1>Grafik</h1>
        <hr class="border-gray-500 ">
    </div>
    <div class="card rounded-md mb-5 mx-16">
        <div class="bg-slate-200 font-semibold py-2 text-sm  text-blue-600">
            <h1 class="ml-3">Revenue Source</h1>
        </div>
        <div class="bg-white py-3">
            <canvas id="myPieChart" class="h-24 mb-3"></canvas>
            <div class="flex text-[12px] justify-center">
                <span class="mr-2">
                    <i class="fas fa-circle text-blue-700"></i> Direct
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-blue-500"></i> Social
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-green-600"></i> Referral
                </span>
            </div>
        </div>
    </div>
    <div class="text-gray-600  mx-6 mb-5">
        <div class="flex justify-between">
            <h1>Artikel</h1>
            <a href="" class="text-green-500"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
        </div>

        <hr class="border-gray-500 ">
    </div>
    <div class="container mb-20">
        <div class="mx-auto px-6 ">
            <div class="rounded bg-white shadow-lg overflow-hidden">
                <img src="https://source.unsplash.com/600x400" alt="">
                <div class="mx-3 py-3">
                    <div class="font-bold mb-2 text-slate-700">
                        Artikel Titel
                    </div>
                    <p class="text-sm text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Necessitatibus, ut. Maxime amet illum quo vitae </p>
                </div>
            </div>
        </div>
    </div> 
@endsection
