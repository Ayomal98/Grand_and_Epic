<?php include("../Templates/connection.php");
$number_of_tables = 15;
for ($x = 1; $x <= $number_of_tables; $x++) {
    echo "<div class=\"dot\"><span>$x</span></div>";
}
