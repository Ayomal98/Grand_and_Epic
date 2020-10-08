<? php include("./Templates/connection.php"); ?>
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

        <a href="#" onclick="openSlideMenu()">
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
        <input type="submit" value="Log-In" name="submit" class="btn login-btn" id="login-btn">
        <input type="submit" value="Sign-Up" name="submit" class="btn signup-btn" id="login-btn">



    </div>
    <script src="Javascript/script.js"></script>
</body>

</html>