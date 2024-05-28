<?php
session_start();

if (!isset($_SESSION['token'])) {
    header("Location: index.php");
    exit;
}

$id_mails = $_GET['id_mails'];
$token = $_SESSION['token']; // Ambil token dari session

if (!$id_mails) {
    echo "
        <script>
            alert('ID email tidak ditemukan.');
            document.location.href = 'sent.php';
        </script>
    ";
    exit;
}

$url = 'https://hushtalk-api-dot-e-11-415004.et.r.appspot.com/delete_mails.php'; // Ganti dengan URL yang sesuai

// Setup cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['id_mails' => $id_mails]));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $token,
));

// Execute request
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Close cURL session
curl_close($ch);

// Decode response
$response_data = json_decode($response, true);

if ($httpcode === 200 && isset($response_data['message'])) {
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'sent.php';
        </script>
    ";
} else {
    $error_message = isset($response_data['error']) ? $response_data['error'] : 'Terjadi kesalahan.';
    echo "
        <script>
            alert('Data Gagal Dihapus! $error_message');
            document.location.href = 'sent.php';
        </script>
    ";
}
?>
