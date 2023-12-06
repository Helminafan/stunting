function hitungStunting() {
    var beratBadan = parseFloat(document.getElementById("beratBadan").value);
    var usiaAnak = parseFloat(document.getElementById("usiaAnak").value);
    var tinggiAnak = parseFloat(document.getElementById("tinggiAnak").value);
    var jenisKelamin = document.getElementById("jenisKelamin").value;

    hitungBeratBadan(beratBadan, usiaAnak, jenisKelamin, function (beratZScore) {
        hitungTinggiBadan(tinggiAnak, usiaAnak, jenisKelamin, function (tinggiZScore) {
            var statusGizi = nilaiGizi(beratZScore);
            var statusStunting = nilaiStunting(tinggiZScore);
            hasil(tinggiZScore);
            // Menampilkan hasil di textarea
            var textarea = document.getElementById("hasil");
            textarea.value = "Z-Score Berat Badan: " + beratZScore + "\n";
            textarea.value += "Z-Score Tinggi Badan: " + tinggiZScore + "\n";
            textarea.value += "Status Gizi: " + statusGizi + "\n";
            textarea.value += "Status Stunting: " + statusStunting;
        });
    });
}

function hitungBeratBadan(beratBadan, usiaAnak, jenisKelamin, callback) {
    fetch("/api/standartBeratBadan")
        .then((response) => response.json())
        .then((combinedData) => {
            var $zScore;
            if (jenisKelamin === "cowok") {
                const bbBoysData = combinedData.bbboys;
                if (bbBoysData[usiaAnak]) {
                    if (bbBoysData[usiaAnak].SD0 > beratBadan) {
                        $zScore = (beratBadan - bbBoysData[usiaAnak].SD0) / (bbBoysData[usiaAnak].SD0 - bbBoysData[usiaAnak].SD1NEG);
                    } else if (bbBoysData[usiaAnak].SD0 < beratBadan) {
                        $zScore = (beratBadan - bbBoysData[usiaAnak].SD0) / (bbBoysData[usiaAnak].SD1 - bbBoysData[usiaAnak].SD0);
                    }
                }
            } else if (jenisKelamin === "cewek") {
                const bbGirlsData = combinedData.bbgirl;
                if (bbGirlsData[usiaAnak]) {
                    if (bbGirlsData[usiaAnak].SD0 > beratBadan) {
                        $zScore = (beratBadan - bbGirlsData[usiaAnak].SD0) / (bbGirlsData[usiaAnak].SD0 - bbGirlsData[usiaAnak].SD1NEG);
                    } else if (bbGirlsData[usiaAnak].SD0 < beratBadan) {
                        $zScore = (beratBadan - bbGirlsData[usiaAnak].SD0) / (bbGirlsData[usiaAnak].SD1 - bbGirlsData[usiaAnak].SD0);
                    }
                }
            }
            callback($zScore); // Panggil callback dengan nilai Z-Score
        })
        .catch((error) => {
            console.error("Terjadi kesalahan:", error);
        });
}

function hitungTinggiBadan(tinggiAnak, usiaAnak, jenisKelamin, callback) {
    fetch("/api/standartBeratBadan")
        .then((response) => response.json())
        .then((combinedData) => {
            var $zScore;

            if (jenisKelamin === "cowok") {
                const tbBoysData = combinedData.tbboys;
                if (tbBoysData[usiaAnak]) {
                    if (tbBoysData[usiaAnak].SD0 > tinggiAnak) {
                        $zScore = (tinggiAnak - tbBoysData[usiaAnak].SD0) / (tbBoysData[usiaAnak].SD0 - tbBoysData[usiaAnak].SD1NEG);
                    } else if (tbBoysData[usiaAnak].SD0 < tinggiAnak) {
                        $zScore = (tinggiAnak - tbBoysData[usiaAnak].SD0) / (tbBoysData[usiaAnak].SD1 - tbBoysData[usiaAnak].SD0);
                    }
                }
            } else if (jenisKelamin === "cewek") {
                const tbGirlsData = combinedData.tbgirl;
                if (tbGirlsData[usiaAnak]) {
                    if (tbGirlsData[usiaAnak].SD0 > tinggiAnak) {
                        $zScore = (tinggiAnak - tbGirlsData[usiaAnak].SD0) / (tbGirlsData[usiaAnak].SD0 - tbGirlsData[usiaAnak].SD1NEG);
                    } else if (tbGirlsData[usiaAnak].SD0 < tinggiAnak) {
                        $zScore = (tinggiAnak - tbGirlsData[usiaAnak].SD0) / (tbGirlsData[usiaAnak].SD1 - tbGirlsData[usiaAnak].SD0);
                    }
                }
            }
            callback($zScore); // Panggil callback dengan nilai Z-Score
        })
        .catch((error) => {
            console.error("Terjadi kesalahan:", error);
        });
}

function nilaiGizi(zScore) {
    if (zScore < -3) {
        return "dengan kategori status gizi Berat badan sangat kurang (severely underweight)";
    } else if (zScore >= -3 && zScore < -2) {
        return "dengan kategori status gizi Berat badan Berat badan kurang (underweight)";
    } else if (zScore >= -2 && zScore <= 1) {
        return " dengan kategori status gizi Berat badan normal";
    } else if (zScore > 1) {
        return " dengan kategori status gizi berat badan berlebih";
    } else {
        return "Status Gizi Tidak Diketahui";
    }
}

function nilaiStunting(zScore) {
    if (zScore < -3) {
        return "dengan kategori status sangat stunting";
    } else if (zScore >= -3 && zScore < -2) {
        return "dengan kategori status stunting";
    } else if (zScore >= -2 && zScore <= 1) {
        return " dengan kategori normal";
    } else if (zScore > 1) {
        return " dengan kategori normal berlebih";
    } else {
        return "Status Stunting Tidak Diketahui";
    }
}
function hasil(zScore) {
    var status = document.getElementById("status");
    if (zScore < -3) {
        status.value = "stunting";
    } else if (zScore >= -3 && zScore < -2) {
        status.value = "stunting";
    } else if (zScore >= -2 && zScore <= 1) {
        status.value = "normal";
    } else if (zScore > 1) {
        status.value = "normal";
    } else {
        "Status Stunting Tidak Diketahui";
    }
}
