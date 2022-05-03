<!DOCTYPE html>

<!--For Slider CSS link, see line 19-->
<!--For Desktop CSS link, see line 20-->
<!--For Tablet CSS link, see line 21-22-->
<!--For Mobile CSS link, see line 23-->


<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
			Saxo Investment Bank | Forgot Password
		</title>

		
		<link rel="stylesheet" media="screen and (max-width:1700px)" type="text/css" href="forgot.css">
		<link rel="stylesheet" media="screen and (max-width:1100px)" type="text/css" href="forgot1.css">
		<link rel="stylesheet" media="screen and (max-width:600px)" type="text/css" href="forgot2.css">
		<link rel="stylesheet" media="screen and (max-width:576px)" type="text/css" href="forgot3.css">
		
	</head>
	<body>
		<!--The Wrapper Starts Here-->
		<div class="wrapper">

			<!--The Login Content Starts Here-->
			<div class="login_content">
				<div class="logo">
					<a href="../index"><img src="logo/logo9.png" width="300" height="100"></a>
				</div>
				<h2>Forgot Password</h2>

				<div class="login_main">
					<form id="myform" action="formcomplete1" onsubmit="return validateform()" method="post" required>

						<div class="form1">
							<label for="usname">Username</label>
							<input type="text" name="username" id="user" placeholder="Enter Your Username">
						</div>
						<div class="form1">
							<label for="email">Email</label>
							<input type="email" name="email" id="pass" placeholder="Enter Your Email">
						</div>
						<input type="submit" name="submit" value="SUBMIT" id="submit_me">
						
					</form>
					<div class="login_main1">


						<div class="create_acount">
							<p id="loginme">First time logging in?&nbsp;&nbsp;<a href="register">Create Account</a></p>
						</div>
						<div class="create_acount">
							<p id="loginme">Have an account?&nbsp;&nbsp;<a href="login">Login Now</a></p>
						</div>
						<div class="forgot_password">
							<p>You will need these security details to reset your password:</p>
							<ul type="bullet">
								<li>Your customer number or Username</li>
								<li>email</li>
							</ul>
						</div>


					</div>
				</div>


			</div>
			<!--The Login Content Ends Here-->

		</div>
		<!--The Wrapper Ends Here-->

		<!--Footer Starts Here-->
		<div class="footer">
			<p>Copyright 2022 Saxoinv. All rights reserved.</p>
		</div>
		<!--Footer Ends Here-->


		<script type="text/javascript">
			
			

				function validateform(){
					var x = document.forms["myform"]
					["username"].value;

					var y = document.forms["myform"]
					["email"].value;
					if (x == ""){
						alert("Please Enter Your Username");
						return false;
					}

					else if (y == ""){
						alert("Please Enter Your Email");
						return false;
					}

					else{}
					
				}



		</script>
	</body>
</html>
