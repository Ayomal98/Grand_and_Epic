<? php require_once("./Templates/connection.php");
include("./Hotel_Website/connect_login.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand & Epic Hotel</title>
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>
    <div class="header-container" id="header-container">

        <a href="" onclick="openSlideMenu()">
            <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
            </svg>
            <span class="heading">| Menu</span>
        </a>



        <div class="side-nav" id="side-nav">
            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a><br />
            <a href="#">Home</a><br /><br />
            <a href="#">Staying-In</a><br /><br />
            <a href="#">Dining</a><br /><br />
            <a href="#">Offers</a><br /><br />
            <a href="#">Events</a>

        </div>

        <div class="text-container">
            <span class="text1">Grand &</span>
            <span class="text2">Epic
            </span>
        </div>
        <input type="submit" value="Log-In" name="Log-In" class="btn login-btn" id="btn-login" onclick="openLoginForm()"></a>
        <input type="submit" value="Sign-Up" name="Sign-Up" class="btn signup-btn" id="btn-submit">
        <div class="bg-modal">
            <div class="modal-content">
                <div class="close">+</div>
                <img src="Images/download.png" alt="" class="customer-logo">
                <h3 class="login-heading">Log-IN</h3>
                <form action="./Hotel_Website/connect_login.php" method="post">
                    <input type="text" name="email" placeholder="Email" class="inputs" required>
                    <input type="password" name="password" placeholder="password" class="inputs" required>
                    <a href=""><span style="font-weight: bold; color:black;">Forgot your password ?</span></a><br />
                    <input type="submit" value="Submit" name="Submit-btn" class="log-btn submit">
                    <input type="reset" value="Cancel" name="Cancel-btn" class="log-btn cancel">

                </form>
            </div>
        </div>


    </div>
    <script src="Javascript/script.js"></script>
</body>

</html>