<?php include("../Templates/connection.php");
if (isset($_POST['update'])) {
    $mealname = $_POST['mealname'];
    $price = $_POST['price'];
    $mealplan = $_POST['mealplan'];
    $mealtype = $_POST['mealtype'];
    $mealimage = addslashes(file_get_contents($_FILES["mealimage"]["tmp_name"]));
    echo $mealname;
    $query = "UPDATE `meals` SET Meals_Name='$mealname',Price='$price',Meal_Plan='$mealname',Meal_Type='$mealtype' where Meals_ID='$_POST[mealid]'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {

        echo '<script> alert("Data Updated") </script>';
    } else {
        echo '<script> alert("Data Not Updated") </script>';
    }
}
