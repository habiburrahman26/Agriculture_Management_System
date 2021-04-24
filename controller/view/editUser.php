<?php

 	$title = 'Edit User';
	include_once('header.php');

?>
<body>
		<?php
		session_start();
			if (isset($_SESSION['message'])) {?>
				<div class="message">
					<?php   echo $_SESSION['message'];
					 unset($_SESSION['message']);?>
				</div>			
		<?php		
			}
		?>

		<?php  include_once('midel.php'); ?>
	
		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div id="msg" style="display: none;"></div>
		<div class="row-right">
			<h1 id="user">Edit User</h1>
			<form method="POST" action="../controller/editUser.php?id=<?php $id = $_REQUEST['id']; echo $id; ?>" onsubmit = "return userValidation()">

				<?php  
					require_once('../model/userModel.php'); 
					$row = getUserByID($id);
				 ?>
				<label>Name</label><br>
				<input id="name" type="text" name="name" placeholder="Name..." value="<?php echo $row['name']; ?>"><br>
				<label id="lname" style="color: red; font-size: .8rem;"></label><br>
				<label>Username</label><br>
				<input id="username"  type="text" name="username" placeholder="Username..." 
					   value="<?php echo $row['username']; ?>"><br>

				<label id="luser" style="color: red; font-size: .8rem;"></label><br>
				<label>Email</label><br>
				<input id="email" type="email" name="email" placeholder="Email..." value="<?php echo $row['email']; ?>"><br>
				<label id="lemail" style="color: red; font-size: .8rem;"></label><br>
				<label>Pasword</label><br>
				<input id="password" type="password" name="password" placeholder="Password..." 
					   value="<?php echo $row['password']; ?>"><br>
				<label id="lpassword" style="color: red; font-size: .8rem;"></label><br>
				<label>Active</label><br>
				<input id="active" type="text" name="active" placeholder="Active.." value="<?php echo $row['active']; ?>">
				<label id="lactive" style="color: red; font-size: .8rem;"></label>

				
				<input id="add_button" type="submit" name="submit" value="save">
				
			</form>
		</div>

		<script>
			window.addEventListener('mouseup',function(e){
				const menu = document.getElementById('menu');
				if (e.target !=menu) {
					menu.style.display = 'none';
				}
			});

			const name = document.getElementById('name');
			const username = document.getElementById('username');
			const email = document.getElementById('email');
			const password = document.getElementById('password');
			const repass = document.getElementById('repass');
			const lname = document.getElementById('lname');
			const luser = document.getElementById('luser');
			const lemail = document.getElementById('lemail');
			const lpassword = document.getElementById('lpassword');
			const active = document.getElementById('active');
			const lactive = document.getElementById('lactive');

			name.onfocus = function(){
				lname.innerText = "";
				name.style.border = 'none';
				name.style.background = 'white';
			};

			username.onfocus = function(){
				luser.innerHTML = "";
				username.style.border = 'none';
			};
			email.onfocus = function(){
				lemail.innerHTML = "";
				email.style.border = 'none';
			};
			password.onfocus = function(){
				lpassword.innerHTML = "";
				password.style.border = 'none';
			};
			active.onfocus = function(){
				lactive.innerHTML = '';
				active.style.border = 'none';
			}
		</script>

</body>
</html>

