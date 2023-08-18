@extends('user.master')
@section('user')
    <div class="font-semibold mt-10 mb-4 mx-6">
        <h1>
            Daftar Anak
        </h1>
    </div>
    <div class="card">
        <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg mb-4 shadow-xl py-3 mx-6 w-[300px]  flex items-center space-x-4">
            <div class="shrink-0">
              <img class="h-12 w-12  rounded-[500px] left" src="{{ asset('kader/foto/helmi.jpg') }}" alt="foto-bayi">
            </div>
            <div>
              <div class="text-xs font-semibold text-black">Helmi Napan</div>
              <p class="text-[10px] font-medium">Biodata bayi anda ada disini</p>
            </div>
          </div>
    </div>
@endsection
