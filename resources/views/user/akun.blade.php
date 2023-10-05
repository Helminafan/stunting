@extends('user.master')

@section('user')
    <div class="h-36 bg-[#D981B4] rounded-b-[60px] relative">
        <div class="flex justify-between items-center mx-6 pt-4">
            <div class="text-white">
                <h1 class="font-medium text-lg">Stunting</h1>
            </div>
            <div class="text-white">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-xl absolute -bottom-7 w-[250px] left-1/2 -translate-x-1/2">
            <div class="flex items-center px-5 py-3">
                <div class="bg-red-500 bg-cover w-12 h-12 mr-2 rounded-[500px]"
                    style="background-image: url({{ asset('kader/foto/helmi.jpg') }});"></div>
                <div>
                    <h2 class="font-bold text-xs">Lusi Andeeni</h2>
                    <h2 class="font-extralight text-xs">Posyandu mawar 5</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white mb-5 mt-20 mx-6 rounded-xl">
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-circle-user w-7"></i>
            <h1 class="grow">Akun saya</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-file w-7"></i>
            <h1 class="grow">Detail Pribadi</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-notes-medical w-7"></i>
            <h1 class="grow">Data Kesehahatan Orang Tua</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-bell w-7"></i>
            <h1 class="grow">Notifikasi</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-unlock-keyhole w-7"></i>
            <h1 class="grow">Ketentuan & Privasi</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </div>
    <div class="bg-red-500 mx-5 text-center rounded-xl py-2 text-white">
        <h1 class="mx-auto ">log out</h1>
    </div>
@endsection
