<?php
session_start();
//echo $_SESSION['email'];

if (empty($_SESSION["email"])) {
  echo "<script> alert('Anda belum login. Silakan login terlebih dahulu.'); document.location.href = 'login.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inbox</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      font-family: Poppins;
    }

    .btn-dark {
      background-color: #053144;
      color: #fff;
    }
  </style>
</head>

<body style="background-color:#DFEEF4;">
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #053144; padding: 10px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/logo.svg" alt="Logo HushTalk" style="width: 200px;">
        </a>
        <div class="d-flex align-items-center">
          <p class="text-white me-3 mb-0"><?php echo $_SESSION['email']; ?></p>
          <ul class="navbar-nav flex-row">
            <li class="nav-item me-3">
              <a class="nav-link" style="color: #fff; text-decoration: none;" href="inbox.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-inbox-fill" viewBox="0 0 16 16">
                  <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
                </svg> Inbox
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #fff; text-decoration: none;" href="sent.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16">
                  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                </svg> Sent
              </a>
            </li>
          </ul>
          <a class="nav-link text-white" href="logout.php">
            Logout
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5v-8A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
              <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
            </svg>
          </a>
        </div>
      </div>
    </nav>
  </header>
  <div class="container" style="padding-top: 100px;">
    <div style="padding-bottom: 10px; padding-top: 10px;">
      <a href="write.php" class="btn btn-dark btn-lg btn-block" style="color: white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
        </svg> Write
      </a>
    </div>
    <div class="row">
      <div class="col-md-3">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="page" style="background-color: #053144">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-inbox-fill" viewBox="0 0 16 16">
              <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
            </svg> Inbox
          </li>
          <li class="list-group-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16">
              <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
              <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
            </svg> Sent
          </li>
        </ul>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header" style="background-color: #053144">
            <h5 class="mb-0" style="color: #fff">Inbox</h5>
          </div>
          <div class="card-body">
            <table class="table table-hover" style="color: #053144;">
              <thead>
                <tr>
                  <th style="text-align: center;">From</th>
                  <th style="text-align: center;">Subject</th>
                  <th style="text-align: center;">Date</th>
                  <th style="text-align: center;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'koneksi.php';
                $receiver = $_SESSION['email'];
                $token = $_SESSION['token']; // Ambil token dari session

                // Inisialisasi cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://hushtalk-api-dot-e-11-415004.et.r.appspot.com/get_mails.php");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                  'Authorization: Bearer ' . $token
                ));

                // Eksekusi request dan simpan response ke variabel
                $response = curl_exec($ch);
                $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                if ($response === false || $httpcode !== 200) {
                  echo "cURL Error: " . curl_error($ch);
                  curl_close($ch);
                  exit();
                }

                curl_close($ch);

                // Decode response JSON
                $data = json_decode($response, true);

                if ($data === null) {
                  echo "Failed to decode JSON response";
                  exit();
                }

                // Periksa apakah ada data
                if (is_array($data) && count($data) > 0) {
                  foreach ($data as $mail) {
                    if ($mail['receiver'] === $receiver) {
                      echo '<tr style="text-align: center;">'; // Buka baris baru di sini
                      echo '<td style="text-align: center;">' . htmlspecialchars($mail['sender'], ENT_QUOTES, 'UTF-8') . '</td>';
                      echo '<td style="text-align: center;">' . htmlspecialchars($mail['subject'], ENT_QUOTES, 'UTF-8') . '</td>';
                      echo '<td style="text-align: center;">' . htmlspecialchars($mail['date_mails'], ENT_QUOTES, 'UTF-8') . '</td>';
                      echo '<td style="text-align: center;">';
                      echo '<form action="readInboxDecrypt.php" method="GET">';
                      echo '<input type="hidden" name="id_mails" value="' . urlencode($mail['id_mails']) . '">';
                      echo '
                            <button type="submit" class="btn btn-dark btn-lg btn-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M3.5 1a.5.5 0 0 1 .5.5V15a.5.5 0 0 1-1 0V1.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M12.5 1a.5.5 0 0 1 .5.5V15a.5.5 0 0 1-1 0V1.5a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1.5 2a.5.5 0 0 1 .5.5V14a.5.5 0 0 1-1 0V2.5a.5.5 0 0 1 .5-.5zM8 2a.5.5 0 0 1 .5.5V14a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2z"/>
                            </svg>
                            Read
                            </button>
                            ';
                      echo '</form>';
                      echo '</td>';
                      echo '</tr>'; // Tutup baris di sini
                    }
                  }
                } else {
                  echo '<tr><td colspan="4">No mails found.</td></tr>';
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>