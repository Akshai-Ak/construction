<?php
session_set_cookie_params(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <?php include(__DIR__ . "./_template/_header.php") ?>
  <div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner ">
        <div class="carousel-item active ">
          <img class="d-block" src="http://www.arclaw.com.my/wp-content/uploads/2020/04/Construction.jpg" alt="First slide">
          <div class="carousel-caption">
            <h3 class="text-center">KVA NEW PORT CITY</h3>
            <h1 class="text-center dtcp">DTCP Approved Housing Plots</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" src="https://cdn.archilovers.com/projects/2e054375-7086-464a-befb-83552ea7d080.jpg" alt="Second slide">
          <div class="carousel-caption">
            <h3 class="text-center">KVA NEW PORT CITY</h3>
            <h1 class="text-center dtcp">DTCP Approved Housing Plots</h1>
          </div>
        </div>
        <div class="card-img-overlay text-white  overlay-dark">
        </div>
      </div>
    </div>
  </div>
  <!--about -S-->
  <div class="container" data-aos="fade-up" data-aos-duration="2000">
    <div class="row about pb-5">
      <div class="col-lg-5">
        <h2 class="text-uppercase heading border-bottom mb-4 text-left">Who We Are</h2>
        <p>KVA Assets & Properties India Pvt Ltd is one of the pioneers in South India to indulge in activities that are for the welfare of those who are in need.</p>
        <button class="about-btn">Know More</button>
        <!-- <a href="" type=" button"></a> -->
      </div>
      <div class="col-lg-7">
        <img class="about-img" src="https://preview.colorlib.com/theme/pivot/img/xwork_thumb_1.jpg.pagespeed.ic.Yi04DZRdKu.webp" alt="">
      </div>
    </div>
  </div>
  <!--about -E-->
  <!-- Projects S-->
  <section class="bg-light border-t">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2 class=" heading border-bottom mb-4" id="project">OUR PROJECTS</h2>
          <p class=" pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloribus obcaecati odio inventore impedit excepturi harum ab, natus veritatis assumenda deleniti sapiente aperiam aliquid accusamus officia laudantium voluptates maxime quaerat.</p>
        </div>
      </div>
      <div class="row mt-3 mb-3">
        <div class="col-lg-5">
          <div class="content">
            <a href="./_template/_layout.php">
              <div class="content-overlay"></div>
              <a href=""><img class="content-image layout" src="./assets/images/LAYOUT NPC.jpg" alt=""></a>

              <div class="content-details fadeIn-bottom">
                <h3 class="content-title">VIEW LAYOUT</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="content">
            <a href="./_template/_layout.php">
              <div class="content-overlay"></div>
              <a href=""><img class="content-image layout" src="./assets/images/LAYOUT NPC.jpg" alt=""></a>
              <div class="content-details fadeIn-bottom">
                <h3 class="content-title">VIEW LAYOUT</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Projects E-->
  <?php include(__DIR__ . "./_template/_footer.php") ?>
  <script src="./assets/css/bootstrap/jquery.min.js">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./assets/css/bootstrap/popper.min.js"></script>
  <script src="./assets/css/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/js/script.js"></script>
</body>

</html>