<div class="tombol w-full fixed bottom-0">
    <div class="bg-white shadow-[0px_-3px_20px__rgba(0,0,0,0.5)]  py-1 grid grid-cols-4 gap-1">
        <a href="{{ url('/kader/dashboard') }}">
            <div class="text-center {{'kader/dashboard' == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-house-user"></i></div>
                <div class="text-[11px]">Home</div>
            </div>
        </a>
        <a href="{{ url('/kader/kalender') }}">
            <div class="text-center {{'kader/kalender' == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-calendar"></i></div>
                <div class="text-[11px]">Kalender</div>
            </div>
        </a>
        <a href="{{ url('/kader/dataAnak') }}">
            <div class="text-center {{'kader/dataAnak'  == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-baby"></i></div>
                <div class="text-[11px]">Data Anak</div>
            </div>
        </a>
        <a href="{{ url('/kader/akun') }}">
            <div class="text-center {{'kader/akun' == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-user"></i></div>
                <div class="text-[11px]">Akun</div>
            </div>
        </a>
    </div>
</div>