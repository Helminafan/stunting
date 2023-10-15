<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kesehatan Anak</title>
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
<body>
    <section>
        <div class="container">

            {{-- back button --}}
            <div class="navbar mb-5">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <a href="{{ url('/kader/dataAnak') }}">
                        <i class="fa-solid fa-left-long mx-3"></i>
                    </a>
                    <a href="{{ url('/kader/dataAnak') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>

            {{-- tab navigation --}}
            <div role="tablist" aria-label="tabs"
                class="relative w-max mx-auto h-10 grid grid-cols-2 items-center px-[3px] rounded-full bg-[#FFB0DE] overflow-hidden shadow-2xl shadow-900/20 transition">
                <div class="absolute indicator h-10 my- top-0 bottom-0 left-0 rounded-full bg-[#D981B4] shadow-md">
                </div>
                <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Data</span>
                </button>
                <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Grafik</span>
                </button>
            </div>

            {{-- card  --}}
            <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
                <div role="tabpanel" id="panel-1" class="tab-panel ">
                    {{-- tab name "Hasil Penimbangan" --}}
                    <h1 class="font-bold text-center mb-3 text-white">Hasil Penimbangan</h1>

                    {{-- input for "tinggi badan" type number --}}
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Tinggi Badan</label>
                        <div class="flex items-center">
                            <input type="number" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">cm</button>
                        </div>
                    </div>
                    
                    {{-- input for  "berat badan" type number --}}
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Berat Badan</label>
                        <div class="flex items-center">
                            <input type="number" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">kg</button>
                        </div>
                    </div>

                    {{-- deviden line --}}
                    <hr class="w-48 h-1 mx-auto my-4 bg-white border-0 rounded md:my-10 dark:bg-white">

                    {{-- textarea for "keterangan" --}}
                    <div class="mb-3 mx-3">
                        <label for="message" class="block mb-2 text-sm font-medium text-grey dark:text-white">Keterangan</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-grey bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#865BF4] focus:border-[#865BF4] dark:bg-white dark:white dark:placeholder-gray-400 dark:text-grey dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" placeholder="Uraian perkembangan motorik anak"></textarea>
                    </div>

                    {{-- save button for update baby data --}}
                    <div class=" mx-3">
                        <button type="button"
                            class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan</button>
                    </div>
    
                </div>
                <div role="tabpanel" id="panel-2" class=" tab-panel invisible absolute w-full my-5 top-0">
                    {{-- tab name "Grafik Perkembangan" --}}
                    <h1 class="font-bold text-center mb-3 text-white">Grafik Perkembangan</h1>

                    {{-- identity --}}
                    {{-- name --}}
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Nama</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                        </div>
                    </div>

                    {{-- date of birth --}}
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Tanggal Lahir</label>
                        <div class="flex items-center">
                            <input type="date" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                        </div>
                    </div>

                    {{-- age --}}
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Usia</label>
                        <div class="flex items-center">
                            <input type="number" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold">Bln</button>
                        </div>
                    </div>

                    {{-- gender --}}
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Kelamin</label>
                        <div class="flex items-center">
                            <input type="tect" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                        </div>
                    </div>

                     {{-- status --}}
                     <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Status</label>
                        <div class="flex items-center">
                            <input type="tect" id="default-input"
                                class="bg-white border border-white text-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <script src="{{asset('user/tab-content.js')}}"></script>
</body>
</html>