<html>
	<head>
	<link rel="stylesheet" href="../Css/employee.css">
		<title>
		Hotel Supervisor Manage Meals
		</title>
	</head>	
	<body bgcolor = "black">

	<center>
	<img src="../Images/Logo.png" width="20%">
	</center>
		<div class="sidenav">	
			<button class="dropdown-btn">Manage Meals &#128317;
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
                    <a href="SupervisorDashboard.php"><font size = "4 px">Dashboard</font></a>
                    <a href="SupervisorAssignEmployeeTasks.html"><font size = "4 px">Assign Employee Tasks</font></a>
                    <a href="SupervisorLeaveRequest.html"><font size = "4 px">Request a Leave</font></a>
				</div>
		</div>
		<div class = "top-right">
		<table width = "100%">
		<tr>
		<td>
			<p style = "font-family :Lato; font-size:20px; color :white;">Logged in as</p>		
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
    
	<form action="Meals.php" method="POST" enctype="multipart/form-data">
	<fieldset style = " position:absolute; top:280px; width: 75%; left:160px">
        <legend style = "color:white; font-size: 20px">Add Meals</legend>
        
                <table align="center" style = "color:white; font-size: 20px; width:88%; ">
                    <tr>
                        <td>Meal Name:</td>
                        <td align="center"><input type="text" name="mealname" size="20"></td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td align="center"><input type="text" name="price" size="50"></td>
                    </tr>
                    <tr>
                        <td>Meal Plan: </td>
                        <td align="left">
                            <select id="types" name="mealplan" class="inputs" style="margin: 8px 85px;">
                                <option value="Staying-in">Staying-in</option>
                                <option value="Events">Events</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Meal Type: </td>
                        <td align="left">
                            <select id="types" name="mealtype" class="inputs" style="margin: 8px 85px;">
                                <option value="-">-</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Meal Image: </td>
                        <td align="center"><input type="file" name="mealimage" id="fileToUpload" size="20"></td>
                    </tr>
                </table>
            
                <table style = "color:white; font-size: 20px; width:86.5%;">
                    <tr>
                        <td align="right">
                            <input type="submit" class="button" name="insert" value="Add a New Meal">
                        </td>
                    </tr>
                </table>
            		
	</fieldset>
    </form>

	<form action="" method="POST" enctype="multipart/form-data">
	<fieldset style = " position:absolute; top:780px; width: 75%; left:160px">
    <legend style = "color:white; font-size: 20px">Update and Delete Meals</legend>
		<table align="center" style = "color:white; font-size: 20px; width:88%;">
			<tr>
				<td align="left"><input type = "text" name="Meals_ID" placeholder="Enter id to Search" /></td>
				<td align="right"><input type = "submit" class = "button" name="search" value="Search by ID"></td>
			</tr>
		</table>

		<div class="retrieve">	
		<table align="center" style = "color:white; font-size: 20px; width:88%;">
			<tr>
				<th align="left">Meal Name</th>
				<th align="center">Meal Price</th>
				<th align="center">Meal Plan</th>
				<th align="center">Meal Type</th>
				<th align="center">Meal Image</th>
			</tr> <br>

			<?php
				include("../Templates/connection.php");
				if(isset($_POST['search']))
				{
					$Meals_ID = $_POST['Meals_ID'];

					$query = "SELECT * FROM meals where Meals_ID='$Meals_ID' ";
					$query_run = mysqli_query($con,$query);

					while($row = mysqli_fetch_array($query_run))
					{
			?>
						<tr>
							<td align="left"><?php echo $row['Meals_Name']; ?> </td>
							<td align="center"><?php echo $row['Price']; ?> </td>
							<td align="center"><?php echo $row['Meal_Plan']; ?> </td>
							<td align="center"><?php echo $row['Meal_Type']; ?> </td>
							<td align="right"><?php echo '<img src="data:image;base64, '.base64_encode($row['Meal_Image']).'" alt="Image" style="width: 250px; height: 200px" >' ?> </td>
						</tr>
						<?php
					}
				}
				?>
		</table>
		</div>
		
		<table align="center" style = "color:white; font-size: 20px; width:88%;">
			<tr>
                <td align="right">
                    <input type="submit" class="button" name="insert" value="Update Meal">
					<input type="submit" class="button" name="insert" value="Delete Meal">
                </td>
            </tr>
		</table>

	</fieldset>
	</form>

	</body>
</html>