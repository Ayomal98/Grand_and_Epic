<?php require_once('Templates/connection.php'); ?>
<?php include('Hotel_Website/connect_login.php');
?>
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
        <input type="submit" value="Log-In" name="Log-In" class="btn login-btn" id="btn-login" onclick="openLoginForm()">
        <input type="submit" value="Sign-Up" name="Sign-Up" class="btn signup-btn" id="btn-submit">
        <div class="bg-modal">
            <div class="modal-content">
                <div class="close">+</div>
                <img src="Images/download.png" alt="" class="customer-logo">
                <h3 class="login-heading">Log-IN</h3>
                <form action="Hotel_Website/connect_login.php" method="POST">
                    <input type="text" name="email" placeholder="Email" class="inputs" required>
                    <input type="password" name="password" placeholder="Password" class="inputs" required>
                    <a href=""><span style="font-weight: bold; color:black;">Forgot your password ?</span></a><br />
                    <input type="submit" value="Submit" name="Submit" class="log-btn submit">
                    <input type="reset" value="Cancel" name="Cancel" class="log-btn cancel">

                </form>
            </div>
        </div>


    </div>
    <div class="body-container">
        <h2>Bookings</h2><br />
        <div class="booking-container">
            <div class="slide active" id="slide">
                <div class="card">
                    <div class="card-img" id="img01"></div>
                    <div class="card-content">
                        <h class="card-header">Staying-In</h>
                        <p class="card-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta architecto aliquid unde, ipsa laboriosam, dolorem mollitia quae provident molestiae placeat pariatur. Reiciendis, doloribus quaerat! Vitae dignissimos cupiditate sint ut eius?</p>
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="slide" id="slide">
                <div class="card">
                    <div class="card-img" id="img02"></div>
                    <div class="card-content">
                        <h class="card-header">Dine-In</h>
                        <p class="card-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta architecto aliquid unde, ipsa laboriosam, dolorem mollitia quae provident molestiae placeat pariatur. Reiciendis, doloribus quaerat! Vitae dignissimos cupiditate sint ut eius?</p>
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="slide ">
                <div class="card">
                    <div class="card-img" id="img03"></div>
                    <div class="card-content">
                        <h class="card-header">Events</h>
                        <p class="card-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta architecto aliquid unde, ipsa laboriosam, dolorem mollitia quae provident molestiae placeat pariatur. Reiciendis, doloribus quaerat! Vitae dignissimos cupiditate sint ut eius?</p>
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="prevnext">
                <button class="pn-btn" id="prev"></button>
                <button class="pn-btn" id="next"></button>
            </div>

        </div>
        <h2>Offers</h2>
        <div class="offers-container">
            <div class="box Loyalty-offer">Loyalty Offer</div>
            <div class="box last-minuite">Last Minuite Offer</div>
            <div class="box dine-in"></div>
        </div>

    </div>
    <script src="Javascript/script.js"></script>
</body>

</html>