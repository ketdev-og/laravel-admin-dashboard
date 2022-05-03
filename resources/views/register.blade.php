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
			Saxo Investment Bank | Register
		</title>

		
		<link rel="stylesheet" media="screen and (max-width:1700px)" type="text/css" href="register.css">
		<link rel="stylesheet" media="screen and (max-width:1100px)" type="text/css" href="register1.css">
		<link rel="stylesheet" media="screen and (max-width:600px)" type="text/css" href="register2.css">
		<link rel="stylesheet" media="screen and (max-width:576px)" type="text/css" href="register3.css">
		
	</head>
	<body>
		<!--The Wrapper Starts Here-->
		<div class="wrapper">

			<!--The Login Content Starts Here-->
			<div class="login_content">
				<div class="logo">
					<a href="../index"><img src="logo/logo9.png" width="300" height="100"></a>
				</div>
				<h2>Registration</h2>

				<div class="login_main">
					<form id="myform" action="formcomplete" onsubmit="return validateform()" method="post" required>

						<div class="form1" id="form1">
							<label for="fname">First Name</label>
							<input type="text" name="fname" id="fname" placeholder="Enter Your First Name">
						</div>
						<div class="form1" id="form2">
							<label for="lname">Last Name</label>
							<input type="lname" name="lname" id="" placeholder="Enter Your Last Name">
						</div>
						<div class="form2" id="form3">
							<label for="email">Email</label>
							<input type="email" name="email" id="" placeholder="Enter Your Email">
						</div>
						<div class="form2" id="form4">
							<label for="password">Password</label>
							<input type="password" name="password" id="" placeholder="Enter Your Password">
						</div>
						<div class="form3" id="form5">
							<label for="password">Confirm Password</label>
							<input type="password" name="confirm_password" id="" placeholder="Confirm Your Password">
						</div>
						<div class="form3" id="form6">
							<label for="question">Security Question</label>
							<input type="text" name="question" id="" placeholder="What is Your Pet Name?">
						</div>
						<div class="form4" id="form7">
							<label for="question2">Security Question</label>
							<input type="text" name="question2" id="" placeholder="Verify Your Pet Name">
						</div>
						<div class="form4" id="form8">
							<label for="phone">Phone Number</label>
							<input type="number" name="phone" id="" placeholder="Enter Your Phone Number">
						</div>
						<div class="form5" id="form9">
							<label for="gender">Gender</label>
							<select name="gender" id="gender">
								<option selected disabled>Choose Your Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
						<div class="form5" id="form10">
							<label for="account_type">Account Type</label>
							<select name="account_type" id="account_type" required>
								<option selected disabled>Choose Account Type</option>
								<option value="personal">Personal</option>
								<option value="business">Business</option>
							</select>
						</div>
						<div class="form5" id="form11">
							<label for="country">Country</label>
							<input type="text" name="country" id="" placeholder="Enter Your Nationality">
						</div>
						<div class="submitting">
							<input type="submit" name="submit" value="REGISTER" id="submit_me">
						</div>
						
					</form>
					<div class="buttons">
						<button id="previous">Previous</button><button id="next">Next</button>
					</div>

					<div class="pagenumber">
						<section id="page1">1</section><section id="page2">2</section><section id="page3">3</section><section id="page4">4</section><section id="page5">5</section><section id="page6">6</section>
					</div>

					<div class="login_main1">


						<div class="create_acount">
							<p id="loginme">Already Have an Account?&nbsp;&nbsp;<a href="login">Login Now</a></p>
						</div>
						<div class="forgot_password">
							<p>You will need these security details to log in to Online Banking:</p>
							<ul type="bullet">
								<li>Your customer number or Username</li>
								<li>Password</li>
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

			/*Script For Next & Previous*/
				/*Declaring Variables*/
				var form1 = document.getElementById('form1');
				var form2 = document.getElementById('form2');
				var form3 = document.getElementById('form3');
				var form4 = document.getElementById('form4');
				var form5 = document.getElementById('form5');
				var form6 = document.getElementById('form6');
				var form7 = document.getElementById('form7');
				var form8 = document.getElementById('form8');
				var form9 = document.getElementById('form9');
				var form10 = document.getElementById('form10');
				var form11 = document.getElementById('form11');

				var submit_me = document.getElementById('submit_me');

				var next = document.getElementById('next');
				var previous = document.getElementById('previous');

				var page1 = document.getElementById('page1');
				var page2 = document.getElementById('page2');
				var page3 = document.getElementById('page3');
				var page4 = document.getElementById('page4');
				var page5 = document.getElementById('page5');
				var page6 = document.getElementById('page6');

				var i = 0;

				/*Main Code*/
				next.addEventListener('click',function(){
					i++;
					switch (true){
						case i == 1:
							previous.style.display = "block";
							next.style.display = "block";
							form1.style.display = "none";
							form2.style.display = "none";
							form3.style.display = "flex";
							form4.style.display = "flex";
							submit_me.style.display = "none";
							page1.style.backgroundColor = "#B4B3B5";
							page2.style.backgroundColor = "#696C68";
						break;

						case i == 2:
							previous.style.display = "block";
							form3.style.display = "none";
							form4.style.display = "none";
							form5.style.display = "flex";
							form6.style.display = "flex";
							submit_me.style.display = "none";
							page2.style.backgroundColor = "#B4B3B5";
							page3.style.backgroundColor = "#696C68";
						break;

						case i == 3:
							previous.style.display = "block";
							form5.style.display = "none";
							form6.style.display = "none";
							form7.style.display = "flex";
							form8.style.display = "flex";
							submit_me.style.display = "none";
							page3.style.backgroundColor = "#B4B3B5";
							page4.style.backgroundColor = "#696C68";
						break;

						case i == 4:
							previous.style.display = "block";
							form7.style.display = "none";
							form8.style.display = "none";
							form9.style.display = "flex";
							form10.style.display = "flex";
							submit_me.style.display = "none";
							page4.style.backgroundColor = "#B4B3B5";
							page5.style.backgroundColor = "#696C68";
						break;

						case i == 5:
							next.style.display = "none";
							previous.style.display = "block";
							form9.style.display = "none";
							form11.style.display = "flex";
							page5.style.backgroundColor = "#B4B3B5";
							page6.style.backgroundColor = "#696C68";
							submit_me.style.display = "flex";
						break;

						default:

					}
				})

				previous.addEventListener('click',function(){
					i--;
					switch (true){
						case i == 0:
							previous.style.display = "none";
							next.style.display = "block";
							form1.style.display = "flex";
							form2.style.display = "flex";
							form3.style.display = "none";
							form4.style.display = "none";
							submit_me.style.display = "none";
							page1.style.backgroundColor = "#696C68";
							page2.style.backgroundColor = "#B4B3B5";
						break;

						case i == 1:
							previous.style.display = "block";
							form3.style.display = "flex";
							form4.style.display = "flex";
							form5.style.display = "none";
							form6.style.display = "none";
							submit_me.style.display = "none";
							page2.style.backgroundColor = "#696C68";
							page3.style.backgroundColor = "#B4B3B5";
						break;

						case i == 2:
							previous.style.display = "block";
							form5.style.display = "flex";
							form6.style.display = "flex";
							form7.style.display = "none";
							form8.style.display = "none";
							submit_me.style.display = "none";
							page3.style.backgroundColor = "#696C68";
							page4.style.backgroundColor = "#B4B3B5";
						break;

						case i == 3:
							previous.style.display = "block";
							form7.style.display = "flex";
							form8.style.display = "flex";
							form9.style.display = "none";
							form10.style.display = "none";
							submit_me.style.display = "none";
							page4.style.backgroundColor = "#696C68";
							page5.style.backgroundColor = "#B4B3B5";
						break;

						case i == 4:
							next.style.display = "block";
							previous.style.display = "block";
							form9.style.display = "flex";
							form11.style.display = "none";
							submit_me.style.display = "none";
							page5.style.backgroundColor = "#696C68";
							page6.style.backgroundColor = "#B4B3B5";
						break;

						default:

					}
				})

				/*End of Next & Previous*/

				/*Script For Validating form*/

				function validateform() {
					var a = document.forms["myform"]
					["fname"].value;
					var b = document.forms["myform"]
					["lname"].value;
					var c = document.forms["myform"]
					["email"].value;
					var d = document.forms["myform"]
					["password"].value;
					var e = document.forms["myform"]
					["confirm_password"].value;
					var f = document.forms["myform"]
					["question"].value;
					var g = document.forms["myform"]
					["question2"].value;
					var h = document.forms["myform"]
					["phone"].value;
					var j = document.forms["myform"]
					["country"].value;



					switch (true){
						case a == "":
							alert("Please Enter Your First Name");
							return false;
						break;

						case b == "":
							alert("Please Enter Your Last Name");
							return false;
						break;

						case c == "":
							alert("Please Enter an Email");
							return false;
						break;

						case d == "":
							alert("Please Choose a Password");
							return false;
						break;

						case e == "":
							alert("Please Confirm Your Password");
							return false;
						break;

						case d !== e:
							alert("Password Does Not Match");
							return false;
						break;

						case f == "":
							alert("Please Choose Security Answer");
							return false;
						break;

						case g == "":
							alert("Please Confirm Your Security Answer");
							return false;
						break;

						case f !== g:
							alert("Security Answer Does Not Match");
							return false;
						break;

						case h == "":
							alert("Please Enter Your Phone Number");
							return false;
						break;

						case j == "":
							alert("Please Enter Select Your Nationality");
							return false;
						break;

						default:
					}
				}
		</script>
	</body>
</html>
