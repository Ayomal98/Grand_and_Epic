<? php

    if(isset($_POST['Submit-btn'])){
        if($_POST['email']=='ayomalpraveen33@gmail.com' && $_POST['password']=='abcd1234'){
            session_start();
            header("location:www.google.com");
        }else{
            header("location:#");
        }
    }
?>