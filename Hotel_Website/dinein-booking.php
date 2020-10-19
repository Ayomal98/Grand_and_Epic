<?php include("../Templates/connection.php");

if (isset($_POST['confirm-btn'])) {
    $customername = mysqli_real_escape_String($con, $_POST['customer-name']);
    $emailaddress = mysqli_real_escape_string($con, $_POST['customer-email']);
    $noguests = mysqli_real_escape_string($con, $_POST['number-of-guests']);
    $mealperiod = mysqli_real_escape_string($con, $_POST['Meal-Periods']);
    $date = mysqli_real_escape_string($con, $_POST['Dine-in-date']);
    $time = mysqli_real_escape_string($con, $_POST['Dine-in-time']);
    $tableno;
}
