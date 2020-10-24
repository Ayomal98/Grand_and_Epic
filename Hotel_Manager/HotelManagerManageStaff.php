<html>
	<head>
	<link rel="stylesheet" href="../Css/employee.css">
		<title>
		Hotel Manager Manage Staff
		</title>
	</head>	
	<body bgcolor = "black">

	<center>
	<img src="../Images/Logo.png" width="20%">
	</center>
		<div class="sidenav">	
			<button class="dropdown-btn">Manage Staff &#128317;
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-container">
                    <a href="HotelManagerDashboard.html"><font size = "4 px">Dashboard</font></a>
                    <a href="ManagerBookingDetails.html"><font size = "4 px">Booking Details</font></a>
                    <a href="HotelManagerPromotions.html"><font size = "4 px">Promotions</font></a>
                    <a href="HotelManagerCustomerFeedback.html"><font size = "4 px">Customer Feedback</font></a>
                    <a href="HotelManagerManageRoom.html"><font size = "4 px">Manage Room</font></a>
				    <a href="HotelManagerEarlyCheckOuts.html"><font size = "4 px">Early Check-Outs</font></a>
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

	<fieldset style = " position:absolute; top:280px; width: 75%; left:160px">
		<legend style = "color:white; font-size: 20px">Manage Staff</legend>
        <table style = "color:white; font-size: 20px; width: 100%;">
            <tr>
				<form action="StaffAdd.php" method="POST">
                    
                        <table style = "color:white; font-size: 20px; width:88%;">
                                <tr>
                                    <td align="left" style="display: none;left:0px;top: 0px;" id="id-1" >Employee ID:</td>
                                    <td align="center" style="display: none;left:0px;top:0px;" id="input-id-1" ><input type="text" name="empID" size="20"class="inputs" required></td>
                                    <td align="right"><input type="button" class="button" value="SEARCH ID" onclick="displayID()"  style="position: absolute;top:40px;right:10vh" ></td>
                                </tr>
                                <tr>
                                    <td align="left">Employee Type:</td>
                                    <td align="center"><input type="text" name="empType" size="20"placeholder="Supervisor/Receptionist/Employee"class="inputs" required></td>
                                </tr>
                                <tr>
                                    <td align="left">First Name:</td>
                                    <td align="center"><input type="text" name="empFname" size="20"class="inputs" required></td>
                                </tr>
                                <tr>
                                    <td align="left">Last Name:</td>
                                    <td align="center"><input type="text" name="empSname" size="50"class="inputs" required></td>
                                </tr>
                                <tr>
                                    <td align="left">Password:</td>
                                    <td align="center"><input type="password" name="empPass" size="50" placeholder="Password"class="inputs" required></td>
                                </tr>
                                <tr>
                                    <td align="left">Email Address:</td>
                                    <td align="center"><input type="email" name="empEmail" size="50"class="inputs" required></td>
                                </tr>
                                <tr>
                                    <td align="left">Contact No:</td>
                                    <td align="center"><input type="tel" name="empContact" size="20"class="inputs" required></td>
                                </tr>
                        </table>   

                </form>
            </tr>
        </table>
                            <table style = "color:white; font-size: 20px; width:81%;">
                                <tr>
                                    <td align="right">
                                        <input type="submit" class="button" value="  ADD  " name="ADD">
                                        <input type="button" class="button" value="UPDATE" name="UPDATE">
                                        <input type="button" class="button" value="DELETE" name="DELETE">
                                    </td>
                                </tr>
                            </table>
                 
	</fieldset>

	<table style ="width:100%;position:absolute">
        <tr>
            <th rowspan = "5">
                <form>
                    <fieldset style = " position:absolute; top:600px; width: 75%; left:160px">
                        <legend style = "color:white; font-size: 20px">Respond to Leave Requests of Employees</legend>
                            <table style = "color:white; font-size: 20px; width:88%;">
                            <tr>
                                <td align="left">Employee ID:</td>
                                <td align="left"><input type="text" name="id" size="20" value="E04"></td>

                            </tr>
                            <tr>
                                <td align="left">Leave Start Date:</td>
                                <td align="left"><input type="text" name="startdate" size="20" value="05/26/2020"></td>
                            </tr>
                            <tr>
                                <td align="left">Leave End Date:</td>
                                <td align="left"><input type="text" name="enddate" size="20" value="05/27/2020"></td>
                            </tr>
                            <tr>
                                <td align="left">Reason for the leave:</td>
                                <td align="left"><textarea name="Message" rows="5" cols="53">Medical Leave</textarea></td>
                            </tr>
                            </table>
                
                            <table style = "color:white; font-size: 20px; width:75%;">
                                <tr>
                                    <td align="left">
                                        <a href="#" class="button" style="padding:10px 20px; border-radius:50%">&laquo;</a>
                                        <a href="#" class="button" style="padding:10px 20px; border-radius:50%">&raquo;</a>
                                    </td>
                                    <td align="right">
                                        <input type="button" class="button" value="ACCEPT">
                                        <input type="button" class="button" value="DECLINE">
                                    </td>
                                    
                                </tr>
                            </table>
                        
                    </fieldset>
                    </form>
            </th>
        </tr>
    </table>

            <table style ="border: 1px solid white;width:100%; position:absolute; top:825px" >
                <tr>
                    <td></td>
                    <td align = "center">
                        <p style = "font-family :Lato; font-size:25px; color :white"><b>Current Duty Roster</b></p>		
                    </td>
                </tr>
                <tr>
                <td style ="border: 1px solid white;">
                    <p style = "font-family :Lato; font-size:20px; color :white;">Employee ID</p>		
                </td>
                <td style ="border: 1px solid white;">
                    <p style = "font-family :Lato; font-size:20px; color :white;">Employee Name</p>		
                </td>
                <td style ="border: 1px solid white;">
                    <p style = "font-family :Lato; font-size:20px; color :white;">Section Assigned</p>		
                </td>
                </tr>
                <tr>
                    <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">E1234</p>
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Shehan Gunawardena</p>  
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Superior Rooms</p>  
                       </td>    
                </tr>
                <tr>
                    <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">E6547</p>
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Sanath Abeysiri</p>  
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Dine-In Area</p>  
                       </td>
                </tr>
                <tr>
                    <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">E1244</p>
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Jayanthi Welmilla</p>  
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Panoramic Rooms</p>  
                       </td>
                </tr>
                <tr>
                    <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">E3334</p>
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Thanushi Subasinghe</p>  
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Reception</p>  
                       </td>
                </tr>
                <tr>
                    <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">E3034</p>
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Jayanthi Mendis</p>  
                       </td>
                       <td style ="border: 1px solid white;">
                        <p style = "font-family :Lato; font-size:15px; color :white;">Room Service</p>  
                       </td>
                </tr>
            </table>
            <script>
                function displayID(){
                    document.getElementById('id-1').style.display='inline-block';
                    document.getElementById('id-1').setAttribute("style","position:absolute");
                    document.getElementById('id-1').setAttribute("style","top:60px");
                    document.getElementById('id-1').setAttribute("style","left:150px");
                    document.getElementById('input-id-1').style.display='inline-block';
                    document.getElementById('input-id-1').setAttribute("style","position:absolute");
                    document.getElementById('input-id-1').setAttribute("style","top:60px");
                    document.getElementById('input-id-1').setAttribute("style","left:150px");
                }
            </script>
	</body>
</html>