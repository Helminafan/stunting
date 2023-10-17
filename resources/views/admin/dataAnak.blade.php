@extends('admin.master')
@section('master')
    <div class="h-28 bg-[#D981B4] rounded-b-[60px]">
        <div class="flex justify-between items-center mx-6 pt-4">
            <div class="text-white">
                <h1 class="font-bold text-lg">Stunting</h1>
            </div>
            <div class="text-white">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg w-80 mx-auto mb-5 overflow-hidden  mt-6">
        <div id="dataAnak"></div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="flex flex-col">
            <input type="text" id="find" class="border rounded-lg border-gray-400 hover:border-black focus:border-black p-[8px_10px]" name="searchAnak" placeholder="Cari..." required > 
        </div>
    </div>
  
    <div class="text-gray-600  mx-6 mb-5">
        <h1>Data Anak</h1>
        <hr class="border-gray-500 ">
    </div>

    {{-- Card data Anak --}}
    @foreach ($allDataBayi as $item =>$row)
    <a href="{{route('detailData.edit', $row->id)}}">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <div class="bg-white rounded-3xl shadow-xl">
              <div class="flex items-center px-5 py-3">
                  <div class="bg-[#D981B4] bg-cover w-12 h-12 mr-2 rounded-[500px]"
                      style="background-image: url({{ asset('kader/foto/baby.png') }});"></div>
                  <div>
                      <h2 class="font-bold text-xs">{{$row->namaBayi}}</h2>
                      <h2 class="font-extralight text-xs">Biodata bayi yang bersangkutan</h2>
                  </div>
              </div>
            </div>
          </div>
    </a>
    @endforeach
    

    
    <a href="{{route('tambahData.view')}}" class="rounded-full w-14 h-14 flex fixed bottom-16 right-5 bg-[#D981B4] text-[35px]">
        <div class="mx-auto text-white"> <i class="fa-solid fa-plus" ></i></div>
    </a>
@endsection
