<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
      <a  class="navbar-brand" href="#"><img src="images/logo.svg" alt=""> </a> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="login.php">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Prices</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link disabled " href="#">About Us</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>			
          </ul>	
      </div>
    </div>
  </nav>
  <!--header-->

  <div class="banner bg-light">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-2">
          <p>We're Open 24/7</p>
        </div>
        <div class="col-md-2">
          <p>Call: +1 647 629 5647</p>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <br>
    <img class="intro" src="images/download.jpg" alt="">
    <div class="row">
      <div class="col-sm-4 offset-md-8 reservation col-sm-12">
        <form> 
          <div class="form-group">
            <label for="formGroupExampleInput">Your Location</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Airport Totronto">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Your Destination</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="The Hockey Hall of Fame">
          </div>
          <br>
          <a href="login.php"><button type="button" class="btn btn-outline-dark" >Reservation</button></a>
        </form>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="text-center title">Welcome to Pearson Air Limo</h1>
    </div>
    <br>
    <div class="col-md-8">
      <h2>Why should do choose us</h2>
      <p>stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
        took a galley of type and scrambled it to make a type specimen book. It has survived not only five ce</p>
    </div>
    <br>
    <br>
    <h3 class="text-center">Go Anywhere 24/7 With Our Taxis in Toronto</h3>
    <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
      corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
      qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
      distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
      placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut
      officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
      recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut </p>
    <div class="row justify-content-center">
  <button  class="btn btn-outline-dark">Make a Reservation!</button>
      <br>
      <br>
    </div>
    <br>
    <br>
    <h3 class="row justify-content-center">Our Fleets</h3>
    <div class="row justify-content-sm-center">
      <div class="car col-lg-3 text-center">
        <img class="car" src="images/car.jpg" alt="">
        <p class="text-center">BMW Model 1</p>
        <p class="text-center">Our sedans are well-maintained and reliable! If you are looking for a reliable</p>
      </div>
      <div class="car col-lg-3 text-center">
        <img class="car" src="images/car.jpg" alt="">
        <p class="">BMW Model 1</p>
        <p class="">Our sedans are well-maintained and reliable! If you are looking for a reliable</p>
      </div>
      <div class="car col-lg-3 text-center">
        <img class="car" src="images/car.jpg" alt="">
        <p class="text-center">BMW Model 1</p>
        <p class="text-center">Our sedans are well-maintained and reliable! If you are looking for a reliable</p>
      </div>
      <div class="car col-lg-3 text-center">
        <img class="car" src="images/car.jpg" alt="">
        <p class="text-center">BMW Model 1</p>
        <p class="text-center">Our sedans are well-maintained and reliable! If you are looking for a reliable</p>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p> Toronto, To 10012, Canada</p>
            <p>

              info@example.com
            </p>
            <p>+ 01 234 567 88</p>
            <p> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2021 Copyright: Hishor Ramanathan
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>