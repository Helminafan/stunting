<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang</title>
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

<body style="background-color:#FFFFFF;">
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
        <section class="bg-white dark:bg-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
                <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-gray-900">Tim Kami</h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Kami memiliki tim yang sangat luar biasa, tim kami berisi orang-orang yang pantang menyerah, dan penuh dengan semangat, serta profesionalitas yang total dalam bekerjasama.</p>
                </div> 
                <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('kader/foto/aji.jpeg') }}" alt=" Avatar">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900">
                            <a href="#">M. Aji Hermansya</a>
                        </h3>
                        <p>Mobile Developer</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-solid fa-square-envelope fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-brands fa-square-instagram fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/ajihermansya" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-square-github fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-linkedin fa-xl"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png" alt=" Avatar">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900">
                            <a href="#">Xavier Is'ad Ariel</a>
                        </h3>
                        <p>Mobile Developer</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-solid fa-square-envelope fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-brands fa-square-instagram fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/Xaisar" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-square-github fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-linkedin fa-xl"></i>
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('kader/foto/helmi.jpg') }}" alt="Jese Avatar">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900">
                            <a href="#">Helmi Nafan Ananda</a>
                        </h3>
                        <p>Web Developer</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-solid fa-square-envelope fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-brands fa-square-instagram fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/Helminafan" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-square-github fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-linkedin fa-xl"></i>
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('kader/foto/ajril.JPG') }}" alt="Joseph Avatar">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900">
                            <a href="#">Azril Praya Prasetyo</a>
                        </h3>
                        <p>Web Developer</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="https://www.instagram.com/_prasetyoazril/" class="text-[#00acee] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-brands fa-square-instagram fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/ajil23" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-square-github fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/azril-prasetyo/" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-linkedin fa-xl"></i>
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('kader/foto/virgi.jpg') }}" alt=" Avatar">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900">
                            <a href="#">Virgianita Ramadhani Susilo Putri</a>
                        </h3>
                        <p>UI/UX Designer</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-solid fa-square-envelope fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-brands fa-square-instagram fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/virgian12" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-square-github fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-linkedin fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('kader/foto/diah.jpeg') }}" alt=" Avatar">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900">
                            <a href="#">Diah Rita Nurholifah</a>
                        </h3>
                        <p>UI/UX Designer</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-solid fa-square-envelope fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-gray-900">
                                    <i class="fa-brands fa-square-instagram fa-xl text-gray-300 hover:text-gray-900"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/diahrita" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-square-github fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-gray-900 dark:text-gray-300">
                                    <i class="fa-brands fa-linkedin fa-xl"></i>
                                </a>
                            </li>
                        </ul>
                        </ul>
                    </div>
                </div>  
            </div>
          </section>
    </section>
    <script src="{{asset('user/tab-content.js')}}"></script>
</body>

</html>

