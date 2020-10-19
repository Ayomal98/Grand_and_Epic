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
                <input type="email" name="customer-email" id="" placeholder="Email address">
                <input type="number" name="number-of-guests" placeholder="No.Of Guests">
            </div>
            <div class="meal-container">
                <label for="Meal-type">Meal Type</label>
                <select name="Meal-Period" id="time-period">
                    <option value="Breakfast" id="breakfast-period" onselect="breakfastTime()">Breakfast</option>
                    <option value=" Lunch" id="lunch-period" onselect="breakfastTime()">Lunch</option>
                    <option value="Dinner" id="dinner-period" onselect="dinnerTime()">Dinner</option>
                </select>
                <div class="time-period">
                    <label for="Time-Period">Time Period</label>
                    <div class="breakfast-time-period-selection">
                        <select name="breakfast-times" id="breakfast-times" style="display: none;" ">
                            <option value="">8.00</option>
                            <option value="">8.30</option>
                            <option value="">9.00</option>
                            <option value="">9.30</option>
                            <option value="">10.00</option>
                        </select>
                    </div>
                    <div class=" lunch-time-period-selection">
                            <select name="lunch-times" id="lunch-times" style="display: none;">
                                <option value="">12.00</option>
                                <option value="">12.30</option>
                                <option value="">1.00</option>
                                <option value="">1.30</option>
                                <option value="">2.00</option>
                            </select>
                    </div>
                    <div class="dinner-time-period-selection">
                        <select name="dinner-times" id="dinner-times" style="display: none;">
                            <option value="">7.30</option>
                            <option value="">8.00</option>
                            <option value="">8.30</option>
                            <option value="">9.00</option>
                            <option value="">9.30</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="date-container">
                <input type="date" name="Dine-in-date">
            </div>
            <div class="table-container">
                <?php include("showtables.php"); ?>
            </div>
            <input type="button" value="Confirm" name="confirm-btn">
        </form>
    </div>
    <script src="../Javascript/mealselection.js"></script>
</body>

</html>