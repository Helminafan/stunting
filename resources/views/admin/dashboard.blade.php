@extends('admin.master')
@section('master')
    <div class="h-28 bg-[#D981B4] rounded-b-[60px] relative">
        <div class="flex justify-between items-center mx-6 pt-4">
            <div class="text-white">
                <h1 class="font-bold text-lg">Nosting</h1>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-xl absolute -bottom-12 w-[250px] left-1/2 -translate-x-1/2">
            <div class="flex items-center px-5 py-3">
                <div class="bg-red-500 bg-cover w-12 h-12 mr-2 rounded-[500px]"
                    style="background-image: url({{ asset('kader/foto/helmi.jpg') }});"></div>
                <div>
                    <h2 class="font-bold text-xs">Kader Mawar 5</h2>
                    <h2 class="font-extralight text-xs">@mawar 5</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="text-gray-600 mt-16 mx-6 mb-5">
        <h1>Data</h1>
        <hr class="border-gray-500 ">
    </div>
    <div class="grid grid-cols-2 gap-2 mb-5 mx-6 justify-between">
        <div class="bg-white  p-4 rounded-xl shadow-xl">
            <h1 class="text-[14px]">Jumlah Anak</h1>
            <div class="flex">
                <h1 class="text-[30px]">{{ DB::table('bayi')->count() }}</h1>
                <img src="{{ asset('kader/foto/bayi.png') }}" alt="">
            </div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-2xl">
            <h1 class="text-[14px]">Jumlah Stunting</h1>
            <div class="flex">
                <h1 class="text-[30px]">{{$jumlahBayiStunting}}</h1>
                <img src="{{ asset('kader/foto/bayi.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="text-gray-600  mx-6 mb-5">
        <h1>Grafik</h1>
        <hr class="border-gray-500 ">
    </div>
    <div class="card rounded-md mb-5 mx-16">
        <div class="bg-slate-200 font-semibold py-2 text-sm  text-blue-600">
            <h1 class="ml-3">Revenue Source</h1>
        </div>
        <div class="bg-white py-3">
            <canvas id="myPieChart" class="h-24 mb-3"></canvas>
            <div class="flex text-[12px] justify-center">
                <span class="mr-2">
                    <i class="fas fa-circle text-blue-700"></i> Bayi Stunting
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-green-600"></i> Bayi Normal
                </span>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        var ctx = document.getElementById("myPieChart");
        var jumlahBayiStunting = <?php echo json_encode($jumlahBayiStunting); ?>;
        var jumlahBayiNormal = <?php echo json_encode($jumlahBayiNormal); ?>;
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["jumlah Bayi Normal", "jumlah Bayi Stunting"],
                datasets: [{
                    data: [jumlahBayiNormal, jumlahBayiStunting],
                    backgroundColor: ['#1cc88a','#4e73df'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });
    </script>
@endpush
