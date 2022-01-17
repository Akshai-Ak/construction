<?php
include(__DIR__ . './_db/config.php');
$db_table = 'plot_numbers';
if ($_POST['project_id']) {
    $sql = mysqli_query($database->connection, "SELECT * FROM $db_table where booking_status=0 and project_id=" . $_POST['project_id']);
    $rows = mysqli_num_rows($sql);
    echo $rows;
    if ($rows > 0) {
        echo '<option value="">Select Plot Number</option>';
        while ($row = $sql->fetch_assoc()) {
            echo '<option value=' . $row['id'] . '>' . $row['plot_number'] . '</option>';
        }
    } else {
        echo '<option>Select Plot Number </option>';
    }
} else if ($_GET['plot_number']) {
    header("Location:http://construction.test/_template/_booking.php?plot_number=41");
    // header("Location:_booking.php");
    // echo "hi";
    // $sql = mysqli_query($database->connection, "SELECT * FROM $db_table where booking_status=0 and plot_number=" . $_GET['project_id']);
    // $rows = mysqli_num_rows($sql);
    // echo $rows;
    // if ($rows > 0) {
    //     echo '<option value="">Select Plot Number</option>';
    //     while ($row = $sql->fetch_assoc()) {
    //         echo '<option value=' . $row['id'] . '>' . $row['plot_number'] . '</option>';
    //     }
    // } else {
    //     echo '<option>Select Plot Number </option>';
    // }
}
