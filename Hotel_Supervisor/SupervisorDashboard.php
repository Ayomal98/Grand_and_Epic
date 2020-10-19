<?php
session_start();
$username = $_SESSION['username'];
?>
<html>

<head>
	<link rel="stylesheet" href="../Css/employee.css">
	<title>
		Supervisor Dashboard
	</title>
</head>

<body bgcolor="black">
	<center>
		<img src="../Images/Logo.png" width="20%">
	</center>
	<div class="sidenav">
		<button class="dropdown-btn">Dashboard &#128317;
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">

			<a href="SupervisorAssignEmployeeTasks.html">Assign Employee tasks</a>
			<a href="SupervisorLeaveRequest.html">Request a Leave</a>
		</div>
	</div>
	<div class="top-right">
		<table width="100%">
			<tr>
				<td>
					<p style="font-family :Lato; font-size:20px; color :white;">Logged in as <?php echo $username; ?></p>
				</td>
				<td>
					<img src="../Images/ayomal.png" height="40%">
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

	<table style="position:absolute; top : 270px; width:350px;">
		<tr>
			<td>
				<img src="../Images/Employee.png" height="40%">
			</td>
			<td>
				<p style="font-family :Lato; font-size:20px; color :white;">Supervisor Dashboard</p>
			</td>
		</tr>
	</table>


	<table style="position:absolute; left:20px; top:350px; width:97%;border: 1px solid white;">
		<tr>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">Assign Employee Tasks</p>
			</th>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">View Booking Details</p>
			</th>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">View Leave Requests</p>
			</th>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">Request a Leave</p>
			</th>
		</tr>
		<tr>
			<td style="border: 1px solid white;">

				<table width="100%">
					<tr>
						<td align="center">
							<img src="../Images/roomService.png" height="%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">15</p>
						</td>
					</tr>
					<tr>
						<td align="center">
							<img src="../Images/cutlery.png" height="50%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">18</p>
						</td>
					</tr>
					<tr>
						<td align="center">
							<img src="../Images/tie.png" height="50%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">2</p>
						</td>
					</tr>
				</table>

			</td>
			<td style="border: 1px solid white;">

				<table width="100%">
					<tr>
						<td align="center">
							<img src="../Images/Calendar.png" height="50%">
						</td>
						<td rowspan="2" align="center">
							<img src="../Images/Duty.png" height="75%">
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td align="center">
							<img src="../Images/hotel.png" height="50%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">12</p>
						</td>
					</tr>
					<tr>
						<td align="center">
							<img src="../Images/cutlery.png" height="50%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">16</p>
						</td>
					</tr>
					<tr>
						<td align="center">
							<img src="../Images/tie.png" height="50%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">2</p>
						</td>
					</tr>
				</table>

			</td>

			<td style="border: 1px solid white;">
				<table width="100%">
					<tr>
						<td align="center">
							<img src="../Images/Calendar.png" height="50%">
						</td>
						<td align="center">
							<img src="../Images/BIgCal.png" height="10%">
						</td>
					</tr>
				</table>
			</td>

			<td style="border: 1px solid white;">
				<table width="100%">
					<tr>
						<td align="center">
							<img src="../Images/leave.png" height="50%">
						</td>
						<td align="center">
							<img src="../Images/leaveBig.png" height="35%">
						</td>
					</tr>
				</table>
			</td>
		</tr>

	</table>


	<div class="bottom-left">
		<div class="display">
			<img class="mySlides" src="../Images/img17.jpg">
			<img class="mySlides" src="../Images/img18.jpg">
			<img class="mySlides" src="../Images/img19.jpg">
			<img class="mySlides" src="../Images/img20.jpg">

			<button class="display-left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="display-right" onclick="plusDivs(1)">&#10095;</button>
		</div>

		<script>
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
				showDivs(slideIndex += n);
			}

			function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				if (n > x.length) {
					slideIndex = 1
				}
				if (n < 1) {
					slideIndex = x.length
				}
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				x[slideIndex - 1].style.display = "block";
			}
		</script>
	</div>


	<div class="bottom-right">
		<form style="color:white; font-size:20px;">
			<fieldset>
				<legend>
					<font size="10px">User Profile</font>
				</legend>
				<label for="fname">First Name : </label>
				<input type="text" id="fname" name="fname">
				<label for="lname">Last Name : </label>
				<input type="text" id="lname" name="lname">
				<label for="email">Email Add : </label>
				<input type="email" id="email" name="email">
				<label for="password">Password : </label>
				<input type="password" id="password" name="password" placeholder="Password">
				<label for="tel">TP Number : </label>
				<input type="tel" id="tel" name="tel">
				<br>
				<table>
					<td>
						<input type="button" class="button" value="UPDATE PROFILE">
				</table>
			</fieldset>
		</form>
	</div>
</body>

</html>