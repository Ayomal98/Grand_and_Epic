<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodations</title>
    <link rel="stylesheet" href="../Css/style.css">
    <script src="https://kit.fontawesome.com/1d5f2c83e1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header-container-accomodations" id="header-container">
        <?php include("sticky-nav.php"); ?>
        <?php include("side-nav.php"); ?>

        <div class="text-container">
            <span class="text1">Grand &</span>
            <span class="text2">Epic
            </span>
        </div>
        <?php include('login-signup-template.php'); ?>
    </div>
    <div class="body-container accomodations">
        <h3>Accomodations</h3>
        <i class="fas fa-check">Check In </i>
        <i class="fas fa-check">Check Out </i>
        <div class="room-container">
            <div class="card-rooms">
                <h2 class="card-room-header">Superior Rooms</h2>
                <div class="card-room-img"></div>
                <div class="card-room-para"></div>
            </div>
            <div class="card-rooms">
                <div class="card-room-img"></div>
                <h class="card-room-header">Panaromic Rooms</h>
                <p class="card-room-para"></p>
            </div>
            <div class="card-rooms">
                <div class="card-room-img"></div>
                <div class="card-room-header">Suit Rooms</div>
                <div class="card-room-para"></div>
            </div>
        </div>
    </div>
    <script src="../Javascript/script.js"></script>
    <script src="../Javascript/sticky-nav.js"></script>
</body>

</html>