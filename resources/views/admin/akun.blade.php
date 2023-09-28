@extends('admin.master')
@section('master')
    <div class="h-28 bg-[#D981B4] rounded-b-[60px]">
        <div class="flex justify-between items-center mx-6 pt-4">
            <div class="text-white">
                <h1 class="font-medium text-lg">Stunting</h1>
            </div>
            <div class="text-white">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg w-80 mx-auto mb-5 overflow-hidden  mt-6">
        <div id="akun"></div>
    </div>
  
    {{-- Data Anak --}}
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="bg-white rounded-3xl shadow-xl">
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
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="bg-white rounded-3xl shadow-xl">
        <div class="flex items-center px-5 py-3">
            <div class="bg-white bg-cover w-12 h-12 mr-2 rounded-[500px]"
                style="background-image: url({{ asset('kader/foto/settings.png') }});"></div>
            <div>
                <h2 class="font-bold text-md">Pengaturan</h2>
            </div>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="bg-white rounded-3xl shadow-xl">
        <div class="flex items-center px-5 py-3">
            <div class="bg-white bg-cover w-12 h-12 mr-2 rounded-[500px]"
                style="background-image: url({{ asset('kader/foto/info.png') }});"></div>
            <div>
                <h2 class="font-bold text-md">Tentang</h2>
            </div>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="bg-red-500 rounded-3xl shadow-xl">
        <div class="flex items-center px-5 py-3">
            <div class="bg-red-500 bg-cover w-12 h-12 mr-2 rounded-[500px]"
                style="background-image: url({{ asset('kader/foto/logout.png') }});"></div>
            <div>
                <h1 class="font-bold text-md text-white">Keluar</h1>
            </div>
        </div>
      </div>
    </div>

@endsection
