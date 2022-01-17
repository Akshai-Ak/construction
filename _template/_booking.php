<?php
require_once(__DIR__ . './_db/config.php');
session_set_cookie_params(0);
session_start();
$db_table = 'projects';
$table = 'users';
$plot_table = "plot_numbers";
if (isset($_GET['plot_number'])) {
    $project_query = mysqli_query($database->connection, "SELECT * FROM $db_table where id=1");
    $project_result = mysqli_num_rows($project_query);
    if ($project_result == 1) {
        $project_data = mysqli_fetch_array($project_query);
        $project_name = $project_data['project_name'];
    }
} else {
    $sql = mysqli_query($database->connection, "SELECT * FROM $db_table");
    $rows = mysqli_num_rows($sql);
}
$session_id = $_SESSION['id'];
$query = mysqli_query($database->connection, "SELECT name,phone_number FROM $table where id=" . $session_id);
$result = mysqli_num_rows($query);
if ($result == 1) {
    $datas = mysqli_fetch_array($query);
    $name = $datas['name'];
    $phone = $datas['phone_number'];
}
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
                    <img class="d-block" src="https://www.thorntons-law.co.uk/sites/default/files/uploads/media/Banners%202021/Service%20page/BL%20-%20Business%20Sectors%20-%20Construction%20copy%202.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h3 class="text-center">KVA NEW PORT CITY</h3>
                        <h5 class="text-cente">BOOKING</h5>
                    </div>
                </div>
                <div class="card-img-overlay text-white  overlay-dark">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <h4 class="text-center">Please Fill This Form To Book Your Plot</h4>
                <form method="post">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Name:</label>
                        <input type="email" class="form-control" id="recipient-name" name="name" value="<?php echo $name ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="recipient-name" name="email" value="<?php echo $_SESSION['name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mobile:</label>
                        <input type="text" class="form-control" id="recipient-name" name="contact_number" value="<?php echo $phone ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Project:</label>
                        <select class="custom-select" id="project" onchange="fetchPlotNumber(this.value)">
                            <option selected>Select Project</option>
                            <?php if ($_GET['plot_number']) {
                                echo '<option selected>' . $project_name . '</option>';
                            } else {
                                if ($rows > 0) {
                                    while ($row = $sql->fetch_assoc()) {
                                        $project = $row['project_name'];
                                        echo '<option value=' . $row['id'] . '>' . $project . '</option>';
                                    }
                                }
                            } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label" placeholder="Select Plot Number">Plot Number:</label>
                        <select class="custom-select" id="plot">
                            <option id="sel-plot" selected>Select Plot Number</option>
                            <?php if ($_GET['plot_number']) {
                                echo '<option selected>' . $_GET['plot_number'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class=" book-plot mb-5" name="login">BOOK</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="../assets/css/bootstrap/jquery.min.js">
    </script>
    <script src="../assets/css/bootstrap/popper.min.js"></script>
    <script src="../assets/css/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>