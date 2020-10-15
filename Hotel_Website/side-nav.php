<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="3" />
            <path d="M0,14 30,14" stroke="#fff" stroke-width="3" />
            <path d="M0,23 30,23" stroke="#fff" stroke-width="3" />
        </svg>
        <span class="heading">| Menu</span>
    </a>

    <div class="side-nav" id="side-nav">
        <ul>
            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a><br />
            <li> <a href="#">Home<span class="fas fa-home"></span></a></li>
            <li><a href="Hotel_Website/staying-in.php" class="staying-btn">Staying-In<span class="fas fa-hotel"></span>
                    <span class="fas fa-caret-down" id="toggle-btn" onclick="showStayingIn()"></span>
                </a></li>
            <ul class="stayingin-show" id="stayingin-show">
                <li><a href="#">Suites</a></li>
                <li><a href="#">Panaromic Rooms</a></li>
                <li><a href="#">Superior Rooms</a></li>
            </ul>
            <li><a href="#">Dining<span class="fas fa-utensils"></span></a></li>
            <li><a href="#">meals<span class="fas fa-hamburger"></span></a></li>
            <li><a href="#">Events<span class="fas fa-handshake"></span></a></li>
            <li><a href="#">Offers<span class="fas fa-credit-card"></span></a></li>
        </ul>
    </div>
</body>

</html>