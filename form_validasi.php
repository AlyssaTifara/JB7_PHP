<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"> 
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); // Mencegah pengiriman form secara default

        var nama = $("#nama").val();
        var email = $("#email").val();
        var valid = true;

        // Validasi Nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        // Validasi Email
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }

        if (valid) {
            $.ajax({
                url: "proses_validasi.php", 
                type: "POST", 
                data: { nama: nama, email: email }, 
                success: function(response) {
                    alert(response);
                },
                error: function() {
                    alert("Terjadi kesalahan saat mengirim data.");
                }
            });
        }
    });
});
</script>
</body>
</html>
