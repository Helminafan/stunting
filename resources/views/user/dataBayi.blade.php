@extends('user.master')
@section('user')
    <section>
        <div class="container">
            <div class="navbar mb-7">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <h1 class="font-semibold">Data Bayi</h1>
                </div>
            </div>
            <div class="bg-white rounded-xl mb-4 shadow-xl py-3 mx-6">
                <div class="flex justify-between  items-center text-slate-500  mb-1 px-5 ">
                    <div class="flex items-center">
                        <div class="bg-[#D981B4] bg-cover w-10 h-10 mr-2 rounded-[500px]"
                            style="background-image: url({{ asset('kader/foto/baby.png') }});"></div>
                        <h2 class="font-medium text-xs">Helmi Nafan ananda</h2>
                    </div>
                    <h2 class="font-normal text-[9px] p-[5px] bg-[#5CEC18] text-white rounded"> Normal</h2>
                </div>
                <hr class="mb-2">
                <div class="px-7">
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">NIK</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">34653636336</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Tanggal Lahir</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">23 Desember 2001</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Usia</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">11 Bulan</p>
                    </div>
                    <div class="flex">
                        <p class="text-[10px] font-medium text-slate-500 w-16">Jenis Kelamin</p>
                        <p class="text-[10px] font-medium text-slate-500 px-2">:</p>
                        <p class="text-[10px] font-medium text-slate-500 ">laki laki</p>
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
                            <th class="py-2 px-2" >Tinggi Badan</th>
                            <th class="py-2 px-2">Berat Badan</th>
                            <th class="py-2 px-2">Status</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr class="text-center border border-black">
                            <td class="py-2 px-2">1</td>
                            <td class="py-2 px-2">1 Bulan</td>
                            <td class="py-2 px-2" >120 cm</td>
                            <td class="py-2 px-2">12 kg</td>
                            <td class="py-2 px-2">Normal</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex items-center text-[12px] justify-center border-t border-gray-200 bg-white px-4 py-3 ">
                    <div class=" flex flex-1 items-center justify-end">
                      <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                          <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-1 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                          </a>
                          <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                          <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-2 py-1  font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                          <a href="#" class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                          <a href="#" class="relative hidden items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                          <span class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                          <a href="#" class="relative hidden items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                          <a href="#" class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                          <a href="#" class="relative inline-flex items-center px-2 py-1  font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                          <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-1 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </nav>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="container mx-auto my-10 mb-20">
            <div class=" px-5 ">
                <div class="rounded bg-white shadow-lg overflow-hidden">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
 --}}
    <script src="{{ asset('user/chart.js/Chart.min.js') }}"></script>

    {{-- <script>
    // setup 
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Weekly Sales',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
     
        ],
        borderWidth: 1,
        fill:true,
        pointRadius:0,
        tension:0.4,
        hitRadius:0,
      }]
    };

    // config 
    const config = {
      type: 'line',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    </script> --}}
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
@endpush