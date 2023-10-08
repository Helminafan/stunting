<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notifikasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <style>
    .indicator{
      transition: left .4s;
    }
    </style>
</head>

<body class="">
    <section>
        <div class="container">
            <div class="navbar mb-5">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <a href="{{ url('/user/akun') }}">
                        <i class="fa-solid fa-left-long mx-3"></i>
                    </a>
                    <a href="{{ url('/user/akun') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex items-center mb-3 mt-4 p-4 bg-grey rounded-lg shadow-lg mx-auto max-w-sm relative m-10">
            <span class="text-xs font-bold uppercase px-2 mt-2 mr-2 text-white bg-[#D981B4] border rounded-full absolute top-0 right-0">04-10-23</span>
            <span class="text-xs font-semibold uppercase m-1 py-1 mr-3 text-gray-500 absolute bottom-0 right-0">4:36 PM</span>
            <div class="ml-5">
                <h4 class="text-lg font-semibold leading-tight text-gray-900">Jadwal Pemeriksaan Stunting</h4>
                <p class="text-sm text-gray-600">Jadwal Stunting akan dilaksanakan di puskesmas wonosobo
                    pada jam 10.00 WIB</p>
            </div>
        </div>    
        <div class="flex items-center mb-3 mt-4 p-4 bg-grey rounded-lg shadow-lg mx-auto max-w-sm relative m-10">
            <span class="text-xs font-bold uppercase px-2 mt-2 mr-2 text-white bg-[#D981B4] border rounded-full absolute top-0 right-0">04-10-23</span>
            <span class="text-xs font-semibold uppercase m-1 py-1 mr-3 text-gray-500 absolute bottom-0 right-0">4:36 PM</span>
            <div class="ml-5">
                <h4 class="text-lg font-semibold leading-tight text-gray-900">Jadwal Pemeriksaan Stunting</h4>
                <p class="text-sm text-gray-600">Jadwal Stunting akan dilaksanakan di puskesmas wonosobo
                    pada jam 10.00 WIB</p>
            </div>
        </div>    
    </section>
    <script src="{{asset('user/tab-content.js')}}"></script>
</body>

</html>

