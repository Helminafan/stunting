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
                <form id="cal" action="{{ route('storeKalender') }}" method="POST">
                    @csrf
                    <div class="mb-3 mx-3">
                        <label for="kegiatan" class="block mb-2  text-white text-sm font-medium">Kegiatan</label>
                        <input type="text" name="kegiatan" id="kegiatan"
                            class=" text-gray-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="tanggal" class="block mb-2  text-white text-sm font-medium ">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal"
                            class=" text-gray-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="waktu"class="block mb-2  text-white text-sm font-medium ">Waktu
                        </label>
                        <input type="time" name="waktu" id="waktu"
                            class=" text-gray-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="tempat"class="block mb-2  text-white text-sm font-medium ">Tempat
                        </label>
                        <input type="text" name="tempat" id="tempat"
                            class=" text-gray-700 text-sm rounded-lg w-full">
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="alamat"class="block mb-2  text-white text-sm font-medium ">Alamat
                        </label>
                        <textarea name="alamat" id="alamat" class=" text-gray-700 text-sm rounded-lg w-full"></textarea>
                        {{-- <input type="text" id="alamat" class=""> --}}
                    </div>
                    <div class=" mx-3">
                        <button type="submit"
                            class=" w-full text-white bg-[#865BF4] hover:bg-[#7D4BFB] focus:outline-none focus:ring-4 focus:ring-[#D981B4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-green-800">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $('#cal').validate({
            rules: {
                'kegiatan': {
                    required: true,
                },
                'tanggal': {
                    required: true,
                },
                'waktu': {
                    required: true,
                },
                'tempat': {
                    required: true,
                },
                'alamat': {
                    required: true,
                },
            },
            // messages: {
            //     'nik[]': {
            //         required: "No KK tidak boleh kosong",
            //         number: "data harus berupa angka",
            //         minlength: "inputan harus berjumlah 16",

            //     },
            //     'nama_warga[]': {
            //         required: "nama lengkap tidak boleh kosong",
            //     },
            //     'alamat[]': {
            //         required: "Alamat tidak boleh kosong",
            //     },
            //     'no_hp[]': {
            //         required: "No HP tidak boleh kosong",
            //         number: "data harus berupa angka",
            //     },
            //     'foto_ktp[]': {
            //         required: "File Harus Ditambahkan",
            //     },
            // },
        });
    </script>
@endpush
