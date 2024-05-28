<?php
function generateToken() {
    return bin2hex(random_bytes(16));
}

session_start();
include "koneksi.php";

$email = $_POST["email"];
$password = $_POST["password"];

$query = mysqli_query($connection, "SELECT * FROM user WHERE email='$email'") or die(mysqli_error($connection));
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $row = mysqli_fetch_assoc($query);

    if ($password == $row["password"]) {
        $token = generateToken();
        $_SESSION["email"] = $email;
        $_SESSION["token"] = $token;

        $update_token_query = mysqli_query($connection, "UPDATE user SET api_token='$token' WHERE email='$email'") or die(mysqli_error($connection));

        header("location:inbox.php");
    } else {
        echo "
        <script>
        alert('Login gagal! Username atau password Anda salah.');
        document.location.href = 'login.php';
        </script>
        ";
    }
} else {
    echo "
        <script>
        alert('Login gagal! Username atau password Anda salah.');
        document.location.href = 'login.php';
        </script>
    ";
}
?>
