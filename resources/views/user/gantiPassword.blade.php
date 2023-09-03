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
                <div class="bg-green-500 items-center px-4 py-3 text-white flex">
                    <i class="fa-solid fa-left-long mx-3"></i>
                    <h1 class="font-semibold">Back</h1>
                </div>
            </div>
            <div class="mb-3 mx-3">
                <label for="default-input"
                    class="block mb-2 text-sm font-medium text-gray-900">Password lama</label>
                <input type="text" style="background-color: #97FFA1" id="default-input" class="bg-[#18aa27] text-green-700 text-sm rounded-lg w-full">
            </div>
            <div class="mb-3 mx-3">
                <label for="default-input"
                    class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
                <input style="background-color: #97FFA1" type="text" id="default-input" class="bg-[#18aa27] text-green-700 text-sm rounded-lg w-full">
            </div>
            <div class="mb-3 mx-3">
                <label for="default-input"class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password</label>
                <input type="text" id="default-input" style="background-color: #97FFA1" class=" text-green-700 text-sm rounded-lg w-full">
            </div>
            <div class=" mx-3">
                <button type="button"
                    class=" w-full text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
            </div>

        </div>
    </section>
</body>

</html>
