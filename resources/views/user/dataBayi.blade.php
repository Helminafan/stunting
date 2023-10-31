@extends('user.master')
@section('user')
    <section>
        <div class="container">
            <div class="navbar mb-7">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <a href="{{url('user/home')}}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-xl mb-4 shadow-xl py-3 mx-6">
                <div class="flex justify-between  items-center text-slate-500  mb-1 px-5 ">
                    <div class="flex items-center">
                        <div class="bg-[#D981B4] bg-cover w-10 h-10 mr-2 rounded-[500px]"
                            style="background-image: url({{ asset('kader/foto/baby.png') }});"></div>
                        <h2 class="font-medium text-xs">{{ $detailBayi->namaBayi }}</h2>
                    </div>
                    <h2 class="font-normal text-[9px] p-[5px] bg-[#5CEC18] text-white rounded"> Normal</h2>
                </div>
                <hr class="mb-2">
                <div class="px-7">
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">NIK</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{ $detailBayi->nikBayi }}</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Tanggal Lahir</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{ $detailBayi->tglLahirBayi }}</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Usia</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{ $selisihBulan }} Bulan</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Jenis Kelamin</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">{{ $detailBayi->jenisKelamin }}</p>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden mx-4">
                <table border="1" class="text-[12px] w-full">
                    <thead>
                        <tr class="bg-gray-300 ">
                            <th class="py-2 px-2">No</th>
                            <th class="py-2 px-2">Umur</th>
                            <th class="py-2 px-2">Tinggi Badan</th>
                            <th class="py-2 px-2">Berat Badan</th>
                            <th class="py-2 px-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tabelKesehatan as $item)
                            <tr class="text-center border border-black">
                                <td class="py-2 px-2">{{ $loop->iteration }}</td>
                                <td class="py-2 px-2">{{ $item->usiaBayi }} Bln</td>
                                <td class="py-2 px-2">{{ $item->tinggiBadanBayi }} cm</td>
                                <td class="py-2 px-2">{{ $item->beratBadanBayi }} kg</td>
                                <td class="py-2 px-2">{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex items-center text-[12px] justify-center border-t border-gray-200 bg-white px-4 py-3 ">
                    <div class=" flex flex-1 items-center justify-end">
                        <div>
                            <ul class="isolate pagination inline-flex -space-x-px rounded-md shadow-sm"
                                aria-label="Pagination">
                                <li
                                    class="prev text-[15px] relative inline-flex items-center rounded-l-md px-2 py-1 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <a href="#" id="prev">
                                        &#139;
                                    </a>
                                </li>
                                <li
                                    class="next text-[15px] relative inline-flex items-center rounded-l-md px-2 py-1 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <a href="#" id="next">
                                        &#155;
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mx-4  mt-4 mb-32">
            <div class="flex">
                <select
                    class=" bg-white border border-white mx-2 text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                    id="tahun" onchange="updateChart()">
                    @foreach ($year as $tahun)
                        <option value="{{ $tahun }}">{{ $tahun }}</option>
                    @endforeach


                </select>
                <select
                    class=" bg-white border border-white mx-2  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                    id="bulanSelector" onchange="updateChart()">
                    <option value="bulan_pertama">Bulan Pertama</option>
                    <option value="bulan_kedua">Bulan Kedua</option>
                </select>
            </div>
            <div class="rounded bg-white shadow-lg mt-5 overflow-hidden">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </section>
@endsection
@push('js')
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
 --}}
    <script src="{{ asset('user/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('kader/datatable/datatables.js') }}"></script>
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {

            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        function updateChart() {
            var ctx = document.getElementById("myAreaChart");
            var data = <?php echo json_encode($results); ?>;
            var selectedYear = document.getElementById('tahun').value;
            var selectedOption = document.getElementById('bulanSelector')
                .value; // Ganti dengan 'bulan_pertama' atau 'bulan_kedua' sesuai kebutuhan
            var filteredData = data.filter(item => item.tahun == selectedYear);
            if (selectedOption === 'bulan_pertama') {
                filteredData = filteredData.filter(item => isBulanPertama(item.nama_bulan));
            } else if (selectedOption === 'bulan_kedua') {
                filteredData = filteredData.filter(item => !isBulanPertama(item.nama_bulan));
            }

            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: filteredData.map(item => item.nama_bulan),
                    datasets: [{
                        label: "Earnings",
                        backgroundColor: 'rgba(255, 26, 104, 0.2)',
                        borderColor: 'rgba(255, 26, 104, 1)',
                        borderWidth: 1,
                        fill: true,
                        pointRadius: 0,
                        tension: 0.4,
                        hitRadius: 0,
                        data: filteredData.map(item => item.tinggiBadanBayi),
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'date'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                maxTicksLimit: 5,
                                padding: 10,
                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    return number_format(value);
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }],
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        intersect: false,
                        mode: 'index',
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                            }
                        }
                    }
                }
            });
        }
        // Area Chart Example


        function isBulanPertama(namaBulan) {
            // Tambahkan logika untuk menentukan apakah suatu bulan adalah "Bulan Pertama" berdasarkan nama bulan.
            return (namaBulan === 'January' || namaBulan === 'February' || namaBulan === 'March' || namaBulan === 'April' ||
                namaBulan === 'May' || namaBulan === 'June');
        }
        document.addEventListener('DOMContentLoaded', updateChart);
    </script>
@endpush
