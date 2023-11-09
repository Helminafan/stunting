<div class="h-28 bg-[#D981B4] rounded-b-[30px] relative">
    <div class="flex justify-between items-center mx-6 pt-4">
        <div class="text-white">
            <h1 class="font-medium text-lg">Hi' Lusi Andeeni</h1>
        </div>
        <div class="bg-red-500 bg-cover w-12 h-12 mr-2 rounded-[500px]"
            style="background-image: url({{ asset('kader/foto/helmi.jpg') }});">
        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl absolute -bottom-5 w-[300px] left-1/2 -translate-x-1/2">
        <div class="flex items-center px-5 py-3">
            <h2 class="font-bold text-lg" id="clock"></h2>
            <script>
                setInterval(customClock, 500);
                function customClock() {
                    var time = new Date();
                    var hrs = time.getHours();
                    var min = time.getMinutes();
                    
                    document.getElementById('clock').innerHTML = hrs + ":" + min;
                    
                }
            </script>
            <div class="ml-2">
                <p class="text-xs font-semibold">
                    <?php
                        echo date('d F Y');
                    ?>
                </p>
                <p class="text-[10px] font-semibold">Jl. Jendral Sudirman, kel. Sidorejo, Kec. Ro...</p>
            </div>
        </div>
    </div>
</div>
