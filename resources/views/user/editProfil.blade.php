@extends('user.masterUser')
@section('user')
    <section>
        <div class="container">
            <div class="navbar mb-5">
                <div class="bg-green-500 items-center px-4 py-3 text-white flex">
                    <i class="fa-solid fa-left-long mx-3"></i>
                    <h1 class="font-semibold">Back</h1>
                </div>
            </div>
            <div class="fotoProfil mx-auto">
                <div class="bg-red-500 bg-cover w-20 h-20 mx-auto my-3 rounded-[500px]"
                    style="background-image: url({{ asset('kader/foto/helmi.jpg') }});">
                </div>
                <a href=""> <p class="my-5 text-center text-green-400 font-semibold">Edit Profil <i class="fa-solid fa-pen-to-square"></i></p></a>
               
            </div>
            <div class="bg-green-200 mx-5 rounded-xl py-5">
                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900">Password lama</label>
                    <input type="text" id="default-input" class=" text-green-700 text-sm rounded-lg w-full">
                </div>
                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
                    <input type="text" id="default-input" class=" text-green-700 text-sm rounded-lg w-full">
                </div>
                <div class="mb-3 mx-3">
                    <label for="default-input"class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi
                        Password</label>
                    <input type="text" id="default-input" class=" text-green-700 text-sm rounded-lg w-full">
                </div>
                <div class=" mx-3">
                    <button type="button"
                        class=" w-full text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                </div>

            </div>

        </div>
    </section>
@endsection
