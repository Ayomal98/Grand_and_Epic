<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panaromic Rooms</title>
    <link rel="stylesheet" href="../Css/style.css">
    <script src="https://kit.fontawesome.com/1d5f2c83e1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="page-wrapper">
        <div class="header-container-SuperiorRooms" id="header-container">
            <?php include("sticky-nav.php"); ?>
            <?php include("side-nav.php"); ?>
            <div class="text-container">
                <span class="text1">Grand &</span>
                <span class="text2">Epic
                </span>
            </div>
            <?php include('login-signup-template.php'); ?>
        </div>
        <div class="body-container Panaromic-Rooms">
            <div class="panaromic-rooms-wrapper">
                <h3>Panaromic Rooms</h3>
                <div class="panaromic-room-content">
                    <p>he Panoramic Rooms at Grand & Epic hotel in Sri Lanka do live up to their name. Your own private balcony will serve as your vantage point – any time. The views over the lake and the Dambulla rock are constant, yet ever changing: hazy mists of a morning, drifting clouds at the heat of noon, and golden glows when dusk descends. The rooms themselves are tempting too, with earthy tones, traditional woven tapestries, and fluffy pillows.</p>
                </div>
                <button class="book" style="color:black;background-color:goldenrod"><a href="">Book Now</a></button>
            </div>

            <div class="room-container">
                <div class="image-container">
                    <img src="../Images/pexels-leonardo-rossatti-2598638.jpg" alt="Superior-Room Image">
                </div>
                <div class="room-details">
                    <h2 style="color:white;font-size:28px">Room-Details</h2>
                    <div class="room-details-wrapper">
                        <div class="grid-room-container"><i class="fa fa-list-ol" aria-hidden="true"><span class="room-detail">Number of Rooms</span><br><span class="Superior-values">13</span></i></div>
                        <div class="grid-room-container"><i class="fa fa-users" aria-hidden="true"><span class="room-detail">Occupancy</span><br><span class="Superior-values">Double or Triple</span></i></div>
                        <div class="grid-room-container"><i class="fas fa-sort-amount-down"><span class="room-detail">Room Size</span><br><span class="Superior-values">210.93 SQ.FT</span></i></div>
                        <div class="grid-room-container"><i class="fas fa-bed"><span class="room-detail">Beds</span><br><span class="Superior-values">King Bed or Twin Bed</span></i></div>
                        <div class="grid-room-container"><i class="fas fa-binoculars"><span class="room-detail">Room View</span><br><span class="Superior-values">Lake View</span></i></div>
                        <div class="grid-room-container"><i class="fas fa-dollar-sign"><span class="room-detail">Prices</span><br><span class="Superior-values">1 Triple Room:$300.00/=</span><br><span class="Superior-values">1 Double Room:$200.00/=</span></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer-footer.php"); ?>
    <script src="../Javascript/script.js"></script>
    <script src="../Javascript/sticky-nav.js"></script>
</body>

</html>