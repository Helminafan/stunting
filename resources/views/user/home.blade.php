@extends('user.master')
@include('user.component.headerCard')
@section('user')
    <div class="font-semibold mt-10 mb-4 mx-6">
    </div>
    <div class="card">
        @foreach ($data as $item => $row)
        <a href="{{route('user.dataBayi',$row->id)}}">
            <div class="bg-white rounded-xl mb-4 shadow-xl py-3 mx-6 w-[420px] ">
                <div class="flex justify-between  items-center text-slate-500  mb-1 px-5 ">
                    <div class="flex items-center">
                        <div class="bg-[#D981B4] bg-cover w-10 h-10 mr-2 rounded-[500px]"
                            style="background-image: url({{ asset('kader/foto/baby.png') }});"></div>
                        <h2 class="font-medium text-xs">{{ $row->namaBayi }}</h2>
                    </div>
                    <h2 class="font-normal text-[9px] p-[5px] bg-[#5CEC18] text-white rounded"> Normal</h2>
                </div>
                <hr class="mb-2">
                <div class="px-7">
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">NIK</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{$row->nikBayi}}</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Tanggal Lahir</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{$row->tglLahirBayi}}</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Usia</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{$selisihBulan[$loop->index]}} Bulan</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Jenis Kelamin</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{$row->jenisKelamin}}</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="font-semibold mt-10 mb-4 mx-6">
        <h1>Artikel</h1>
    </div>
    <div class="card">
        @foreach ($artikel as $item => $data)
        <a href="{{route('user.artikel',$data->id)}}">
            <div class="bg-white rounded-xl mb-4 shadow-xl py-3 mx-6 w-[420px] ">
                <div class="flex justify-between  items-center text-black  mb-1 px-5 ">
                    <div class="flex items-center">
                        <div class=" bg-cover w-10 h-10 mr-2 rounded-[500px]"
                            style="background-image: url({{ asset('kader/foto/logo-nosting.png') }});"></div>
                        <h1 class="font-semibold text-lg">{{$data->judul}}</h1>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
   
@endsection

