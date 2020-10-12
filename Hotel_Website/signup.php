<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="wrap">
        <h2>Sign-up Here</h2>
        <form method="POST" action="Connect_signup.php">
            <input type="text" name="firstName" placeholder="First Name" required>
            <input type="text" name="lastName" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="contactNum" placeholder="Contact-number" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>