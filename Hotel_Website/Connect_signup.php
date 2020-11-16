<?php include("../Templates/connection.php");
if (isset($_POST['Submit'])) {
  $firstName = mysqli_real_escape_String($con, $_POST['firstname']);
  $lastName = mysqli_real_escape_String($con, $_POST['lastname']);
  $email = mysqli_real_escape_String($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $tpN = mysqli_real_escape_String($con, $_POST['contactNum']);
  $sql = "INSERT INTO customer (First_Name,Last_Name,Email,Password,Contact_No) VALUES (' $firstName ','$lastName ',' $email ','$password ',' $tpN ')";
  mysqli_query($con, $sql);
  echo "<script>
            alert('Your Account has been successfully created');
            window.location.href='../index.php';
          </script>";
}
