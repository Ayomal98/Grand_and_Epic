<?php include("../Templates/connection.php");
if(isset($_POST['insert'])){
    
    $mealname=$_POST['mealname'];
    $price=$_POST['price'];    
    $mealplan=$_POST['mealplan'];    
    $mealtype=$_POST['mealtype'];
    $file = addslashes(file_get_contents($_FILES["mealimage"]["tmp_name"]));

    $query = "INSERT INTO `meals`(`Meals_Name`, `Price`, `Meal_Plan`, `Meal_Type`, `Meal_Image`) VALUES ('$mealname','$price','$mealplan','$mealtype','$mealimage')";
    
    if ($con->query($sql) === TRUE) {
        header("location:SupervisorManageMeals.php");
    } else {
        echo "Error :" . $sql . "<br>" . $con->error;
    }
}

?>    