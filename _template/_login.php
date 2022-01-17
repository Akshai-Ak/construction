<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="recipient-name" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="recipient-name" name="secret_key" required>
                    </div>
                    <button type="submit" class="btn btn-success login-btn" name="login">Login</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signup" data-dismiss="modal">Sign Up</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-success">Login</button>
            </div> -->
        </div>
    </div>
</div>
<?php
require_once(__DIR__ . './_db/config.php');
$db_table = 'users';
if (isset($_POST['email']) && ($_POST['secret_key'])) {
    $email = $_POST['email'];
    $password = $_POST['secret_key'];
    $sql = mysqli_query($database->connection, "SELECT * FROM $db_table WHERE email='$email'");
    $rows = mysqli_num_rows($sql);
    if ($rows == 1) {
        $row = mysqli_fetch_array($sql);
        if (password_verify($password, $row['password'])) {

            $_SESSION['name'] = $row['email'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            if (isset($_POST['login'])) {
                // $log = $_POST['login'];
                // echo $log;
            } elseif (isset($_POST['booking'])) {
                header("Location:_booking.php");
            } else {
                // echo $_POST['name'];
            }
        } else {
            echo "invalid";
        }
    }
}
?>