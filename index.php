<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand & Epic Hotel</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header-container" id="header-container">

        <div class="sticky-navbar" id="sticky-navbar">
            <ul>
                <li> <a href="#">Home</a></li>
                <li><a href="#" class="staying-btn">Staying-In</a></li>
                <ul>
                    <li><a href="#">Suites</a></li>
                    <li><a href="#">Panaromic Rooms</a></li>
                    <li><a href="#">Superior Rooms</a></li>
                </ul>
                <li><a href="#">Dining</a></li>
                <li><a href="#">meals</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Offers</a></li>
            </ul>
        </div>

        <a href="#" onclick="openSlideMenu()">
            <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
            </svg>
            <span class="heading">| Menu</span>
        </a>



        <div class="side-nav" id="side-nav">
            <ul>
                <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a><br />
                <li> <a href="#">Home</a></li>
                <li><a href="#" class="staying-btn">Staying-In
                        <span class="fas fa-caret-down" id="toggle-btn" onclick="showStayingIn()"></span>
                    </a></li>
                <ul class="stayingin-show" id="stayingin-show">
                    <li><a href="#">Suites</a></li>
                    <li><a href="#">Panaromic Rooms</a></li>
                    <li><a href="#">Superior Rooms</a></li>
                </ul>
                <li><a href="#">Dining</a></li>
                <li><a href="#">meals</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Offers</a></li>
            </ul>
        </div>

        <div class="text-container">
            <span class="text1">Grand &</span>
            <span class="text2">Epic
            </span>
        </div>
        <input type="submit" value="Log-In" name="Log-In" class="btn login-btn" id="btn-login" onclick="openLoginForm()">
        <input type="submit" value="Sign-Up" name="Sign-Up" class="btn signup-btn" id="btn-signup">
        <div class="bg-modal">
            <div class="modal-content">
                <div class="close">+</div>
                <img src="Images/download.png" alt="" class="customer-logo">
                <h3 class="login-heading">Log-IN</h3>
                <form action="Hotel_Website/connect_login.php" method="POST">
                    <div class="user-selection">
                        <label for="User type">User Type</label>
                        <select name="User-Type" id="" class="user-type" required>
                            <option value="Customer" select="selected">Customer</option>
                            <option value="Employee">Staff</option>
                        </select>
                    </div>
                    <input type="text" name="email" placeholder="Email" class="inputs" required>
                    <input type="password" name="password" placeholder="Password" class="inputs" required>
                    <a href=""><span style="font-weight: bold; color:black;">Forgot your password ?</span></a><br />
                    <input type="submit" value="Submit" name="Submit" class="log-btn submit">
                    <input type="reset" value="Cancel" name="Cancel" class="log-btn cancel">

                </form>
            </div>
        </div>
        <div class="bg-modal-signup">
            <div class="modal-content signup">
                <div class="close-signup">+</div>
                <h3 class="login-heading">Sign-Up</h3>
                <form action="Hotel_Website/Connect_signup.php" method="POST">
                    <input type="text" name="firstname" placeholder="First Name" class="inputs" required>
                    <input type="text" name="lastname" placeholder="Last Name" class="inputs" required>
                    <input type="text" name="email" placeholder="Email" class="inputs" required>
                    <input type="password" name="password" placeholder="Password" class="inputs" required>
                    <input type="text" name="contactNum" placeholder="Contact-number" class="inputs" required>
                    <input type="submit" value="Submit" name="Submit" class="log-btn submit">
                    <input type="reset" value="Cancel" name="Cancel" class="log-btn cancel">
                </form>
            </div>
        </div>


    </div>
    <div class="body-container">
        <h2>Bookings</h2><br />
        <div class="booking-container">
            <div class="card">
                <div class="card-img" id="img01"></div>
                <div class="card-content">
                    <h class="card-header">Staying-In</h>
                    <p class="card-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta architecto aliquid unde, ipsa laboriosam, dolorem mollitia quae provident molestiae placeat pariatur. Reiciendis, doloribus quaerat! Vitae dignissimos cupiditate sint ut eius?</p>
                    <a href="" class="card-link">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-img" id="img02"></div>
                <div class="card-content">
                    <h class="card-header">Dine-In</h>
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
        <div class="box">
            <span class="fas fa-user" id="customer-icon"></span>
            <div class="box-heading">Loyalty Offer</div>
            <div class="box-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, ex assumenda dolor aliquid, sequi recusandae voluptas </div>
            <box class="link">Read more</box>
        </div>
        <div class="box">
            <span class="fab fa-cc-visa" id="creditcard-icon"></span>
            <div class="box-heading">Credit-Card Offer</div>
            <div class="box-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, ex assumenda dolor aliquid, sequi recusandae voluptas </div>
            <box class="link">Read more</box>
        </div>
        <div class="box">
            <span class="fas fa-hourglass-end" id="lastmin-icon"></span>
            <div class="box-heading">Last-Miniute Offer</div>
            <div class="box-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, ex assumenda dolor aliquid, sequi recusandae voluptas </div>
            <box class="link">Read more</box>
        </div>
    </div>

    </div>
    <?php include 'Hotel_Website/footer.php'; ?>
    <script src="Javascript/script.js"></script>

</body>

</html>