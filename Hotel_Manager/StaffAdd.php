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
    
    $empID=$_POST['empID'];
    $empFname=$_POST['empFname'];
    $empSname=$_POST['empSname'];
    $empEmail=$_POST['empEmail'];    
    $empPass=$_POST['empPass'];    
    $empContact=$_POST['empContact'];
    $empType=$_POST['empType'];

    $sql="INSERT into employee(Employee_ID,First_Name,Last_Name,Email,Password,Contact_No,User_Role) VALUES ('".$empID."','".$empFname."','".$empSname."','".$empEmail."','".$empPass."','".$empContact."','".$empType."')";
    $query_run = mysqli_query($con,$sql);

    if ($query_run) {
		echo "<script>
		alert('New Employee Has been Added');
		window.location.href='HotelManagerManageStaff.php';
		</script>";
	} else {
		echo '<script> alert("Data Not Added") </script>';
	}
}
<<<<<<< HEAD
?>    
>>>>>>> 93cba57f3033efbbf4850db342ebeed992886703
=======
?>  

>>>>>>> aa343214f299f5100baa68ba394797cb1643a1ab
