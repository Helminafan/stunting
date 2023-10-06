@extends('admin.master')
@section('master')
    <section>
        <div class="container">
            <div class="navbar mb-5">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <i class="fa-solid fa-left-long mx-3"></i>
                    <a href="{{ route('kalender') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
            <div class="bg-[#D981B4] mx-5 rounded-xl py-5 mb-20">
                <h1 class="text-white font-semibold text-xl text-center">Jadwal Posyandu</h1>
                <form action="{{route('storeKalender')}}" method="POST">
                    @csrf
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2  text-white text-sm font-medium">Kegiatan</label>
                        <input type="text" name="kegiatan" id="default-input"
                            class=" text-green-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2  text-white text-sm font-medium ">Tanggal</label>
                        <input type="date" name="tanggal" id="default-input"
                            class=" text-green-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"class="block mb-2  text-white text-sm font-medium ">Waktu
                        </label>
                        <input type="time" name="waktu" id="default-input"
                            class=" text-green-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"class="block mb-2  text-white text-sm font-medium ">Tempat
                        </label>
                        <input type="text" name="tempat" id="default-input"
                            class=" text-green-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"class="block mb-2  text-white text-sm font-medium ">Alamat
                        </label>
                        <textarea  name="alamat" id="" class=" text-green-700 text-sm rounded-lg w-full"></textarea>
                        {{-- <input type="text" id="default-input" class=""> --}}
                    </div>
                    <div class=" mx-3">
                        <button type="submit"
                            class=" w-full text-white bg-[#865BF4] hover:bg-[#7D4BFB] focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-green-800">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
