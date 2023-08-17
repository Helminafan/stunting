@extends('admin.master')
@section('master')
    <div class="h-28 bg-green-500 rounded-b-[60px]">
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
        <div id="dataAnak"></div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="flex flex-col">
            <input type="text" id="find" class="border rounded-lg border-gray-400 hover:border-black focus:border-black p-[8px_10px]" name="email" placeholder="Cari..." required > 
        </div>
    </div>
  
    <div class="text-gray-600  mx-6 mb-5">
        <h1>Data Anak</h1>
        <hr class="border-gray-500 ">
    </div>
    {{-- Data Anak --}}
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="bg-white rounded-3xl shadow-xl">
        <div class="flex items-center px-5 py-3">
            <div class="bg-red-500 bg-cover w-12 h-12 mr-2 rounded-[500px]"
                style="background-image: url({{ asset('kader/foto/helmi.jpg') }});"></div>
            <div>
                <h2 class="font-bold text-xs">Helmi Napan</h2>
                <h2 class="font-extralight text-xs">Biodata bayi yang bersangkutan</h2>
            </div>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="bg-white rounded-3xl shadow-xl">
        <div class="flex items-center px-5 py-3">
            <div class="bg-red-500 bg-cover w-12 h-12 mr-2 rounded-[500px]"
                style="background-image: url({{ asset('kader/foto/helmi.jpg') }});"></div>
            <div>
                <h2 class="font-bold text-xs">Napan Helmi</h2>
                <h2 class="font-extralight text-xs">Biodata bayi yang bersangkutan</h2>
            </div>
        </div>
      </div>
    </div>
    <button class="rounded-full w-14 h-14 flex fixed bottom-16 right-5 bg-green-600 text-[35px]">
        <div class="mx-auto text-white"> <i class="fa-solid fa-plus" ></i></div>
    </button>
@endsection