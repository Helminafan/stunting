@extends('user.master')

@section('user')

<section>
    <div class="container">
        <div class="navbar mb-5">
            <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                <a href="{{ url('/user/akun') }}">
                    <i class="fa-solid fa-left-long mx-3"></i>
                </a>
                <a href="{{ url('/user/akun') }}">
                    <h1 class="font-semibold">Kembali</h1>
                </a>
            </div>
        </div>
        <div id="formContainer" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center hidden">
            <form class="bg-white p-8 rounded"  id="formInputGambar" action="{{route('update_foto',Auth::user()->id)}}" enctype="multipart/form-data" method="POST">
               @csrf
                    <label for="inputGambar">Pilih Gambar:</label>
                    <input type="file" id="inputGambar" class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" name="inputGambar">
                    <button type="submit" class=" text-white bg-[#D981B4] hover:bg-[#D981B4] focus:outline-none focus:ring-4 focus:ring-[#D981B4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#D981B4] dark:hover:bg-[#D981B4]dark:focus:ring-[#D981B4]">Simpan Gambar</button>
                
                <button id="closeForm" type="button" class="absolute top-0 right-0 m-4 text-white hover:text-gray-800">×</button>
            </form>
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 mt-4 p-1 rounded-full ring-2 ring-[#D981B4] dark:ring-[#D981B4]" src="{{ asset('storage/'.Auth::user()->profile_photo_path) }}" alt="#"/>
                <div class=" mt-1  text-[#D981B4]">
                    <button id="btnUbahGambar" class="flex space-x-1 items-center" >
                        <h1 class="font-semibold">Ubah Gambar</h1>
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class=" card bg-[#D981B4] mt-1 py-5 rounded-xl mx-8">
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-white">Nama Lengkap</label>
                    <div class="flex items-center">
                        <input type="text" id="default-input"
                           readonly class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" value="{{Auth::user()->dataIbu->nama}}">
                    </div>
                </div>
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-white dark:text-white">Email</label>
                    <div class="flex items-center">
                        <input type="text" id="default-input"
                           readonly class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" value="{{Auth::user()->email}}">
                    </div>
                </div>
                <div class="mb-3 mx-3">
                    <label for="default-input"
                        class="block mb-2 text-sm font-medium text-white dark:text-white">Nomor Handphone</label>
                    <div class="flex items-center">
                        <input type="text" id="default-input"
                           readonly class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]" value="{{Auth::user()->telp}}">
                    </div>
                </div>
    </div>
    <div class="mt-4 py-5 rounded-xl mx-8">
        <div class=" mx-3">
            <a href="{{ url('/user/akunsaya/editprofil') }}">
                <button type="button"
                class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Ganti Kontak</button>
            </a>
        </div>
        <div class=" mx-3 mb-20">
            <a href="{{ url('/user/akunsaya/gantipass',Auth::user()->id) }}">
                <button type="button"
                class=" w-full text-white bg-[#D981B4] hover:bg-[#D981B4] focus:outline-none focus:ring-4 focus:ring-[#D981B4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#D981B4] dark:hover:bg-[#D981B4]dark:focus:ring-[#D981B4]">Ganti Password</button>
            </a>
        </div>
    </div>
</section>
@endsection
@push('js')
<script>
    document.getElementById('btnUbahGambar').addEventListener('click', function () {
        var formContainer = document.getElementById('formContainer');

        // Toggle class untuk menampilkan/menyembunyikan formulir
        formContainer.classList.toggle('hidden');
    });

    document.getElementById('closeForm').addEventListener('click', function () {
        var formContainer = document.getElementById('formContainer');

        // Menyembunyikan formulir
        formContainer.classList.add('hidden');
    });
    document.getElementById('formContainer').addEventListener('click', function (event) {
        if (event.target.id === 'formContainer') {
            var formContainer = document.getElementById('formContainer');
            
            // Menyembunyikan formulir
            formContainer.classList.add('hidden');
        }
    });
</script>
<script>
    $('#formInputGambar').validate({
        rules: {
            'inputGambar': {
                required: true,
            },
           
        },
       
    });
</script>
@endpush