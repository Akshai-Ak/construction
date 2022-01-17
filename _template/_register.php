<?php
require_once(__DIR__ . './_db/config.php');
$db_table = 'users';
if (isset($_POST['user_name']) && ($_POST['email'])  && ($_POST['secret_key']) && ($_POST['contact']) && ($_POST['location']) && ($_POST['city'])) {
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $pwd = $_POST['secret_key'];
    $password = password_hash($pwd, PASSWORD_ARGON2I);
    $phone = $_POST['contact'];
    $location = $_POST['location'];
    $city = $_POST['city'];
    $data = array("name" => $name, "email" => $email, "password" => $password, "phone_number" => $phone, "address" => $location, 'city' => $city,);
    $key = array_keys($data);
    $value = array_values($data);
    $sql = "INSERT INTO $db_table (" . implode(',', $key) . ") VALUES('" . implode("','", $value) . "')";
    // print_r( $sql);
    if (mysqli_query($database->connection, $sql)) {
        $_SESSION['name'] = $email;
        $_SESSION['pass'] = $pwd;
    } else {
        // echo "wrong";
    }
    // echo $_SESSION['email'], $_SESSION['pwd'];
}
?>
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SIGNUP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">User Name:</label>
                        <input type="text" class="form-control" id="recipient-name" name="user_name" required>
                    </div>
                    <div class=" form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class=" form-group">
                        <label for="pwd" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="secret_key" required>
                    </div>
                    <div class="form-group">
                        <label for="ph" class="col-form-label">Phone:</label>
                        <input type="number" class="form-control" id="ph" name="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-form-label">City:</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <input type="submit" class="btn btn-success" value="Sign Up">
                    <!-- <button type="button" class="btn btn-success">Sign Up</button> -->
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>