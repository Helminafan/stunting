@extends('admin.master')
@section('master')
    <div class="h-28 bg-[#D981B4] rounded-b-[60px]">
        <div class="flex justify-between items-center mx-6 pt-4">
            <div class="text-white">
                <h1 class="font-bold text-lg">Nosting</h1>
            </div>
            <div class="text-white">
                <a href="{{route('showBayi.view')}}">
                    <i class="fa-solid fa-pencil"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg w-80 mx-auto mb-5 overflow-hidden  mt-6">
        <div id="dataAnak"></div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="flex flex-col">  
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-grey-900">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-[#D981B4] rounded-lg bg-gray-50 focus:ring-[#D981B4] focus:border-[#D981B4] dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-[#D981B4] dark:focus:border-[#D981B4] mr-2 mb-2" placeholder="Cari data anak" required>
            </div>     
        </div>
    </div>

    <div class="text-gray-600  mx-6 mb-5">
        <h1>Data Anak</h1>
        <hr class="border-gray-500 ">
    </div>

    {{-- Card data Anak --}}
    @foreach ($allDataBayi as $item => $row)
        <a href="{{ route('detailData.edit', $row->id) }}">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <div class="bg-white rounded-3xl shadow-xl">
                    <div class="flex items-center px-5 py-3">
                        <div class="bg-[#D981B4] bg-cover w-12 h-12 mr-2 rounded-[500px]"
                            style="background-image: url({{ asset('kader/foto/baby.png') }});"></div>
                        <div>
                            <h2 class="font-bold text-xs">{{ $row->namaBayi }}</h2>
                            <h2 class="font-extralight text-xs">Ketuk untuk melihat detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach



    <a href="{{ route('tambahData.view') }}"
        class="rounded-full w-14 h-14 flex fixed bottom-16 right-5 bg-[#D981B4] text-[35px]">
        <div class="mx-auto text-white"> <i class="fa-solid fa-plus"></i></div>
    </a>
@endsection
