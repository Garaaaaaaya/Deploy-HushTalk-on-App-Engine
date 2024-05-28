<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUp</title>
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

    footer {
      color: #ffffff;
      text-align: center;
      padding: 10px;
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    .card {
      border-radius: 2rem;
    }

    .card-body {
      padding: 2rem;
    }

    .form-outline {
      margin-bottom: 1.5rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col col-xl-6">
        <div class="card shadow">
          <div class="card-body p-5">
            <form method="POST" action="signupproses.php">
              <div class="d-flex justify-content-center mb-4">
                <img src="assets/logo2.svg" alt="Logo HushTalk" style="width: 150px;">
              </div>
              <h5 class="fw-normal mb-3" style="letter-spacing: 1px;">Sign Up your account</h5>
              <div class="form-outline">
                <label class="form-label" for="name">Your Name</label>
                <input type="text" id="name" class="form-control form-control-lg" placeholder="Akari" name="name" required />
              </div>
              <div class="form-outline">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control form-control-lg" placeholder="Akari@gmail.com" name="email" required />
              </div>
              <div class="form-outline">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control form-control-lg" placeholder="********" name="password" required />
              </div>
              <div class="form-outline">
                <label class="form-label" for="co_password">Confirm Password</label>
                <input type="password" id="co_password" class="form-control form-control-lg" placeholder="********" name="co_password" required />
              </div>
              <div class="pt-1 mb-4">
                <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Sign Up</button>
              </div>
              <a class="small text-muted" href="login.php">Already have an account? Login</a>
              <br>
              <a href="#!" class="small text-muted">Terms of use.</a>
              <a href="#!" class="small text-muted">Privacy policy</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>&copy; 2023 HushTalk. All rights reserved.</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>
