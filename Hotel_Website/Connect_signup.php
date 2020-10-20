<?php include("../Templates/connection.php");
if (isset($_POST['Submit'])) {
    $firstName = mysqli_real_escape_String($con, $_POST['firstname']);
    $lastName = mysqli_real_escape_String($con, $_POST['lastname']);
    $email = mysqli_real_escape_String($con, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tpN = mysqli_real_escape_String($con, $_POST['contactNum']);
    $sql = "INSERT INTO customer (First_Name,Last_Name,Email,Password,Contact_No) VALUES (' $firstName ','$lastName ',' $email ','$password ',' $tpN ')";
    mysqli_query($con, $sql);
    echo "registration Successfull";
    header('Location:../index.php');
}
