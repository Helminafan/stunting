@extends('admin.master')
@section('master')
<div class="h-36 bg-[#D981B4] rounded-b-[60px] relative">
    <div class="flex justify-between items-center mx-6 pt-4">
        <div class="text-white">
            <h1 class="font-bold text-lg">Nosting</h1>
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
    <a href="{{ url('/kader/akunkader') }}">
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-user-nurse w-7"></i>
            <h1 class="grow">Akun saya</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="{{ url('/kader/tambahArtikel') }}">
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-newspaper w-7"></i>
            <h1 class="grow">Artikel</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="{{ url('/kader/tentang') }}">
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-circle-info w-7"></i>
            <h1 class="grow">Tentang</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

    <a href="{{ url('/kader/kepriv') }}">
        <div class="flex items-center py-2 justify-between border-b-2 text-[#D981B4] px-6">
            <i class="fa-solid fa-key w-7"></i>
            <h1 class="grow">Ketentuan & Privasi</h1>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </a>

</div>
<a href="{{ route('admin.logout') }}">
    <div class="bg-[#865BF4] mx-5 text-center rounded-xl py-2 text-white">
        <h1 class="mx-auto ">Keluar</h1>
    </div>
</a>
@endsection
