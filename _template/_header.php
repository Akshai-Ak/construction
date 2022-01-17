<?php
include(__DIR__ . "./_login.php");
include(__DIR__ . "./_register.php");
error_reporting(0);
?>
<nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="#"><img class="main-logo" src="../assets/images/KV ASSOCIATED-01.png"></a>
    <button class="navbar-toggler ico" type="button" data-toggle="collapse" data-target="#myNavbarToggler7" aria-controls="myNavbarToggler7" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="collapse navbar-collapse" id="myNavbarToggler7">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-5" href="#">Home</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <?php
            if (isset($_SESSION['name']) && isset($_SESSION['pass'])) {
            ?>
                <li class="nav-item mr-5">
                    <a href="/_template/_logout.php" type=" button" class="btn btn-dark login" value="logout">Logout

                    </a>

                </li>
            <?php
            } else { ?>
                <li class="nav-item mr-5">
                    <input type="button" class="btn btn-dark login" data-toggle="modal" data-target="#Login" value="login">
                </li>
                <li class="nav-item ">
                    <input type="button" class="btn btn-dark signup" data-toggle="modal" data-target="#signup" value="signup">
                </li>
            <?php } ?>

        </ul>

    </div>
</nav>