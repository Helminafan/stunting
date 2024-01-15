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
                    <a href="{{ url('/user/home') }}">
                        <i class="fa-solid fa-left-long mx-3"></i>
                    </a>
                    <a href="{{ url('/user/home') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
        </div>
        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-white antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-lg ">
                <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    
                    <header class="mb-4 lg:mb-6 not-format">
                        <!-- Judul Artikel -->
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-gray-900">
                            {{$showArtikel->judul}}
                        </h1>
                        <p class="text-base text-gray-500 dark:text-gray-400">{{$showArtikel->created_at}}</p>
                    </header>
                    <!-- isi artikel -->
                    <p class="lead"> {{$showArtikel->isi}}</p>
                </article> 
            </div>
        </main>
    </section>
</body>

</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container">
        <div class="navbar mb-7">
            <div class="bg-[#D981B4] items-center px-4 py-3 max-w-screen-2xl text-white flex">
                <a href="{{ url('user/home') }}">
                    <i class="fa-solid fa-left-long mx-3"></i>
                </a>
                <a href="{{url('user/home')}}">
                    <h1 class="font-semibold">Back</h1>
                </a>
            </div>
        </div>
        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-white antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-lg ">
                <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-gray-900">Jese Leos</a>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                            </div>
                        </div>
                    </address>
                    <header class="mb-4 lg:mb-6 not-format">
                        <!-- Judul Artikel -->
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-gray-900">
                            Best practices for successful prototypes
                        </h1>
                    </header>
                    <!-- isi artikel -->
                    <p class="lead">Flowbite is an open-source library of UI components built with the utility-first
                        classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
                        datepickers.</p>
                    <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
                        you can think things through before committing to an actual design project.
                    </p>
                </article>
            </div>
        </main>
    </div>
</body>
</html> --}}