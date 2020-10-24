<?php include("../Templates/connection.php");
if(isset($_POST['ADD'])){
    
    $empFname=$_POST['empFname'];
    $empSname=$_POST['empSname'];
    $empEmail=$_POST['empEmail'];    
    $empPass=$_POST['empPass'];    
    $empContact=$_POST['empContact'];
    $empType=$_POST['empType'];

    $sql="INSERT into employee(First_Name,Last_Name,Email,Password,Contact_No,User_Role) VALUES ('".$empFname."','".$empSname."','".$empEmail."','".$empPass."','".$empContact."','".$empType."')";
    $result=mysqli_query($sql,$con);
}
?>    