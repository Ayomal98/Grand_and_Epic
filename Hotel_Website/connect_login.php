<?php include("../Templates/connection.php");
session_start();
if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['User-Type'];
    $query = '';
    if ($usertype == 'Employee') {
        $query = "SELECT First_Name,Email,Password,User_Role FROM employee WHERE Email='" . $email . "' AND Password='" . $password . "'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row["User_Role"] == "Admin") {
                $_SESSION['username'] = $row['First_Name'];
                header('Location:../Admin/AdminDashboard.php');
            } elseif ($row["User_Role"] == "Hotel Manager") {
                $_SESSION['username'] = $row['First_Name'];
                header('Location:../Hotel_Manager/HotelManagerDashboard.php');
                $_SESSION["First_Name"] = $row["First_Name"];
            } elseif ($row["User_Role"] == "Hotel Supervisor") {
                $_SESSION['username'] = $row['First_Name'];
                header('Location:../Hotel_Supervisor/SupervisorDashboard.php');
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
