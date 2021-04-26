<?php
session_start();
	$title = "Work Schedule page";
	include('header.php');
?>
<table border="1" width="100%">
 	<tr height="100px">
		<td colspan="3" align="right">
			Logged in as <a href="ViewP.php"> <?php echo $_SESSION['username']?> |</a><a href="../controller/logout.php"> Logout</a>
		</td>
	</tr>
	<tr colspan="3" height="450px">
		<td width="200px">
	<div id="nav_bar">
				<b>My Account</b> 
				<br>
				<br>
				<hr>
		<li><a href="home.php"> Home </a>	</li>
		<li><a href="viewP.php">View Profile</a></li> 
		<li><a href="editP.php">Edit Profile</a></li> 
		<li><a href="changePass.php">Change Password</a></li>
		<li><a href="propic.php">Change Profile Picture</a></li>
		<li><a href="list.php"> Worker List </a>	</li> 
		<li><a href="work.php"> New Work </a>	</li>
		<li><a href="workList.php"> New Work List</a>	</li>
		<li><a href="createNew.php"> Create New Worker </a>	</li> 
		<li><a href="viewJob.php">View Your Jobs</a></li>	
		<li><a href="schedule.php">Work Schedule</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="notification.php"> Notification </a>	</li> 
		<li><a href="../controller/logout.php">Logout</a></li> <br>
	</div>
	</td>
	<td colspan="3">
	<div id="page_title">
		<form method="post" action=""> 

		<fieldset style="width:90%;">
			<legend><b>Work Schedule</b></legend>
			
			<table border="1">	
				<thead>
				<tr>
					<td colspan="8" align="center" >
						<select name="status">
							<option value="m">Jan</option>
							<option value="m">Feb</option>
							<option value="m">Mar</option>
							<option value="m">Apr</option>
							<option value="m">May</option>
							<option value="m">Jun</option>
							<option value="m">Jul</option>
							<option value="m">Aug</option>
							<option value="m">Sept</option>
							<option value="m">Oct</option>
							<option value="m">Nov</option>
							<option value="m">Dec</option>
							
							<option value="select" selected>Apr</option>
						</select>
					
						<select name="status">
							<option value="y">2016</option>
							<option value="y">2017</option>
							<option value="y">2018</option>
							<option value="y">2019</option>
							<option value="y">2020</option>
							<option value="y">2021</option>
							
							<option value="select" selected>2021</option>
						</select>
					</td>
				</tr>
				</thead>
				<thead align="center">
					<tr>
						<th>Sunday</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
					</tr>
				</thead>
				
				<tbody>
					<tr align="center">
					
						<td>1</td>
						<td><a href="workList.php"> 2</a></td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
					</tr>
					<tr align="center">
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
					</tr>
					<tr align="center">
						<td>15</td>
						<td>16</td>
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
						<td>21</td>
					</tr>
					<tr align="center">
						<td>22</td>
						<td>23</td>
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
						<td>28</td>
					</tr>
					<tr align="center">
						<td>29</td>
						<td>30</td>
						<td>31</td>
						<td> </td>
						<td> </td>
						<td> </td>
						<td> </td>
					</tr>
				</tbody>
			</table>	
			
			<br>
			
			<br><br>

		</fieldset>
	</form>		
	</div>
	</td>

	</tr>
	
	
</table>

<?php include('footer.php') ?>