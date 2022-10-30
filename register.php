<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <br>
  <div class="container">
  <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h1>Register</h1>

          <?php
          session_start();
          if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
            print " <p style= 'color: red';>$message</p><br>";
          }
          ?>
          <form action="connectRegistrierung.php" method="post">
            <div class="form-group">
              <p>Required Fields*</p>
              <label for="firstName">Name*</label>
              <input type="text" class="form-control" id="firstName" name="firstName" minlength="3" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="lastName">Surname*</label>
              <input type="text" class="form-control" id="lastName" name="lastName" minlength="3" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="gender">Sex</label>
              <div>
                <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male" />man</label>
                <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female" />woman</label>
                <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others" />other</label>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="email">Email*</label>
              <input type="text" class="form-control" id="email" name="email" minlength="5" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="number">Age</label>
              <input type="number" class="form-control" id="age" name="age" />
            </div>
            <div class="form-group">
              <label for="number">Telefonnummer</label>
              <input type="number" class="form-control" id="number" name="number" />
            </div>
            <div class="form-group">
              <label for="password">Password*</label>
              <input type="password" class="form-control" id="password" name="password" minlength="8" maxlength="100" required />
            </div>
            <br>
            <input type="submit" class="btn btn-primary" />
          </form>
          <br>
          <p>Do you already have a account?</p>
          <p>Sign in <a href="login.php">here</a> </p>
        </div>
        </div>
  </div>
</body>

</html>