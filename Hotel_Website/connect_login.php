<?php include("../Templates/connection.php");
session_start();
if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['User-Type'];
    $query = '';
    if ($usertype == 'Employee') {
        $query = "SELECT Email,Password,User_Role FROM employee WHERE Email='" . $email . "' AND Password='" . $password . "'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row["User_Role"] == "Admin") {
                header('Location:../Admin/AdminDashboard.html');
                $_SESSION["First_Name"] = $row["First_Name"];
            } elseif ($row["User_Role"] == "Hotel Manager") {
                header('Location:../Hotel_Manager/HotelManagerDashboard.html');
                $_SESSION["First_Name"] = $row["First_Name"];
            } elseif ($row["User_Role"] == "Hotel Supervisor") {
                header('Location:../Hotel_Supervisor/SupervisorDashboard.html');
                $_SESSION["First_Name"] = $row["First_Name"];
            }
        }
    } else {
        $query = "SELECT Email,Password FROM customer WHERE Email='" . $email . "' AND Password='" . $password . "'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            echo $row["First_Name"];
            $_SESSION["First_Name"] = $row["First_Name"];
            echo $_SESSION["First Name"];
            header('Location: ../index.php');
        } else {
        }
    }
}
