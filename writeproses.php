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

$sender = $_SESSION["email"];
$receiver = $_POST["receiver"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$date_mails = date('Y-m-d H:i:s'); // Menggunakan timestamp saat ini

// Data yang akan dikirim ke API
$data = array(
    'sender' => $sender,
    'receiver' => $receiver,
    'subject' => $subject,
    'message' => $message,
    'date_mails' => $date_mails
);

// Mendapatkan token dari sesi
$token = $_SESSION["token"];

// Inisialisasi cURL
$ch = curl_init('https://hushtalk-api-dot-e-11-415004.et.r.appspot.com/post_mails.php');

// Set opsi cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer ' . $token
));

// Eksekusi request cURL
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Decode response dari API
$responseData = json_decode($response, true);

if (isset($responseData['message'])) {
    echo "
        <script>
            alert('Email berhasil terkirim.');
            document.location.href = 'sent.php';
        </script>
    ";
} else {
    echo "Email gagal dikirim: " . $responseData['error'];
}
?>
