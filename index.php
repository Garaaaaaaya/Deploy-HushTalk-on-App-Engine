<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HushTalk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #053144;
      font-family: 'Poppins', sans-serif;
    }

    .center-content {
      text-align: center;
    }

    .center-content img {
      width: 300px;
      padding: 20px;
    }

    .center-content .btn {
      font-size: 25px;
      border-radius: 30px;
      margin: 10px;
    }

    footer {
      color: #ffffff;
      text-align: center;
      padding: 10px;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="center-content">
    <img src="assets/logo.svg" alt="Logo HushTalk">
    <div>
      <a href="login.php" class="btn btn-outline-light">Login</a>
      <a href="signup.php" class="btn btn-outline-light">Sign Up</a>
    </div>
  </div>

  <footer>&copy; 2023 HushTalk. All rights reserved.</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>
