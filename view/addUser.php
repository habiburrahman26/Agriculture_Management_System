<?php

	$title = 'Add User';
	include_once('header.php');

?>
<body>
		<script>
		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target !=menu) {
				menu.style.display = 'none';
			}
		})
	</script>
		
		<?php  include_once('midel.php'); ?>
	
		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div id="msg" style="display: none;"></div>
		<div class="row-right">
			<h1 id="user">Add User</h1>
			<form method="POST" onsubmit = "return userValidation()">
				<input id="name" type="text" name="name" placeholder="Name..."><br>
				<label id="lname" style="color: red; font-size: .8rem;"></label><br>
				<input id="username"  type="text" name="usrname" placeholder="Username..."><br>
				<label id="luser" style="color: red; font-size: .8rem;"></label><br>
				<input id="email" type="email" name="email" placeholder="Email..."><br>
				<label id="lemail" style="color: red; font-size: .8rem;"></label><br>
				<input id="password" type="password" name="password" placeholder="Password..."><br>
				<label id="lpassword" style="color: red; font-size: .8rem;"></label><br>
				<div class="category" id="category">
					Type:
					<input type="radio" name="category" value="farmer">Farmer
					<input type="radio" name="category" value="buyer" >Buyer
					<input type="radio" name="category" value="worker">Worker<br>
				</div>
				<label id="lradio" style="color: red; font-size: .8rem;"></label><br>
				<input id="add_button" type="submit" name="submit" value="Add">
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
		</script>

</body>
</html>

