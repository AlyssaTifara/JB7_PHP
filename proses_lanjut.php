<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])){
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    $selectJenisKelamin = $_POST['jenis_kelamin'];
} 

echo "Anda memilih buah: " . $selectedBuah . "<br><br>";

if (!empty($selectedWarna)){
    echo "Warna Favorit Anda: " . implode(", ", $selectedWarna). "<br><br>";
} else {
    echo "Anda tidak memilih warna Favorit. <br>";
}

echo "Jenis kelamin anda: " . $selectJenisKelamin;
?>