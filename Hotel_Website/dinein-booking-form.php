<?php include("time-inclusion.php");
?>
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

        <form action="dinein-booking.php" class="dine-in-form" method="post">
            <h2 style="font-size:40px;">Reservation for Dine-in</h2>
            <div class="customer-details">
                <input type="text" name="customer-name" id="" placeholder="Customer Name" required>
                <input type="email" name="customer-email" id="" placeholder="Email address" required>
                <input type="number" name="number-of-guests" placeholder="No-Guests" min="0" max="10" step="1" style="width:110px;" required>
            </div>
            <div class="dine-in-details" style="display:flex;align-items:center;">
                <div class="meal-container">
                    <label for="Meal-type">Meal Type</label>
                    <select name="Meal-Period" id="time-period" onchange="mealShow()">
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                    </select>
                </div>
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

                <div class="date-container">
                    <input type="date" name="Dine-in-date">
                </div>
            </div>

            <div class="table-container">
                <div class="table-showing-container">
                    <?php include("showtables.php"); ?>
                </div>
                <div style="display:flex;flex-direction:column">
                    <br><input type="number" name="table-no" placeholder="Table-No" style="padding:10px;margin:40px auto;width:220px; height:30px;" min="1" max="<?php echo $number_of_tables; ?>"><br>
                    <div class="dot not-avb"></div><span style="margin-top: -35px;margin-left:150px;">Not Available</span><br>
                    <div class="dot"></div><span style="margin-top: -35px;margin-left:150px;">Available</span><br>
                </div>
            </div>
            <div class="btn-wrapper" style="display: inline-block;margin:auto 10px;">
                <input type="reset" value="Cancel" name="cancel-book-btn" class="reservation-submit-btn cancel">
                <input type="submit" value="Confirm" name="confirm-book-btn" class="reservation-submit-btn">
            </div>
        </form>
    </div>
    <script>
        //---  for displaying the repective meal-time  ---
        function mealShow() {
            var meal_type = document.getElementById("time-period").value;
            console.log(meal_type);
            if (meal_type == "Breakfast") {
                document.getElementById("breakfast-times").style.display = "inline-block";
                document.getElementById("lunch-times").style.display = "none";
                document.getElementById("dinner-times").style.display = "none";
            }
            if (meal_type == "Lunch") {
                document.getElementById("lunch-times").style.display = "inline-block";
                document.getElementById("breakfast-times").style.display = "none";
                document.getElementById("dinner-times").style.display = "none";
            }
            if (meal_type == "Dinner") {
                document.getElementById("dinner-times").style.display = "inline-block";
                document.getElementById("lunch-times").style.display = "none";
                document.getElementById("breakfast-times").style.display = "none";
            }
        }
    </script>
</body>

</html>