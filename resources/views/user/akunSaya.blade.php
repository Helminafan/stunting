@extends('user.master')

@section('user')

<section>
    <div class="container">
        <div class="navbar mb-5">
            <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                <i class="fa-solid fa-left-long mx-3"></i>
                <a href="{{ url('/user/akun') }}">
                    <h1 class="font-semibold">Kembali</h1>
                </a>
            </div>
        </div>
        <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-white">Nama Lengkap</label>
                    <div class="flex items-center">
                        <input type="text" id="default-input"
                            class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" placeholder="Sinta Dewi">
                    </div>
                </div>
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <div class="flex items-center">
                        <input type="text" id="default-input"
                            class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" placeholder="sintadewi@email.com">
                    </div>
                </div>
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Handphone</label>
                    <div class="flex items-center">
                        <input type="text" id="default-input"
                            class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" placeholder="081234567890">
                    </div>
                </div>
    </div>
    <div class="mt-4 py-5 rounded-xl mx-8">
        <div class=" mx-3">
            <a href="">
                <button type="button"
                class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Ganti Kontak</button>
            </a>
        </div>
        <div class=" mx-3">
            <a href="">
                <button type="button"
                class=" w-full text-white bg-[#D981B4] hover:bg-[#D981B4] focus:outline-none focus:ring-4 focus:ring-[#D981B4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#D981B4] dark:hover:bg-[#D981B4]dark:focus:ring-[#D981B4]">Ganti Password</button>
            </a>
        </div>
    </div>
</section>
@endsection