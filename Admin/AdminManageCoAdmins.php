<html>

<head>
	<link rel="stylesheet" href="../Css/employee.css">
	<script src="https://kit.fontawesome.com/1d5f2c83e1.js" crossorigin="anonymous"></script>
	<title>
		Admin Manage Co-admins
	</title>
</head>

<body bgcolor="black">

	<center>
		<img src="../Images/Logo.png" width="20%">
	</center>
	<div class="sidenav">
		<button class="dropdown-btn">Manage Co-admins &#128317;
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
			<a href="AdminDashboard.html">
				<font size="4 px">Dashboard</font>
			</a>
			<a href="AdminRespondToLeaveRequests.html">
				<font size="4px">Respond to Leave Requests</font>
			</a>
			<a href="AdminViewBookings.html">
				<font size="4 px">View Booking Details</font>
			</a>
			<a href="AdminManageContent.html">
				<font size="4 px">Manage Content on web-site</font>
			</a>
			<a href="AdminAddPromotion.html">
				<font size="4 px">Add promotion</font>
			</a>
		</div>
	</div>
	<div class="top-right">
		<table width="100%">
			<tr>
				<td>
					<p style="font-family :Lato; font-size:20px; color :white;">Logged in as</p>
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

	<fieldset style=" position:absolute; top:280px; width: 75%; left:160px">
		<legend style="color:white; font-size: 20px">Add Co-admins</legend>
		<form action="co-adminadd.php" method="POST">
			<table style="color:white; font-size: 20px; width:88%;">

				<tr>
					<td align="left">First Name:</td>
					<td align="center"><input type="text" name="empFname" size="20" class="inputs" required></td>
				</tr>
				<tr>
					<td align="left">Last Name:</td>
					<td align="center"><input type="text" name="empSname" size="50" class="inputs" required></td>
				</tr>
				<tr>
					<td align="left">Password:</td>
					<td align="center"><input type="password" name="empPass" size="50" placeholder="Password" class="inputs" required></td>
				</tr>
				<tr>
					<td align="left">Email Address:</td>
					<td align="center"><input type="email" name="empEmail" size="50" class="inputs" required></td>
				</tr>
				<tr>
					<td align="left">Contact No:</td>
					<td align="center"><input type="tel" name="empContact" size="20" class="inputs" required></td>
				</tr>
			</table>
			<br>
			<table style="color:white; font-size: 20px; width:81%;">
				<tr>
					<td align="right">
						<input type="submit" name="ADD" class="button" value="  ADD  ">
					</td>

				</tr>
			</table>
		</form>
	</fieldset>


	<?php include("../Templates/connection.php");
	if (isset($_POST['search'])) {
		$id = $_POST['id'];
		$query = "SELECT * FROM 'employee' where Employee_ID='$id' ";
		$query_run = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_array($query_run))
			if ($query_run) {
				echo "<script>
											alert('Hotel Manager Has been Deleted');
											window.location.href='AdminManageCoAdmins.php';
											</script>";
			} else {
				echo '<script> alert("Hotel Manager has been not deleted") </script>';
			} {
	?>
			<tr>
				<td><?php echo $row['First_name']; ?> </td>
				<td><?php echo $row['Last_name']; ?> </td>
				<td><?php echo $row['Email']; ?> </td>
				<td><?php echo $row['Password']; ?> </td>
				<td><?php echo $row['Contact_No']; ?> </td>
				<td><?php echo $row['User_Role']; ?> </td>
			</tr>
	<?php }
	} ?>
	</tr>

	<!--<tr>
                        <td align="left">First Name:</td>
                        <td align="center"><input type="text" name="empFname" size="20" class="inputs" form="manager_form" required></td>
                    </tr>
                    <tr>
                        <td align="left">Last Name:</td>
                        <td align="center"><input type="text" name="empSname" size="50" class="inputs" form="manager_form" required></td>
                    </tr>
                    <tr>
                        <td align="left">Password:</td>
                        <td align="center"><input type="password" name="empPass" size="50" placeholder="Password" class="inputs" form="manager_form" required></td>
                    </tr>
                    <tr>
                        <td align="left">Email Address:</td>
                        <td align="center"><input type="email" name="empEmail" size="50" class="inputs" form="manager_form" required></td>
                    </tr>
                    <tr>
                        <td align="left">Contact No:</td>
                        <td align="center"><input type="tel" name="empContact" size="20" class="inputs" form="manager_form" required></td>
                    </tr>
                </table>
            </tr>
        </table>
        <table style="color:white; font-size: 20px; width:81%;">
            <tr>
                <td align="right">
                    <input type="button" class="button" value="UPDATE" name="UPDATE" form="manager_form">
                    <input type="button" class="button" value="DELETE" name="DELETE" form="manager_form">
                </td>
            </tr>
		</table>
