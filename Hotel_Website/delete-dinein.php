<?php include("../Templates/connection.php");
include("myreservations.php");
$email = $_SESSION['User_Email'];
$deletequerybook = "DELETE FROM dinein_booking WHERE Customer_Email='" . $email . "' AND Table_No='" . $table_no . "' AND Date='" . $date . "' AND Time='" . $time . "'";
/*$deletetablebook = "DELETE FROM tables WHERE Table_No='" . $table_no . "' AND Time='" . $time . "' AND Date='" . $date . "'";*/
if ($con->query($deletequerybook) === TRUE) {
    header("location:HomePage-login.php");
}
// mysqli_query($con, $deletequerybook);
/*
mysqli_query($con, $deletetablebook);
*/