<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodations</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    </div>
    <div class="body-container accomodations">
        <h3>Accomodations</h3>
        <i class="fas fa-check">Check In </i>
        <i class="fas fa-check">Check Out </i>
        <div class="room-container">
            <div class="card-rooms">
                <div class="card-room-img"></div>
                <h class="card-room-header">Superior Rooms</h>
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
</body>

</html>