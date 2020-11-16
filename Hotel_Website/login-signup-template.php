<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
                <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" class="inputs" required>
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
</body>

</html>