@extends('admin.master')
@section('master')
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
            <div class="grid grid-cols-7 gap-2 mx-3 text-center mt-2 days ">
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
            <div class="text-[12px] event ">17</div>
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

    </div>
    <div class="bg-[#D981B4] flex text-white mx-3 rounded-t-lg items-center justify-center">
        <div class="event-day text-center mr-2"></div>
        <div class="event-date text-center"></div>
    </div>

    <div class="events bg-white rounded-3xl shadow-xl mx-3">
        <div class="flex items-center justify-between px-5 pt-3">
            <h2 class="font-medium text-slate-600 text-sm">Jadwal Stunting</h2>
            <h2 class="font-medium text-slate-600 text-sm">08-08-2023</h2>
        </div>
        <h2 class="font-medium px-5  text-slate-600 pb-4 text-xs">Jadwal Stunting akan dilaksanakan di tempat antah berantah
            pada jam
            10.00 wib</h2>
    </div>
    <a href="{{ route('tambahKalender') }}">
        <div class="rounded-full w-14 h-14 flex fixed bottom-16 right-5 bg-[#D981B4] text-[35px]">
            <div class="mx-auto text-white"> <i class="fa-solid fa-plus"></i></div>
        </div>
    </a>
@endsection
@push('js')
    <script src="{{ asset('user/calendar/calendar.js') }}"></script>
@endpush
