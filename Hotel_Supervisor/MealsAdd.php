<?php include("../Templates/connection.php");
<<<<<<< HEAD
if (isset($_POST['insert'])) {

    $mealname = $_POST['mealname'];
    $price = $_POST['price'];
    $mealplan = $_POST['mealplan'];
    $mealtype = $_POST['mealtype'];
    $mealimage = addslashes(file_get_contents($_FILES["mealimage"]["tmp_name"]));

    $query = "INSERT INTO meals (Meals_Name, Price, Meal_Plan, Meal_Type, Meal_Image) VALUES ('" . $mealname . "','" . $price . "','" . $mealplan . "','" . $mealtype . "','" . $mealimage . "')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo "<script>
            alert('Food item Has been added');
            window.location.href='SupervisorManageMeals.php';
            </script>";
    } else {
        echo "Meal Not Added";
    }
}
=======
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
>>>>>>> aa343214f299f5100baa68ba394797cb1643a1ab
