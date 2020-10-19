<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodation Booking</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>

<body>
    <div class="staying-in-booking-form-container">
        <h1>Reservation Form</h1>
        <form action="" method="post" class="staying-in-form">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="room-type">Room Type</label>
            <select name="room-type" id="">
                <option value="Superior-Rooms">Superior</option>
                <option value="Panaromic-Rooms">Panaromic</option>
                <option value="Suite-Rooms">Suite</option>
            </select>
            <label for="Bed-type">Bed type</label>
            <select name="bed-type" id="">
                <option value="King size">King Size Bed</option>
                <option value="Twin Bed">Twin Size Bed</option>
            </select>
            <label for="No-Of-Persons">Number of Persons</label>
            <label for="No-of-adults">Number of Adults</label>
            <select name="number-of-adults" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <label for="No-of-kids">Number of Kids</label>
            <select name="number-of-kids" id="">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <label for="Reservation-type">Reservation type</label>
            <select name="reservation-type" id="">
                <option value="Full-board">Full-board</option>
                <option value="Half-board">Half-board</option>
            </select>
            <label for="check-in">Check-in</label>
            <label for="check-in-date">Date</label>
            <input type="date" name="check-in-date">
            <label for="check-in-time">Time</label>
            <input type="time" name="check-in-time">
            <label for="check-out-date">Check-out</label>
            <input type="date" name="check-out-date">
            <label for="check-out-time">Time</label>
            <input type="time" name="check-out-time">
        </form>
    </div>
</body>

</html>