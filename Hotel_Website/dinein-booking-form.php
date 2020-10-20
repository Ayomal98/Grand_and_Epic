<?php include("time-inclusion.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dine-in Booking</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>

<body>
    <div class="dine-in-booking-form-container">
        <h2>Reservation for Dine-in</h2>
        <form action="dinein-booking.php" method="post">
            <div class="customer-details">
                <input type="text" name="customer-name" id="" placeholder="Customer Name">
                <input type="text" name="customer-email" id="" placeholder="Email address">
                <input type="number" name="number-of-guests" placeholder="No.Of Guests">
            </div>
            <div class="meal-container">
                <label for="Meal-type">Meal Type</label>
                <select name="Meal-Period" id="time-period" onchange="mealShow()">
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                </select>
                <div class="time-period">
                    <label for="Time-Period">Time Period</label>
                    <div class="breakfast-time-period-selection">
                        <select name="breakfast-times" id="breakfast-times">
                            <?php echo getBreakfastTime(); ?>
                        </select>
                    </div>
                    <div class=" lunch-time-period-selection">
                        <select name="lunch-times" id="lunch-times">
                            <?php echo getLunchTime(); ?>
                        </select>
                    </div>
                    <div class="dinner-time-period-selection">
                        <select name="dinner-times" id="dinner-times">
                            <?php echo getDinnerTime(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="date-container">
                <input type="date" name="Dine-in-date">
            </div>
            <div class="table-container">
                <?php include("showtables.php"); ?>
                <br><input type="text" name="table-no" placeholder="Table-No" style="padding:15px;margin:20px auto"><br>
                <div class="dot not-avb"></div><span style="margin-left:-20px">Not Available</span><br>
                <div class="dot"></div><span style=" margin-left:-20px">Available</span><br>
            </div>
            <input type="submit" value="Confirm" name="confirm-book-btn">
        </form>
    </div>
    <script>
        //---  for displaying the repective meal-time  ---
        function mealShow() {
            var meal_type = document.getElementById("time-period").value;
            console.log(meal_type);
            if (meal_type == "Breakfast") {
                document.getElementById("breakfast-times").style.display = "block";
                document.getElementById("lunch-times").style.display = "none";
                document.getElementById("dinner-times").style.display = "none";
            }
            if (meal_type == "Lunch") {
                document.getElementById("lunch-times").style.display = "block";
                document.getElementById("breakfast-times").style.display = "none";
                document.getElementById("dinner-times").style.display = "none";
            }
            if (meal_type == "Dinner") {
                document.getElementById("dinner-times").style.display = "block";
                document.getElementById("lunch-times").style.display = "none";
                document.getElementById("breakfast-times").style.display = "none";
            }
        }
    </script>
</body>

</html>