<?php include("../Templates/connection.php");
if (isset($_POST['update'])) {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Contact_No = $_POST['Contact_No'];
    $User_Role = $_POST['User_Role'];
    echo "<script>alert('$First_Name')</script>";
    $query = "UPDATE employee SET First_Name='$First_Name',Last_Name='$Last_Name',Email='$Email',Contact_No='$Contact_No',User_Role='$User_Role' where Employee_ID='$_POST[Employee_ID]'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo "<script>
                alert('Employee Has been updated');
                window.location.href='HotelManagerManageStaff.php';
                </script>";
    } else {
        echo '<script> alert("Data Not Updated") </script>';
    }
}
