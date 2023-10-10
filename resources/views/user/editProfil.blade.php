@extends('user.masterUser')
@section('user')
    <section>
        <div class="container">
            <div class="navbar mb-5">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <a href="{{ url('/user/akunsaya') }}">
                        <i class="fa-solid fa-left-long mx-3"></i>
                    </a>
                    <a href="{{ url('/user/akunsaya') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 mt-4 p-1 rounded-full ring-2 ring-[#D981B4] dark:ring-[#D981B4]" src="{{ asset('kader/foto/helmi.jpg') }}" alt="#"/>
                    <div class="flex mt-1 space-x-1 text-[#D981B4]">
                        <a href="#">
                            <h1 class="font-semibold">Ubah Gambar</h1>
                        </a>
                        <a href="#">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
                <h1 class="font-bold text-center mb-3 text-white">Edit Profil</h1>
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-white">Email</label>
                    <div class="flex items-center">
                        <input type="email" id="default-input"
                            class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-white">Nomor Telepon</label>
                    <div class="flex items-center">
                        <input type="number" id="default-input"
                            class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" placeholder="Nomor Telepon">
                    </div>
                </div>
                <div class=" mx-3">
                    <button type="button"
                        class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan</button>
                </div>
            </div>
            
        </div>
    </section>
@endsection
