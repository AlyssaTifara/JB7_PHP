<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="Jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih Warna Favorit: </label><br>
        <input type="checkbox" name="warna[]" value="merah">Merah<br>
        <input type="checkbox" name="warna[]" value="biru">Biru<br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau<br>

        <br>

        <input type="submit" value="submit">
    </form>

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $selectedBuah = $_POST['Buah'];

    if (insert($_POST['warna'])){
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }
} 

$selectJenisKelamin = $_POST['jenis_kelamin'];

echo "Anda memilih buah: " . $selectedBuah . "<br>";

if (!empty($selectedWarna)){
    echo "Warna Favorit Anda: " . implode(", ", $selectedWarna). "<br>";
} else {
    echp "Anda tidak memilih warna Favorit. <br>";
}

echo "Jenis kelamin anda: " . $selectJenisKelamin;
</body>
</html>