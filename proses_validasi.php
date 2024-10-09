<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $errors = array();

    if (empty($nama)) {
        $errors[] = "Nama harus diisi";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }

    if (empty($errors)){ 
        echo "Data berhasil dikirim: $nama, Email = $email";
    } else{
        foreach ($errors as $error){ 
            echo $error. "<br>";
        }
    }

    if (isset($_POST['password']) && strlen($_POST['password']) < 8) {
        echo "Password harus minimal 8 karakter.";
        exit;
    }
}
?>