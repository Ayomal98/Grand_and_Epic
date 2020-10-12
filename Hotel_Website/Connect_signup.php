<?php include("../Templates/connection.php");
if (isset($_POST['Submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tpN = $_POST['contactNum'];
    $sql = "INSERT INTO customer (First_Name,Last_Name,Email,Password,Contact_No) VALUES (' $firstName ','$lastName ',' $email ','$password ',' $tpN ')";
    mysqli_query($con, $sql);
    echo "registration Successfull";
    header('Location:../index.php');
}
