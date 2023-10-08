<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <style>
    .indicator{
      transition: left .4s;
    }
    </style>
</head>

<body class="">
    <section>
        <div class="container">
            <div class="navbar mb-5">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <a href="{{ url('/user/akun') }}">
                        <i class="fa-solid fa-left-long mx-3"></i>
                    </a>
                    <a href="{{ url('/user/akun') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
            <div role="tablist" aria-label="tabs"
                class="relative w-max mx-auto h-10 grid grid-cols-2 items-center px-[3px] rounded-full bg-[#FFB0DE] overflow-hidden shadow-2xl shadow-900/20 transition">
                <div class="absolute indicator h-10 my- top-0 bottom-0 left-0 rounded-full bg-[#D981B4] shadow-md">
                </div>
                <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Ibu</span>
                </button>
                <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Ayah</span>
                </button>
            </div>
            <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
                <div role="tabpanel" id="panel-1" class="tab-panel ">
                    <h1 class="font-bold text-center mb-3 text-white">Kesehatan Ibu</h1>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-white">Tinggi Badan</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">cm</button>
                        </div>
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                            <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">kg</button>
                        </div>
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Penyakit</label>
                            <div class="flex items-center">
                                <input type="text" id="default-input"
                                    class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">+</button>
                            </div>
                    </div>
                    <div class=" mx-3">
                        <button type="button"
                            class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan</button>
                    </div>
    
                </div>
                <div role="tabpanel" id="panel-2" class=" tab-panel invisible absolute w-full my-5 top-0">
                    <h1 class="font-bold text-center mb-3 text-white">Kesehatan Ayah</h1>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi Badan</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                            <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">cm</button>
                        </div>
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                            <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">kg</button>
                        </div>
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Riwayat Penyakit</label>
                            <div class="flex items-center">
                                <input type="text" id="default-input"
                                    class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">+</button>
                            </div>
                    </div>
                    <div class=" mx-3">
                        <button type="button"
                            class="w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan</button>
                    </div>
    
                </div>
            </div>
            
        </div>
    </section>
    <script src="{{asset('user/tab-content.js')}}"></script>
</body>

</html>

