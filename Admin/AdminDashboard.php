<?php
session_start();
$username = $_SESSION['username'];
?>
<html>

<head>
	<link rel="stylesheet" href="../Css/employee.css">
	<title>
		Admin Dashboard
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

			<a href="AdminManageCoAdmins.html">Manage Co-admins</a>
			<a href="AdminRespondToLeaveRequests.html">Respond to Leave Requests</a>
			<a href="AdminViewBookings.html">View Booking Details</a>
			<a href="AdminManageContent.html">Manage Content on Website</a>
			<a href="AdminAddPromotion.html">Add Promotion</a>

		</div>
	</div>
	<div class="top-right">
		<table width="100%">
			<tr>
				<td>
					<p style="font-family :Lato; font-size:20px; color :white;">Logged in as<?php echo $username; ?>
					</p>
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

	<table style="position:absolute; top : 280px; width:350px;">
		<tr>
			<td>
				<img src="../Images/Employee.png" height="40%">
			</td>
			<td>
				<p style="font-family :Lato; font-size:20px; color :white;">System-Administrator Dashboard</p>
			</td>
		</tr>
	</table>


	<table style="position:absolute; left:20px; top:380px; width:97%;border: 1px solid white;">
		<tr>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">Manage Co-admin Accounts</p>
			</th>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">View Booking Details</p>
			</th>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">Manage Content on Website</p>
			</th>
			<th style="border: 1px solid white;">
				<p style="font-family :Lato; font-size:20px; color :white;">Add Promotions</p>
			</th>
		</tr>
		<tr>
			<td style="border: 1px solid white;">

				<table width="100%">
					<tr>
						<td align="center">
							<img src="../Images/Emplo.png" height="70%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">No. of<br>Co-Admins - 5</p>
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
							<img src="../Images/webcontent.png" height="40%">
						</td>
						<td align="center">
							<img src="../Images/BigWebcontent.png" height="30%">
						</td>
					</tr>
				</table>
			</td>

			<td style="border: 1px solid white;">
				<table width="100%">
					<tr>
						<td align="center">
							<img src="../Images/discount.png" height="50%">
						</td>
						<td align="center">
							<p style="color: white; font-size: 20px;">Existing<br>Promotions - 2</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>

	</table>

	<table style="position:absolute; top:800px; left:200px;">
		<tr>
			<th>
				<p style="font-size:30px; color:white;">Booking Overview of the Year</p>
			</th>
		</tr>
		<tr>
			<td align="center">
				<img src="../Images/graph.png" height="100%">
			</td>
		</tr>
	</table>

</body>

</html>