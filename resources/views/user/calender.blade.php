@extends('user.master')
@section('user')
    <div class="h-28 bg-[#D981B4] top-0 w-full absolute rounded-b-[60px]"></div>
    <div class="calendar relative">
        <div class="month mb-4 bg-white mt-5 rounded-xl py-1 flex items-center justify-between mx-6 ">
            <button class="w-3 prev px-4">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <h2 class="date font-semibold">Agustus 2023</h2>
            <button class="w-3 next pr-7">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="tanggal bg-white mx-5 mb-5 rounded-lg py-2">
            <div class="grid grid-cols-7 gap-2 mx-3 text-center">
                <div class="text-[12px]">Minggu</div>
                <div class="text-[12px]">Senin</div>
                <div class="text-[12px]">Selasa</div>
                <div class="text-[12px]">Rabu</div>
                <div class="text-[12px]">Kamis</div>
                <div class="text-[12px]">Jumat</div>
                <div class="text-[12px]">Sabtu</div>
            </div>
            <div class="grid grid-cols-7 gap-2 mx-3 text-center mt-2 days">
                {{-- <div class="text-[12px]">30</div>
                <div class="text-[12px]">1</div>
                <div class="text-[12px]">2</div>
                <div class="text-[12px]">3</div>
                <div class="text-[12px]">4</div>
                <div class="text-[12px]">5</div>
                <div class="text-[12px]">6</div>
                <div class="text-[12px]">7</div>
                <div class="text-[12px]">8</div>
                <div class="text-[12px]">9</div>
                <div class="text-[12px]">10</div>
                <div class="text-[12px]">11</div>
                <div class="text-[12px]">12</div>
                <div class="text-[12px]">13</div>
                <div class="text-[12px]">14</div>
                <div class="text-[12px] today bg-red-500 text-white rounded-full">15</div>
                <div class="text-[12px]">16</div>
                <div class="text-[12px]">17</div>
                <div class="text-[12px]">18</div>
                <div class="text-[12px]">19</div>
                <div class="text-[12px]">20</div>
                <div class="text-[12px]">21</div>
                <div class="text-[12px]">22</div>
                <div class="text-[12px]">23</div>
                <div class="text-[12px]">24</div>
                <div class="text-[12px]">25</div>
                <div class="text-[12px]">26</div>
                <div class="text-[12px]">27</div>
                <div class="text-[12px]">28</div>
                <div class="text-[12px]">29</div>
                <div class="text-[12px]">30</div>
                <div class="text-[12px]">1</div>
                <div class="text-[12px]">2</div>
                <div class="text-[12px]">3</div>
                <div class="text-[12px]">4</div> --}}
            </div>
        </div>
        <hr class="border-black mb-5">
        <div class="detail mx-6">
            <div class="card mb-5">
                <div class="header rounded-t-lg bg-[#D981B4] text-white text-center">
                    <h1>Detail jadwal</h1>
                </div>
                <div class="bg-white py-2 rounded-b-lg">
                    <div class="row mx-4 flex text-[12px]">
                        <p class="w-20">Kegiatan</p>
                        <p class="w-2">:</p>
                        <p>Penimbangan & Imunisasi</p>
                    </div>
                    <div class="row mx-4 flex text-[12px]">
                        <p class="w-20">Hari/Tanggal</p>
                        <p class="w-2">:</p>
                        <p>21 September 2023</p>
                    </div>
                    <div class="row mx-4 flex text-[12px]">
                        <p class="w-20">Waktu</p>
                        <p class="w-2">:</p>
                        <p>09.00 WIB</p>
                    </div>
                    <div class="row mx-4 flex text-[12px]">
                        <p class="w-20">Tempat</p>
                        <p class="w-2">:</p>
                        <p>Posyandu Mawar 5</p>
                    </div>
                    <div class="row mx-4 flex text-[12px]">
                        <p class="w-20">Alamat</p>
                        <p class="w-2">:</p>
                        <p>Dusun Sumberwangi RT 01 RW 20 Desa Wonosobo</p>
                    </div>
                </div>
            </div>
            <div class="card mb-32">
                <div class="header rounded-t-lg bg-[#D981B4] text-white text-center">
                    <h1>Status Kehadiran</h1>
                </div>
                <div class="bg-white py-3 rounded-b-lg">
                    <p class="mx-4 mb-3 text-[12px]">Apakah anda akan hadir untuk program posyandu tersebut ?</p>
                    <div class="flex mb-3 mx-auto justify-center">
                        <div class="flex w-1/2 items-center pl-4 border  rounded dark:border-gray-700">
                            <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
                        </div>
                        <div class="flex w-1/2 items-center pl-4 border  rounded dark:border-gray-700">
                            <input checked id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-checkbox-2" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Iya</label>
                        </div>
                    </div>
                    <div class="flex">
                        <input placeholder="Keterangan" type="text" id="small-input" class="block w-full ml-4 p-2 text-gray-900  border-t-transparent border-l-transparent border-r-transparent bg-none sm:text-xs focus:none focus:none ">
                        <div class="text-green-500 text-[30px] mr-4">
                            <button> <i class="fa-solid fa-circle-check" ></i></button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('user/calendar/calendar.js')}}"></script>
@endpush