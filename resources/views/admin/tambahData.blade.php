@extends('admin.master')
@section('master')
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

    {{-- form of "tambah data bayi" --}}
    <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
        <div role="tabpanel" id="panel-1" class="tab-panel ">
            {{-- heading teks card --}}
            <h1 class="font-bold text-center mb-3 text-white">Data Bayi</h1>

            <form id="bayi" class="bayi" method="POST" action="{{ route('dataBayi.store') }}" enctype="multipart/form-data">
                @csrf
                {{-- input for "nik bayi" type text --}}
                <div class="mb-3 mx-3">
                    <label for="NIkBayi" class="block mb-2 text-sm font-medium text-white">NIK Bayi</label>
                    <div class="">
                        <input type="number" id="NIkBayi"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="NIK Bayi" name="nikBayi" >
                    </div>
                </div>

                {{-- input for "nama bayi" type text --}}
                <div class="mb-3 mx-3">
                    <label for="namaBayi" class="block mb-2 text-sm font-medium text-white">Nama Bayi</label>
                    <div class="">
                        <input type="text" id="namaBayi"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="Nama Bayi" name="namaBayi" >
                    </div>
                </div>

                {{-- input for "tanggal lahir" type date --}}
                <div class="mb-3 mx-3">
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Lahir</label>
                    <div class="">
                        <input type="date" id="tanggal"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="Tanggal Lahir" name="tglLahirBayi" >
                    </div>
                </div>

                {{-- input for "tempat lahir" type text --}}
                <div class="mb-3 mx-3">
                    <label for="tempat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TempatLahir</label>
                    <div class="">
                        <input type="text" id="tempat"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="Tempat Lahir" name="tmptLahirBayi" >
                    </div>
                </div>

                <div class="mb-3 mx-3">
                    <label for="jenisKelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Kelamin</label>
                    <div class="">
                        <select id="jenisKelamin"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            name="jenisKelamin"  >
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki Laki </option>
                            <option value="Perempuan">Perempuan </option>
                        </select>
                    </div>
                </div>

                {{-- input for "nama ibu" type text --}}
                <div class="mb-3 mx-3">
                    <label for="dataIbu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Ibu</label>
                    <div class="">
                        <select
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            name="ibu_id" id="dataIbu" >
                            <option value="">Pilih Orang Tua</option>
                            @foreach ($dataIbu as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- button to save baby data --}}
                <div class=" mx-3">
                    <button type="submit"
                        class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan
                        data bayi</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#bayi').validate({
            rules: {
                'nikBayi': {
                    required: true,
                },
                'namaBayi': {
                    required: true,
                },
                'tglLahirBayi': {
                    required: true,
                },
                'tmptLahirBayi': {
                    required: true,
                },
              
                'jenisKelamin': {
                    required: true,
                },
                'ibu_id': {
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
