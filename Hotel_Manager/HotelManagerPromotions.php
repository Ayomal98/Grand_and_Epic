<?php
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['User_Email'];
?>
<html>
	<head>
	<link rel="stylesheet" href="../Css/employee.css">
		<title>
		Hotel Manager Manage Promotions
        </title>
        <script src="https://kit.fontawesome.com/1d5f2c83e1.js" crossorigin="anonymous"></script>
	</head>	
	<body bgcolor = "black">

	<center>
	<img src="../Images/Logo.png" width="20%">
	<span class="far fa-caret-square-down" style="color:white;font-size:30px;position:absolute;right:100px;top:10px;" onclick="funcUserDetails()"></span>
		<!--<br><span style="position:absolute;top:100px;right:40px;font-size:20px;color:white"></span>-->
		<div id="user-detail-container">
			<span class="fa fa-window-close" style="margin-left:130px;" onclick="funcCloseUserDetails()"></span>
			<p style="margin-top: 2px; color:black"><?php echo "Logged in as $username"; ?></P>
			<hr style="color:teal">
			<a href="../Hotel_Website/logout.php"><input type="button" value="Log-out" name="logout-btn" style="margin-top:-7px;margin-left:85px;padding:0px;background-color:black;color:white;border-radius:5px;cursor:pointer"></a>
        </div>
	</center>
		<div class="sidenav">	
			<button class="dropdown-btn">Promotions &#128317;
				
				</button>
				<div class="dropdown-container">
                <a href="HotelManagerDashboard.php"><font size = "4 px">Dashboard</font></a>
				<a href="HotelManagerManageStaff.php"><font size = "4 px">Manage Staff</font></a>
				<a href="ManagerBookingDetails.php"><font size = "4 px">Booking Details</font></a>
				<a href="HotelManagerCustomerFeedback.php"><font size = "4 px">Customer Feedback</font></a>
				<a href="HotelManagerManageRoom.php"><font size = "4 px">Manage Room</font></a>
				<a href="HotelManagerEarlyCheckOuts.php"><font size = "4 px">Early Check-Outs</font></a>
				</div>
		</div>
		<div class = "top-right">
		<table width = "100%">
		<tr>
		<td>
		</td>
		<td>
			<img src = "../Images/ayomal.png" height = "40%" >
		</td>
		</tr>
	</table>
	</div>
	<script>
	/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}
	</script>
	
	<table style ="position:absolute; top : 240px; width:350px;" >
		<tr>
		<td>
			<img src = "../Images/discount.png" height = "40%" >
		</td>
		<td>
			<p style = "font-family :Lato; font-size:22px; color :white;">Current Promotions</p>		
		</td>
		</tr>
	</table>
	

	<table style ="position:absolute; left:20px; top:350px; width:97%;border: 1px solid white;" >
		<tr>
		<th style ="border: 1px solid white;">
			<p style = "font-family :Lato; font-size:20px; color :white;">Customer Loyalty Promotions</p>		
		</th>
		<th style ="border: 1px solid white;">
			<p style = "font-family :Lato; font-size:20px; color :white;">Last Minute Promotions</p>		
		</th>
		<th style ="border: 1px solid white;">
			<p style = "font-family :Lato; font-size:20px; color :white;">Credit Card Promotions</p>		
        </th>
		</tr>
		
		<td style ="border: 1px solid white;">
		
			<table width="100%">
				<tr>
				<td align ="center">
					<img src = "../Images/loyalty.png" height = "70%">
				</td>
				<td align="center">
					<textarea name="Message" rows="5" cols="0" placeholder="Terms & Conditions" style="font-size: 20px;"></textarea>
				</tr>
				<tr>
                    <td align="center">
                        <input type="button" class="button" value="UPDATE PROMOTION">
                    </td>
                    <td align="center">
                        <input type="button" class="button" value="DELETE PROMOTION">
                    </td>
				</tr>
			</table>
			
		</td>
		<td style ="border: 1px solid white;" >
            <table width="100%">
				<tr>
				<td align ="center">
					<img src = "../Images/lastminute.png" height = "70%">
				</td>
				<td align="center">
					<textarea name="Message" rows="5" cols="20" placeholder="Terms & Conditions" style="font-size: 20px;"></textarea>
				</tr>
				<tr>
                    <td align="center">
                        <input type="button" class="button" value="UPDATE PROMOTION">
                    </td>
                    <td align="center">
                        <input type="button" class="button" value="DELETE PROMOTION">
                    </td>
				</tr>
			</table>
        </td>
        <td style ="border: 1px solid white;" >
            <table width="100%">
				<tr>
				<td align ="center">
					<img src = "../Images/credit.png" height = "70%">
				</td>
				<td align="center">
					<textarea name="Message" rows="5" cols="20" placeholder="Terms & Conditions" style="font-size: 20px;"></textarea>
				</tr>
				<tr>
                    <td align="center">
                        <input type="button" class="button" value="UPDATE PROMOTION">
                    </td>
                    <td align="center">
                        <input type="button" class="button" value="DELETE PROMOTION">
                    </td>
				</tr>
			</table>
        </td>
        </tr>
   
    <table  style ="position:absolute; top : 600px; width:350px;width : 97%;">
    <tr>
        <td>
            <p style = "font-family :Lato; font-size:20px; color :white;">To Create a new Promotion</p>
        </td>
        <td>
            <img src = "../Images/point.png" height = "50%">
        </td>
        <td>
            <form>
                <fieldset >
                    <legend style = "color:white; font-size: 20px">New Promotion</legend>    
                    <table style = "color:white; font-size: 20px; width:90%; margin-left:auto; margin-right:auto;" >
                        <tr>
                            <td align="left">Promotion Type: </td>
                            <td align="left"><textarea name="Message" rows="1" cols="25" placeholder="Type" style="font-size: 20px;"></textarea></td>      
                        </tr>
                        <tr>
                            <td align="left">Context of Promotions:</td>
                            <td align="left"><textarea name="Message" rows="3" cols="25" placeholder="Context" style="font-size: 20px;"></textarea></td>
                        </tr>
                        <tr>
                            <td align="left">Constraints and Policies</td>
                            <td align="left"><textarea name="Message" rows="3" cols="25" placeholder="Cosntarints" style="font-size: 20px;"></textarea></td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                    <br>
                    <table style = "color:white; font-size: 20px; width:81%;">
                        <tr>
                            <td align="right">
                                <input type="button" class="button" value="UPDATE PROMOTION">
                                <input type="button" class="button" value="SEND TO ADMIN">
                            </td>
                         </tr> 
                    </table>     
                </fieldset>
                </form>
        </td>
    </tr>
    </table>
    </table>
 
    <table  style ="position:absolute; top : 1000px; width:350px;width : 86%;">
        <tr>
            <td>
                <p style = "font-family :Lato; font-size:20px; color :white;">To View Booking Analysis</p>
            </td>
            <td align ="left">
                <img src = "../Images/point.png" height = "50%">
            </td>
            <td align ="left">
                <p style = "font-family :Lato; font-size:20px; color:cornflowerblue;">Booking Analysis Overview</p>
            </td>
            <td>
                <img src = "../Images/pie.png" height = "100%">
			</td>
		</tr>
	</table>
	<script>
		function funcUserDetails() {
			document.getElementById('user-detail-container').style.display = "block";
		}

		function funcCloseUserDetails() {
			document.getElementById('user-detail-container').style.display = "none";
		}
	</script>
	</body>
</html>