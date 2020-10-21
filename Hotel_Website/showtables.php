<?php include("../Templates/connection.php");
$number_of_tables = 16;
$showTablesQuery = "SELECT Table_No,Time,isBooked FROM tables";
$result = mysqli_query($con, $showTablesQuery);
for ($x = 1; $x < $number_of_tables; $x++) {
    echo "<div class=\"dot \"><span>$x</span></div>";
}
