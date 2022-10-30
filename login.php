<!DOCTYPE html>
<html>

<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <br>
  <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4">

          <h1>Sign In</h1>
        

       
        <?php
              session_start();
              if (isset($_SESSION['message'])) {
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
                print " <p style= 'color: red';>$message</p><br>";
              }
              ?>
          <form action="connectLogin.php" method="post">
            <div class="form-group">
             
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" required />
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required />
            </div>
            <br>
            <input type="submit" class="btn btn-primary" />
          </form>
          <br>
          <p>Do you need to create a account?</p>


          <p>Register you <a href="register.php">here</a></p>


 
        </div>
       
      </div>
    </div>
  </div>
  </div>
</body>

</html>