<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Stunting</title>
    </head>
    <body>
        <h1>Kalkulator Stunting</h1>
        <p>Masukkan tinggi badan anak (cm) dan usia anak (bulan):</p>
        <input type="number" id="beratBadan" placeholder="Berat Badan" />
        <input type="number" id="usiaAnak" placeholder="Usia Anak (bulan)" />
        <input type="number" id="tinggiAnak" placeholder="tinggi Anak" />
        <select name="jenisKelamin" id="jenisKelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="cowok">Laki Laki</option>
            <option value="cewek">Permepuan</option>
        </select>
        <button onclick="hitungStunting()">Hitung</button>

        <script src="{{asset('kader/data/dataTBBB.js')}}"></script>
       
    </body>
</html>
