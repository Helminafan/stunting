<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kesehatan Anak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <style>
        .indicator {
            transition: left .4s;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">

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

            {{-- card identity --}}
            <form method="GET" action="#" enctype="multipart/form-data">
                @csrf
                <div class="bg-white items-center rounded-xl mb-4 shadow-xl py-3 mx-6 ">
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
            </form>

            {{-- tab navigation --}}
            <div role="tablist" aria-label="tabs"
                class="relative w-max mx-auto h-10 grid grid-cols-2 items-center px-[3px] rounded-full bg-[#FFB0DE] overflow-hidden shadow-2xl shadow-900/20 transition">
                <div class="absolute indicator h-10 my- top-0 bottom-0 left-0 rounded-full bg-[#D981B4] shadow-md">
                </div>
                <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Penimbangan</span>
                </button>
                <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                    class="relative block h-10 px-6 tab rounded-full">
                    <span class="text-white">Perkembangan</span>
                </button>
            </div>

            {{-- card item --}}
            <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
                <div role="tabpanel" id="panel-1" class="tab-panel ">
                    {{-- tab name "Hasil Penimbangan" --}}
                    <h1 class="font-bold text-center mb-3 text-white">Kalkulator Penimbangan</h1>

                    <form class="bayi" method="POST" action="{{ route('kesehatanBayi.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- input for "tinggi badan" type number --}}
                        <div class="mb-3 mx-3">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-white">Tinggi
                                Badan</label>
                            <div class="flex items-center">
                                <input type="number" id="tinggiAnak"
                                    class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                    placeholder="Tinggi Badan" name="tb" step=".01" required>
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold"
                                    disabled>cm</button>
                            </div>
                        </div>

                        {{-- input for  "berat badan" type number --}}
                        <div class="mb-3 mx-3">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-white">Berat
                                Badan</label>
                            <div class="flex items-center">
                                <input type="number" id="beratBadan"
                                    class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                    placeholder="Berat Badan" name="bb" step=".01" required>
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold"
                                    disabled>kg</button>
                            </div>
                        </div>
                        <div class="mb-3 mx-3">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-white">Usia
                                Anak</label>
                            <div class="flex items-center">
                                <input type="number" id="usiaAnak"
                                    class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:placeholder-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                    disabled value="{{ $selisihBulan }}">
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold"
                                    disabled>Bln</button>
                            </div>
                        </div>

                        {{-- input for "lingkar kepala" type number --}}
                        <div class="mb-3 mx-3">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-white">Lingkar
                                Kepala
                                (opsional)</label>
                            <div class="flex items-center">
                                <select disabled
                                    class="bg-white border border-white  text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                    name="" id="jenisKelamin" required>
                                    <option value="null">Pilih Jenis Kelamin</option>
                                    <option value="cowok"
                                        {{ $detailBayi->jenisKelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki Laki </option>
                                    <option value="cewek"
                                        {{ $detailBayi->jenisKelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan </option>
                                </select>
                                <button class="m-2 rounded bg-[#FFB0DE] px-4 py-2 text-white font-bold"
                                    disabled>cm</button>
                            </div>
                        </div>

                        {{-- get id bayi --}}
                        <div class="mb-3 mx-3">
                            <input type="hidden" value="{{ $detailBayi->id }}" name="bayi_id">
                        </div>

                        {{-- get "usia bayi" --}}
                        <div class="mb-3 mx-3">
                            <input type="hidden" value="{{ $selisihBulan }}" name="usiaBayi">
                        </div>

                        {{-- textarea for "keterangan" --}}
                        <div class="mb-3 mx-3">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-grey text-white">Keterangan</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-grey bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#865BF4] focus:border-[#865BF4] dark:bg-white dark:white dark:placeholder-gray-400 dark:text-grey dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                placeholder="Uraian perkembangan motorik anak" name="ket"></textarea>
                        </div>

                        <div class="mb-3 mx-3">
                            <label for="hasil"
                                class="block mb-2 text-sm font-medium text-grey text-white">Hasil</label>
                            <textarea disabled id="hasil" rows="4"
                                class="block p-2.5 w-full text-sm text-grey bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#865BF4] focus:border-[#865BF4] dark:bg-white dark:white dark:placeholder-gray-400 dark:text-grey dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                name="hasil"></textarea>
                        </div>

                        {{-- save button for "kesehatan bayi" data --}}
                        <div class=" mx-3">
                            <button type="button" onclick="hitungStunting()"
                                class=" w-full text-white bg-[#86f45b] hover:bg-[#63b443] focus:outline-none focus:ring-4  font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#86f45b] dark:hover:bg-[#86f45b]dark:focus:ring-[#86f45b]">Hitung</button>
                        </div>
                        <div class=" mx-3">
                            <button type="submit"
                                class=" w-full text-white bg-[#865BF4] hover:bg-[#5d3fa8] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan</button>
                        </div>

                    </form>
                </div>
                <div role="tabpanel" id="panel-2" class=" tab-panel invisible absolute w-full my-5 top-0">
                    {{-- tab name "Grafik Perkembangan" --}}
                    <h1 class="font-bold text-center mb-3 text-white">Grafik Perkembangan</h1>

                    {{-- graphic --}}
                    <div class="mb-3 mx-3">
                        <div class="bg-white rounded-lg shadow-xl overflow-hidden mx-4">
                            <table border="1" class="text-[12px] w-full">
                                <thead>
                                    <tr class="bg-gray-300 ">
                                        <th class="py-2 px-2">No</th>
                                        <th class="py-2 px-2">Usia</th>
                                        <th class="py-2 px-2">Tinggi</th>
                                        <th class="py-2 px-2">Berat</th>
                                        <th class="py-2 px-2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center border border-black">
                                        <td class="py-2 px-2">1</td>
                                        <td class="py-2 px-2">1 Bulan</td>
                                        <td class="py-2 px-2">120 cm</td>
                                        <td class="py-2 px-2">12 kg</td>
                                        <td class="py-2 px-2">Normal</td>
                                    </tr>
                                    <tr class="text-center border border-black">
                                        <td class="py-2 px-2">2</td>
                                        <td class="py-2 px-2">1 Bulan</td>
                                        <td class="py-2 px-2">120 cm</td>
                                        <td class="py-2 px-2">12 kg</td>
                                        <td class="py-2 px-2">Normal</td>
                                    </tr>
                                    <tr class="text-center border border-black">
                                        <td class="py-2 px-2">3</td>
                                        <td class="py-2 px-2">1 Bulan</td>
                                        <td class="py-2 px-2">120 cm</td>
                                        <td class="py-2 px-2">12 kg</td>
                                        <td class="py-2 px-2">Normal</td>
                                    </tr>
                                    <tr class="text-center border border-black">
                                        <td class="py-2 px-2">4</td>
                                        <td class="py-2 px-2">1 Bulan</td>
                                        <td class="py-2 px-2">120 cm</td>
                                        <td class="py-2 px-2">12 kg</td>
                                        <td class="py-2 px-2">Normal</td>
                                    </tr>
                                    <tr class="text-center border border-black">
                                        <td class="py-2 px-2">5</td>
                                        <td class="py-2 px-2">1 Bulan</td>
                                        <td class="py-2 px-2">120 cm</td>
                                        <td class="py-2 px-2">12 kg</td>
                                        <td class="py-2 px-2">Normal</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                                class="flex items-center text-[12px] justify-center border-t border-gray-200 bg-white px-4 py-3 ">
                                <div class=" flex flex-1 items-center justify-end">
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm"
                                            aria-label="Pagination">
                                            <a href="#"
                                                class="relative inline-flex items-center rounded-l-md px-2 py-1 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                <span class="sr-only">Previous</span>
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                            <a href="#" aria-current="page"
                                                class="relative z-10 inline-flex items-center bg-indigo-600 px-2 py-1  font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                                            <a href="#"
                                                class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                            <a href="#"
                                                class="relative hidden items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                            <span
                                                class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                            <a href="#"
                                                class="relative hidden items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                            <a href="#"
                                                class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                            <a href="#"
                                                class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                                            <a href="#"
                                                class="relative inline-flex items-center rounded-r-md px-2 py-1 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                <span class="sr-only">Next</span>
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mx-4 ">
                        <div class="rounded bg-white shadow-lg overflow-hidden">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('kader/data/dataTBBB.js') }}"></script>
    <script src="{{ asset('user/tab-content.js') }}"></script>
    <script src="{{ asset('user/chart.js/Chart.min.js') }}"></script>
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
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

        // Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Earnings",
                    backgroundColor: [
                        'rgba(255, 26, 104, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 26, 104, 1)',

                    ],
                    borderWidth: 1,
                    fill: true,
                    pointRadius: 0,
                    tension: 0.4,
                    hitRadius: 0,
                    data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
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
                            return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
