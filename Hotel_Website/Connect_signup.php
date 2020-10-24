<? php include("./Templates/connection.php");
if(isset($_POST['Submit'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $tpN=$_POST['contactNum'];
    $sql="INSERT into customer(First_Name,Last_Name,Email,Password,Contact_No) VALUES ('".$firstName."','".$lastName."','".$email."','".$password."','".$tpN."')";
    $result=mysqli_query($sql,$con);
}

?>    