</form>
	</fieldset>
	
	<form action="" method="POST" enctype="multipart/form-data">
	<fieldset style = " position:absolute; top:780px; width: 75%; left:160px">
    <legend style = "color:white; font-size: 20px">Search by ID</legend>

		<input type = "text" name="Employee_ID" placeholder="Enter id to Search" />
		<input type = "submit" name="search" value="Search by ID">
		<div class="retrieve">
		<table align="center" style = "color:white; font-size: 20px; width:88%; top:200px">-->

	<tr>
		<th>First Name</th>
		<th>Last name</th>
		<th>Email</th>
		<th>Contact Number</th>
	</tr> <br>

	<?php
	include("../Templates/connection.php");
	if (isset($_POST['add'])) {
		$Employee_ID = $_POST['Employee_ID'];

		$query = "SELECT * FROM employee where Employee_ID='$Employee_ID' ";
		$query_run = mysqli_query($con, $query);


		while ($row = mysqli_fetch_array($query_run))
			if ($query_run) {
				echo '<script type="text/javascript">alert("Data Updated")</script>';
			} else {
				echo '<script type="text/javascript">alert("Data Updated")</script>';
			} {
	?>
			<tr>
				<td align="center"><?php echo $row['First_Name']; ?> </td>
				<td align="center"><?php echo $row['Last_Name']; ?> </td>
				<td align="center"><?php echo $row['Email']; ?> </td>
				<td align="center"><?php echo $row['Contact_No']; ?> </td>
			</tr>

	<?php
		}
	}
	?>
	</table>
	</div>
	</fieldset>
	<!--search-->
	</form>-->
	<form action="" method="POST" enctype="multipart/form-data">
		<fieldset style=" position:absolute; top:780px; width: 75%; left:160px">
			<legend style="color:white; font-size: 20px">Update and Delete Co-Admins</legend>
			<table align="center" style="color:white; font-size: 20px; width:88%;">
				<tr>
					<td><input type="text" name="Employee_ID" placeholder="Enter id to Search" /></td>
					<td><input type="submit" class="button" name="search" value="Search by ID"></td>
				</tr>
			</table>

			<?php
			include("../Templates/connection.php");
			if (isset($_POST['search'])) {
				$Employee_ID = $_POST['Employee_ID'];
				$query = "SELECT * FROM employee where Employee_ID='$Employee_ID' AND User_Role='Hotel Manager' ";
				$query_run = mysqli_query($con, $query);

				while ($row = mysqli_fetch_array($query_run)) {
			?>
					<form action="" method="POST">
						<fieldset style=" position:absolute; top:900px; width: 52%;">
							<table align="center" style="color:white; font-size: 20px; width:88%;">
								<tr>
									<td>Employee ID</td>
									<td><input type="int" name="Employee_ID" value="<?php echo $row['Employee_ID'] ?>" /></td>
								</tr>
								<tr>
									<td>First Name</td>
									<td><input type="text" name="First_Name" value="<?php echo $row['First_Name'] ?>" /></td>
								</tr>
								<tr>
									<td>Last Name</td>
									<td><input type="float" name="Last_Name" value="<?php echo $row['Last_Name'] ?>" /></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="Email" value="<?php echo $row['Email'] ?>" /></td>
								</tr>
								<tr>
									<td>Contact No</td>
									<td><input type="text" name="Contact_No" value="<?php echo $row['Contact_No'] ?>" /></td>
								</tr>
								<tr>
									<td align="right">
										<input type="submit" class="button" name="update" value="UPDATE">
										<input type="submit" class="button" name="delete" value="DELETE">
									</td>

								</tr>
							</table>

						</fieldset>
					</form>
			<?php
				}
			} ?>
			<table>
				<tr>
					<th>Employee ID</th>
					<th>First_Name</th>
					<th>Last_Name</th>
					<th>Email</th>
					<th>Contact_No</th>
				</tr>
				<?php
				include("../Templates/connection.php");
				$sql = "SELECT * FROM employee WHERE User_Role='Hotel Manager'";
				$queryshowTable = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_assoc($queryshowTable)) {
				?>
					<tr>
						<td><?php echo $row["Employee_ID"] ?></td>
						<td><?php echo $row["First_Name"] ?></td>
						<td><?php echo $row["Last_Name"] ?></td>
						<td><?php echo $row["Email"] ?></td>
						<td><?php echo $row["Contact_No"] ?></td>
					</tr>
				<?php
				} ?>

			</table>


</body>

</html>
<?php
include("../Templates/connection.php");
if (isset($_POST['update'])) {
	$First_name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Contact_No = $_POST['Contact_No'];
	$query = "UPDATE employee SET First_Name='$First_name',Last_Name='$Last_Name',Email='$Email',Contact_No='$Contact_No' WHERE Employee_ID='$_POST[Employee_ID]' AND User_Role='Hotel Manager'";
	$query_run = mysqli_query($con, $query);
	if ($query_run) {
		echo '<script type="text/javascript">alert("Data Updated")</script>';
	} else {
		echo '<script type="text/javascript">alert("Data Updated")</script>';
	}
}

if (isset($_POST['delete'])) {
	$query = "DELETE FROM employee where Employee_ID='$_POST[Employee_ID]' AND User_Role='Hotel Manager'";
	$query_run = mysqli_query($con, $query);
	if ($query_run) {
		echo "<script>
                alert('Hotel Manager Has been Deleted');
                window.location.href='AdminManageCoAdmins.php';
                </script>";
	} else {
		echo '<script> alert("Hotel Manager has been not deleted") </script>';
	}
}
?>