<?php include("../Templates/connection.php");
session_start();
$username = $_SESSION['First_Name'];
$email = $_SESSION['User_Email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand & Epic</title>
    <link rel="stylesheet" href="../Css/style.css">
    <script src="https://kit.fontawesome.com/1d5f2c83e1.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #394359 ;">
    <div class="header-container-userReservations">
        <?php include("sticky-nav.php"); ?>
        <?php include("side-nav-login.php"); ?>

        <span class="fa fa-user" style="position:absolute;top:20px;right:40px;font-size:60px;color:white"><span class="far fa-caret-square-down" style="font-size:20px;margin-left:10px;" onclick="funcUserDetails()"></span></span>
        <!--<br><span style="position:absolute;top:100px;right:40px;font-size:20px;color:white"></span>-->
        <div id="user-detail-container">
            <span class="fa fa-window-close" style="margin-left:130px;" onclick="funcCloseUserDetails()"></span>
            <p style="margin-bottom: 10px;"><?php echo "Logged in as $username"; ?></P>
            <hr style="color:teal">
            <a href="logout.php"><input type="button" value="Log-out" name="logout-btn" style="margin-top:5px;margin-left:85px;padding:5px;background-color:black;color:white;border-radius:5px;cursor:pointer"></a>

        </div>
    </div>
    <div class="upcoming-reservation">
        <h2 style="color:white">Upcoming Reservations</h2>
        <?php
        $query = "SELECT Table_No,Date,Time,Num_Guests FROM dinein_booking WHERE Customer_Email='" . $email . "'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $table_no = $row['Table_No'];
                $date = $row['Date'];
                $time = $row['Time'];
                $numguests = $row['Num_Guests'];
                echo "<div class=\"reservation-box\"><span>$table_no</span><span>$date</span><span>$time</span><span>$numguests</span></div>";
            }
        }

        ?>
    </div>
    <script src="../Javascript/script.js"></script>
    <script src="../Javascript/sticky-nav.js"></script>
    <script>
        function funcUserDetails() {
            document.getElementById('user-detail-container').style.display = "block";
        }

        function funcCloseUserDetails() {
            document.getElementById('user-detail-container').style.display = "none";
        }
    </script>
</body>

</html>