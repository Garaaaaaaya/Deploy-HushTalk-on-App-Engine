<?php
session_start();

if (empty($_SESSION["email"])) {
    echo "<script>alert('Anda belum login. Silakan login terlebih dahulu.'); document.location.href = 'login.php'; </script>";
    exit();
}

// Pastikan token disimpan dalam sesi setelah login berhasil
if (empty($_SESSION["token"])) {
    echo "<script>alert('Token tidak ditemukan. Silakan login kembali.'); document.location.href = 'login.php'; </script>";
    exit();
}

include "koneksi.php";

$id_mails = $_POST['id_mails'];
$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date_mails = date('Y-m-d H:i:s'); // Menggunakan timestamp saat ini

// Sanitasi input data untuk mencegah SQL injection
$subject = mysqli_real_escape_string($connection, $subject);
$message = mysqli_real_escape_string($connection, $message);

// Menyiapkan data dalam format application/x-www-form-urlencoded
$data = http_build_query(array(
    'id_mails' => $id_mails,
    'sender' => $sender,
    'receiver' => $receiver,
    'subject' => $subject,
    'message' => $message,
    'date_mails' => $date_mails
));

// Mendapatkan token dari sesi
$token = $_SESSION["token"];

// Inisialisasi cURL
$ch = curl_init('https://hushtalk-api-dot-e-11-415004.et.r.appspot.com/put_mails.php');

// Mengatur opsi cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer ' . $token
));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Eksekusi cURL
$response = curl_exec($ch);

// Periksa kesalahan cURL
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    $responseData = json_decode($response, true);
    if (isset($responseData['message'])) {
        echo "<script>alert('Perubahan berhasil disimpan.'); document.location.href = 'sent.php'; </script>";
    } else {
        echo "Gagal menyimpan perubahan: " . $responseData['error'];
    }
}

// Tutup cURL
curl_close($ch);
?>
