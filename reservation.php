<!DOCTYPE html>
<html>

<head>
  <title>Reservation</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <br>
  <div class="container">
  <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h1>Reservation</h1>

          <?php
          session_start();
          if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
            print " <p style= 'color: red';>$message</p><br>";
          }
          ?>
          <form action="connectReservation.php" method="post">
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" id="date" name="date" required />
            </div>
            <div class="form-group">
              <label for="date">Time</label>
              <input type="text" class="form-control" id="time" name="time" minlength="3" maxlength="100" required />
            </div>
            <br>
            <div class="form-group">
              <label for="pick">Pick-up Location</label>
              <input type="text" class="form-control" id="pick" name="pick" minlength="3" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="drop">Drop Location</label>
              <input type="text" class="form-control" id="drop" name="drop" minlength="3" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="info">Additional Info</label>
              <input type="text" class="form-control" id="info" name="info" />
            </div>
            <br>
            <input type="submit" class="btn btn-primary" />
          </form>
        </div>
        </div>
  </div>
</body>

</html>