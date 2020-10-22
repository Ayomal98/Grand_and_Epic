<?php include("../Templates/connection.php");
$boolTrue = TRUE;
$boolFalse = False;
if (isset($_POST['confirm-book-btn'])) {
    $customername = mysqli_real_escape_String($con, $_POST['customer-name']);
    $emailaddress = mysqli_real_escape_string($con, $_POST['customer-email']);
    $numguests = mysqli_real_escape_string($con, $_POST['number-of-guests']);
    $mealperiod = mysqli_real_escape_string($con, $_POST['Meal-Period']);
    $tableno = mysqli_real_escape_string($con, $_POST['table-no']);
    $timeperiod;
    if ($mealperiod == 'Breakfast') {
        $timeperiod = mysqli_real_escape_string($con, $_POST['breakfast-times']);
    }
    if ($mealperiod == 'Lunch') {
        $timeperiod = mysqli_real_escape_string($con, $_POST['lunch-times']);
    }
    if ($mealperiod == 'Dinner') {
        $timeperiod = mysqli_real_escape_string($con, $_POST['dinner-times']);
    }
    $date = mysqli_real_escape_string($con, $_POST['Dine-in-date']);
    $query = "INSERT INTO dinein_booking (Table_No,Customer_email,Customer_Name,Num_Guests,Meal_Period,Date,Time) VALUES ('" . $tableno . "','" . $emailaddress . "','" . $customername . "','" . $numguests . "','" . $mealperiod . "','" . $date . "','" . $timeperiod . "') ";
    $insertTablesQuery = "INSERT INTO tables (Table_No,Time,Date,isBooked) VALUES ('" . $tableno . "','" . $timeperiod . "','" . $date . "','" . $boolTrue . "')";
    mysqli_query($con, $insertTablesQuery);
    if ($con->query($query) === TRUE) {
        header("location:HomePage-login.php");
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }
}
