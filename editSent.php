<?php
session_start();

function generateToken() {
  return bin2hex(random_bytes(16));
}

include "koneksi.php";

if (empty($_SESSION["email"])) {
  echo "<script>alert('Anda belum login. Silakan login terlebih dahulu.'); document.location.href = 'login.php'; </script>";
}

$id_mail = $_GET['id_mails']; // Ambil id email yang akan diubah dari URL

$query = "SELECT * FROM mails WHERE id_mails = '$id_mail' AND sender = '{$_SESSION['email']}'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
  echo "<script>alert('Email tidak ditemukan atau Anda tidak memiliki izin untuk mengedit.'); document.location.href = 'sent.php'; </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Mails</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      font-family: Poppins;
    }

    .btn-dark {
      background-color: #053144;
      color: #fff;
    }

    .btn-primary {
      background-color: #053144;
      color: #fff;
    }
  </style>
</head>

<body style="background-color:#DFEEF4" ;>
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
  <form action="editSentProses.php" method="POST" enctype="multipart/form-data">
    <div class="container-md" style="max-width: 600px; padding-top: 110px; background-color: #92ABB7; padding-bottom: 20px;">
      <div class="row">
        <div class="col-md-12">
          <input type="hidden" name="id_mails" value="<?php echo $data['id_mails']; ?>">
          <input type="hidden" name="sender" value="<?php echo $data['sender']; ?>">
          <input type="hidden" name="receiver" value="<?php echo $data['receiver']; ?>">
          <div class="form-group">
            <label for="sender" style="color: #053144;">Pengirim</label>
            <input type="text" value="<?php echo $data['sender']; ?>" class="form-control" id="sender" placeholder="Email pengirim" disabled>
          </div>
          <div class="form-group">
            <label for="receiver" style="color: #053144;">Kepada</label>
            <input type="text" value="<?php echo $data['receiver']; ?>" class="form-control" id="receiver" placeholder="Email tujuan" disabled>
          </div>
          <div class="form-group">
            <label for="subject" style="color: #053144;">Subject</label>
            <input type="text" name="subject" value="<?php echo $data['subject']; ?>" class="form-control" id="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <label for="message" style="color: #053144;">Pesan</label>
            <textarea class="form-control" name="message" id="message" rows="10"><?php echo $data['message']; ?></textarea>
          </div>
        </div>
      </div>
      <div class="col-md-12" style="padding-top: 20px;">
        <div class="col-md-12 d-grid">
          <button type="submit" class="btn btn-primary btn-block">
            <div class="d-flex justify-content-center align-items-center">
              <span>Save Changes</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send ms-2" viewBox="0 0 16 16">
                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
              </svg>
            </div>
          </button>
        </div>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>