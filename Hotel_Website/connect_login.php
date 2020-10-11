<? php
    if(isset($_POST['Submit-btn'])){
        if($_POST['email']=='ayomalpraveen33@gmail.com' && $_POST['password']=='abcd1234'){
            echo "successfully logged in";
            header("location:../index.php");
        }else{
            header("location:#")
        }
    }
?>