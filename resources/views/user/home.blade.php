@extends('user.master')
@include('user.component.headerCard')
@section('user')
    <div class="font-semibold mt-10 mb-4 mx-6">
        <h1>
            Pengumuman Terbaru
        </h1>
    </div>
    <div class="card">
        <div class="bg-white rounded-xl mb-4 shadow-xl py-3 mx-6 w-[300px] ">
            <div class="flex items-center text-slate-500 justify-between mb-1 px-5 ">
                <h2 class="font-medium text-xs">Jadwal Pemriksaan Stunting</h2>
                <p class="text-xs font-semibold">12 Agustus 2023</p>
            </div>
            <p class="text-[9px] text-slate-500 px-5">Jadwal Stunting akan dilaksanakan di tempat antah berantah pada
                jam
                10.00 wib</p>
        </div>
        <div class="bg-white rounded-xl mb-4 shadow-xl py-3 mx-6 w-[300px] ">
            <div class="flex items-center text-slate-500 justify-between mb-1 px-5 ">
                <h2 class="font-medium text-xs">Jadwal Pemriksaan Stunting</h2>
                <p class="text-xs font-semibold">12 Agustus 2023</p>
            </div>
            <p class="text-[9px] text-slate-500 px-5">Jadwal Stunting akan dilaksanakan di tempat antah berantah pada
                jam
                10.00 wib</p>
        </div>
    </div>
    <div class="font-semibold mt-5 mb-4 mx-6">
        <h1>
            Chart
        </h1>
    </div>
    <div class="container mx-auto mb-20">
        <div class=" px-5 ">
            <div class="rounded bg-white shadow-lg overflow-hidden">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>
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
                                return  number_format(value);
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
