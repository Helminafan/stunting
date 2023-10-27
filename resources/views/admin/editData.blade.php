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
            <h1 class="font-bold text-center mb-3 text-white">Edit Data Bayi</h1>

            <form class="bayi" method="POST" action="{{ route('kesehatanBayi.update',$data->id) }}" enctype="multipart/form-data">
                @csrf
                {{-- input for "nik bayi" type text --}}
                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-white">NIK Bayi</label>
                    <div class="flex items-center">
                        <input type="number" id="default-input"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="NIK Bayi" name="nikBayi" value="{{$data->nikBayi}}" required>
                    </div>
                </div>

                {{-- input for "nama bayi" type text --}}
                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-white">Nama Bayi</label>
                    <div class="flex items-center">
                        <input type="text" id="default-input"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="Nama Bayi" name="namaBayi" value="{{$data->namaBayi}}" required>
                    </div>
                </div>

                {{-- input for "tanggal lahir" type date --}}
                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Lahir</label>
                    <div class="flex items-center">
                        <input type="date" value="{{$data->tglLahirBayi}}" id="default-input"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="Tanggal Lahir" name="tglLahirBayi" required>
                    </div>
                </div>

                {{-- input for "tempat lahir" type text --}}
                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TempatLahir</label>
                    <div class="flex items-center">
                        <input type="text" value="{{$data->tmptLahirBayi}}" id="default-input"
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            placeholder="Tempat Lahir" name="tmptLahirBayi" required>
                    </div>
                </div>

                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Kelamin</label>
                    <div class="flex items-center">
                        <select
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            name="jenisKelamin" id="dataIbu" required>
                            <option value="null">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki"  {{ $data->jenisKelamin == "Laki-Laki" ? 'selected' : '' }}>Laki Laki </option>
                            <option value="Perempuan" {{ $data->jenisKelamin == "Perempuan" ? 'selected' : '' }}>Perempuan </option>
                        </select>
                    </div>
                </div>

                {{-- input for "nama ibu" type text --}}
                <div class="mb-3 mx-3">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Ibu</label>
                    <div class="flex items-center">
                        <select
                            class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                            name="ibu_id" id="dataIbu" required>
                            <option value="">Pilih Orang Tua</option>
                            @foreach ($dataIbu as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $data->ibu_id ? 'selected' : '' }}>
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
