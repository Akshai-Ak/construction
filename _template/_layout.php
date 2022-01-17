<?php session_set_cookie_params(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php
    include(__DIR__ . './_header.php')
    ?>
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active ">
                    <img class="d-block" src="http://copielasalle.com/wp-content/uploads/2017/01/Copie-Plan-1.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h3 class="text-center">KVA NEW PORT CITY</h3>
                        <h5 class="text-cente">HOME-LAYOUTS</h5>
                    </div>
                </div>
                <div class="card-img-overlay text-white  overlay-dark">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-6 plot">
                <img class="layout-detail" src="https://www.theprestigecity.gen.in/blog/project/plots-in-sarjapur.webp" alt="">
            </div>
            <div class="col-lg-6">
                <h4 class="text-center kva-highlits">KVA NEW PORT CITY</h4>
                <ul class="text-center plot-details">
                    <li>DTPC Approved</li>
                    <li>KVA Organic Gardnen</li>
                    <li>Located In Tuticorin</li>
                    <li>Eco Friendly Environment</li>
                    <li>Neary By Railway Station</li>
                    <li>Starts From Rs ** Laksh Onwards</li>
                    <li>Plont Range From **SQFT - ** SQFT</li>
                    <li>KVA Kids Palay Area and Artifical Water Falls</li>
                </ul>
                <div class="text-center">
                    <?php
                    if (isset($_SESSION['name']) && isset($_SESSION['pass'])) {
                    ?>
                        <a href="./_booking.php" type="button" class="layout-booking"><i class="fa fa-arrow-circle-o-right mr-2" aria-hidden="true"></i>Book Now</a>
                    <?php } else {
                    ?>
                        <button class="layout-booking" data-toggle="modal" data-target="#Login"><i class="fa fa-arrow-circle-o-right mr-2" aria-hidden="true"></i>Book Now</button>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <!-- <section>
        <div class="container-fluid layout-img pt-5">
            <h3 class="text-center mb-4">GALLERY</h3>
            <a href="../assets/images/LAYOUT NPC.jpg" target="_blank"><img class="layout-gallery" src="../assets/images/LAYOUT NPC.jpg" alt=""></a>
            <h4 class="text-center mt-4 pb-5">LAYOUT</h4>
        </div>
    </section> -->
    <section>
        <div class="container-fluid -img pt-5">
            <h3 class="text-center mb-4">BOOK YOUR PLOTS HERE</h3>
            <img class=" book-layout" src="../assets/images/LAYOUT NPC 1.jpg" alt="">
            <!-- <h4 class="text-center mt-4 pb-5">LAYOUT</h4> -->
        </div>
    </section>
    <div class="container-fluid">
        <div class="row enquire ">
            <img src="https://www.casagrand.co.in/wp-content/themes/casagrand2018/img/enquirenw-bg.jpg" alt="">
            <div class="enquire-detail text-center">
                <figcaption class="text-center">
                    <h2>INTRESTED IN THIS PROJECT!!</h2>
                    <p>THEN BOOK NOW</p>
                </figcaption>
                <div class="row">
                    <!-- <input type="text" class="w-100 input mt-5" name="cust_name" id="cust_name" pattern="^[a-zA-Z\s\.]+$" placeholder="Name" required="" data-error="Required field"> -->
                    <!-- <input type="text" class="w-100 input mt-5" name="cust_name" id="cust_name" pattern="^[a-zA-Z\s\.]+$" placeholder="Name" required="" data-error="Required field">
                    <input type="text" class="w-100 input mt-5" name="cust_name" id="cust_name" pattern="^[a-zA-Z\s\.]+$" placeholder="Name" required="" data-error="Required field"> -->
                </div>

                <!-- <h2>ENQUIRE NOW</h2>
                <p>I'M INTRESTED IN THIS PROJECT!!</p> -->
            </div>

        </div>
    </div>
    <script src="../assets/css/bootstrap/jquery.min.js">
    </script>
    <script src="../assets/css/bootstrap/popper.min.js"></script>
    <script src="../assets/css/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script type="text/javascript">
        $(".login").click(function name(params) {
            console.log("layout");
            $('.login-btn').attr('name', 'login')
            $('.login-btn').attr('value', 'login')
        })
        $(".layout-booking").click(function name(params) {
            $('.login-btn').attr('name', 'booking')
            $('.login-btn').attr('value', 'booking')
        })
    </script>
</body>

</html>