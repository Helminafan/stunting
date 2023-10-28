<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body>
    <section>
        <div class="container">
            <div class="navbar mb-5">
                <div class="bg-[#D981B4] items-center px-4 py-3 text-white flex">
                    <a href="{{ url('/user/akunsaya') }}">
                        <i class="fa-solid fa-left-long mx-3"></i>
                    </a>
                    <a href="{{ url('/user/akunsaya') }}">
                        <h1 class="font-semibold">Back</h1>
                    </a>
                </div>
            </div>
            <form action="{{route('update_password',Auth::user()->id)}}" method="POST">
                @csrf
                <div class="relative card bg-[#D981B4] mt-4 py-5 rounded-xl mx-8">
                    <h1 class="font-bold text-center mb-3 text-white">Ganti Password</h1>
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Password
                            Lama</label>
                        <div class="flex items-center">
                            <input type="password" id="default-input"
                               name="oldPassword" class="bg-white border border-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                placeholder="Password Lama">
                        </div>
                    </div>
                    <div class="mb-3 mx-3"><label for="default-input"
                            class="block mb-2 text-sm font-medium text-white">Password Baru</label>
                        <div class="flex items-center">
                            <input type="password" id="default-input"
                               name="newPassword" class="bg-white border border-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                                placeholder="Password Baru">
                        </div>
                    </div>
                    <div class="mb-3 mx-3">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-white">Konfirmasi</label>
                        <div class="flex items-center">
                            <input type="password" id="default-input"
                                class="bg-white border border-white text-sm rounded-lg focus:ring-[#865BF4] focus:border-[#865BF4] block w-full p-2.5 dark:bg-white dark:border-white dark:text-black dark:focus:ring-[#865BF4] dark:focus:border-[#865BF4]"
                               name="reenter_password" placeholder="Konfirmasi Password Baru">
                        </div>
                    </div>
                    <div class=" mx-3">
                        <button type="submit"
                            class=" w-full text-white bg-[#865BF4] hover:bg-[#865BF4] focus:outline-none focus:ring-4 focus:ring-[#865BF4] font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-[#865BF4] dark:hover:bg-[#865BF4]dark:focus:ring-[#865BF4]">Simpan</button>
                    </div>
                </div>
            </form>
    </section>
</body>

</html>
