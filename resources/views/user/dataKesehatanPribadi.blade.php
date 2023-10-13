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
                <div class="bg-green-500 items-center px-4 py-3 text-white flex">
                    <i class="fa-solid fa-left-long mx-3"></i>
                    <h1 class="font-semibold">Back</h1>
                </div>
            </div>
            <div role="tablist" aria-label="tabs"
                class="relative w-max mx-auto h-10 grid grid-cols-2 items-center px-[3px] rounded-full bg-green-500 overflow-hidden shadow-2xl shadow-900/20 transition">
                <div class="absolute indicator h-10 my- top-0 bottom-0 left-0 rounded-full bg-green-700 shadow-md">
                </div>
                <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Pribadi</span>
                </button>
                <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Pasangan</span>
                </button>
            </div>
            <div class="relative card bg-green-200 mt-4 py-5 rounded-xl mx-8">
                <div role="tabpanel" id="panel-1" class="tab-panel ">
                    <h1 class="font-bold text-center mb-3">Kesehatan Pribadi</h1>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Tinggi</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <h1>cm</h1>
                        </div>
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Berat Badan</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <h1>kg</h1>
                        </div>
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Apakah Anda
                            Merokok?</label>
                        <input type="text" id="default-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Riwayat Penyakit</label>
                        <input type="text" id="default-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class=" mx-3">
                        <button type="button"
                            class=" w-full text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                    </div>
    
                </div>
                <div role="tabpanel" id="panel-2" class=" tab-panel invisible absolute w-full my-5 top-0">
                    <h1 class="font-bold text-center mb-3">Kesehatan Pasangan</h1>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Tinggi</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <h1>cm</h1>
                        </div>
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Berat Badan</label>
                        <div class="flex items-center">
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <h1>kg</h1>
                        </div>
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Apakah Anda
                            Merokok?</label>
                        <input type="text" id="default-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    
    
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input"
                            class="block mb-2 text-sm font-medium text-gray-900">Riwayat Penyakit</label>
                        <input type="text" id="default-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class=" mx-3">
                        <button type="button"
                            class=" w-full text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                    </div>
    
                </div>
            </div>
            
        </div>
    </section>
    <script src="{{asset('user/tab-content.js')}}"></script>
</body>

</html>
