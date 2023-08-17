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
        <div id="tambahData"></div>
    </div>
    <div class="text-gray-600  mx-6 mb-5">
        <h1>Data</h1>
        <hr class="border-gray-500 ">
    </div> 
    {{-- form --}}
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
            Nama Bayi
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Nama Lengkap">
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
            Umur Bayi
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Umur">
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
            Tanggal Lahir Bayi
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date" placeholder="Tanggal">
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
            Orangtua Bayi
        </label>
        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="" id="">
            <option value="">Pilih Orang Tua</option>
            <option value="">Fulan</option>
        </select>
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
            Tinggi Badan
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Tinggi Badan Bayi">
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
            Berat Badan
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Berat Badan Bayi">
        <button class="w-full bg-green-500 hover:bg-green-800 text-white font-semibold rounded-md rounded  shadow py-2 px-4 mb-10">
            Tambah Data
        </button>
    </div>
@endsection
