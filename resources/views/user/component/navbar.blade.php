<section class="tombol  fixed w-3/4 bottom-4 left-1/2 -translate-x-1/2 ">
    <div class="bg-white rounded-3xl text-[30px] shadow-[0px_-3px_20px__rgba(0,0,0,0.5)]  py-4 grid grid-cols-4 gap-1">
        <a href="{{ url('/user/home') }}">
            <div class="text-center {{'user/home' == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-house-user"></i></div>
            </div>
        </a>
        <a href="{{ url('/user/bayi') }}">
            <div class="text-center {{'user/bayi' == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-baby"></i></div>
            </div>
        </a>
        <a href="{{ url('/user/kalender') }}">
            <div class="text-center {{'user/kalender' == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-calendar"></i></div>
                
            </div>
        </a>
        <a href="{{ url('/user/akun') }}">
            <div class="text-center {{'user/akun' == request()->path() ? 'text-[#D981B4]' : 'text-slate-600'}}">
                <div><i class="fa-solid fa-user"></i></div>
                
            </div>
        </a>
    </div>
</section>