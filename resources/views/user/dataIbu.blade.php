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
</head>

<body class="">
    <section>
        <div class="container">
            <div class="navbar mb-5">
                <div class="bg-[#D981B4]  px-4 py-3 text-white text-center ">
                    <h1 class="font-semibold">Data Orang Tua</h1>
                </div>
            </div>
            <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
                <div role="tabpanel" id="panel-1" class="tab-panel ">
                    <h1 class="font-bold text-center mb-3 text-white">Data Ibu</h1>
                    <form action="{{route('storeIbu')}}" method="POST">
                        @csrf
                        <div class="mb-3 mx-3">
                            <label for="default-input"
                                class="block mb-2 text-sm font-medium text-white">NIK</label>
                            <div class="flex items-center">
                                <input name="nik" type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                        <div class="mb-3 mx-3">
                            <label for="default-input"
                                class="block mb-2 text-sm font-medium text-white">Nama Lengkap</label>
                            <div class="flex items-center">
                                <input name="nama" type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                        <div class="mb-3 mx-3">
                            <label for="default-input"
                                class="block mb-2 text-sm font-medium text-white">Tanggal
                                Lahir</label>
                            <div class="flex items-center">
                                <input name="tanggal_lahir" type="date" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                        <div class="mb-3 mx-3">
                            <label for="default-input"
                                class="block mb-2 text-sm font-medium text-white">Tempat Lahir
                            </label>
                            <input name="tempat_lahir" type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                       
                        <div class="mb-3 mx-3">
                            <label for="default-input"
                                class="block mb-2 text-sm font-medium text-white">Agama</label>
                            <input name="agama" type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                    
                        <div class=" mx-3">
                            <button type="submit"
                                class=" w-full text-white bg-[#865BF4] hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                        </div>
                    </form>
                </div>
                {{-- <div role="tabpanel" id="panel-2" class=" tab-panel invisible absolute w-full my-5 top-0">
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
                            class="block mb-2 text-sm font-medium text-gray-900">Riwayat
                            Penyakit</label>
                        <input type="text" id="default-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class=" mx-3">
                        <button type="button"
                            class=" w-full text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Simpan</button>
                    </div>

                </div> --}}
            </div>

        </div>
    </section>
</body>

</html>
