@extends('admin.master')
@section('master')
<body>
    <section>
        <div class="container">

            {{-- back button --}}
            <div class="navbar mb-5">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <a href="{{ url('/kader/akun') }}">
                        <i class="fa-solid fa-left-long mx-3"></i>
                    </a>
                    <a href="{{ url('/kader/akun') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
            <div role="tabpanel" id="panel-1" class="tab-panel ">
                {{-- heading teks card --}}
                <h1 class="font-bold text-center mb-3 text-white">Buat Artikel</h1>
    
                <form id="artikel" class="artikel" method="POST" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{-- input for "judul artikel" type text --}}
                    <div class="mb-3 mx-3">
                        <label for="namaBayi" class="block mb-2 text-sm font-medium text-white">Judul Artikel</label>
                        <div class="">
                            <input type="text" id="namaBayi"
                                class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                placeholder="Judul Artikel" name="judul" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 mx-3">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-grey text-white">Isi Artikel</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-grey bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#865BF4] focus:border-[#865BF4] dark:bg-white dark:white dark:placeholder-gray-400 dark:text-grey dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="Tulis Artikel" name="isi" required></textarea>
                    </div>

                    <div class="mb-3 mx-3">
                        <label for="image" class="block mb-2 text-sm font-medium text-white">Thumbnail Artikel</label>
                        <div class="">
                            <input type="file" id="image"
                                class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                placeholder="Thumbnail Artikel" name="image" required>
                        </div>
                    </div>
                    
                    <br>
                    {{-- button to save baby data --}}
                    <div class=" mx-3">
                        <button type="submit"
                            class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan Artikel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>