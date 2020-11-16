<?php include("../Templates/connection.php");
<<<<<<< HEAD
if (isset($_POST['ADD'])) {

    $empFname = $_POST['empFname'];
    $empSname = $_POST['empSname'];
    $empEmail = $_POST['empEmail'];
    $empPass = $_POST['empPass'];
    $empContact = $_POST['empContact'];
    $empType = $_POST['empType'];

    $sql = "INSERT into employee(First_Name,Last_Name,Email,Password,Contact_No,User_Role) VALUES ('" . $empFname . "','" . $empSname . "','" . $empEmail . "','" . $empPass . "','" . $empContact . "','" . $empType . "')";
    if ($con->query($sql) === TRUE) {
        echo "<script>
            alert('Employee Account Has been created');
            window.location.href='HotelManagerManageStaff.php';
            </script>";
    } else {
        echo "Error :" . $sql . "<br>" . $con->error;
    }
    echo "<script type = 'text/javascript'> alert(\"Added Successfully\");</script>";
}
=======
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
>>>>>>> 93cba57f3033efbbf4850db342ebeed992886703
