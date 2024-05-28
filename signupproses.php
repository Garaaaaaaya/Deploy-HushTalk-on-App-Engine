<?php
function generateToken() {
    return bin2hex(random_bytes(16));
}

session_start();
include "koneksi.php";

$email = $_POST["email"];
$password = $_POST["password"];
$co_password = $_POST["co_password"];
$name = $_POST["name"];

$sql = "SELECT COUNT(*) AS jumlah FROM user WHERE email = '$email'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if ($row["jumlah"] > 0) {
    echo "
            <script>
                alert('Email telah digunakan');
                document.location.href = 'signup.php';
            </script>
        ";
} else {
    if ($password != $co_password) {
        echo "
            <script>
                alert('Password salah! Silakan coba lagi');
                document.location.href = 'signup.php';
            </script>
        ";
    } else {
        $token = generateToken();
        $query = mysqli_query($connection, "INSERT INTO user (email, password, name, api_token) VALUES ('$email', '$password', '$name', '$token')") or die(mysqli_error($connection));

        if ($query) {
            echo "
            <script>
                alert('Pendaftaran berhasil, silakan login');
                document.location.href = 'login.php';
            </script>
        ";
        } else {
            echo "proses gagal";
        }
    }
}
?>
