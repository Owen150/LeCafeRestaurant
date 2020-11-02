<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
	<body>
		<div class="container" id="container">
			<div class="form sign-up-container">
				<form action="process_register.php" method="post" enctype="multipart/form-data">
					<h2>Tyap Kitchenware</h2>	

						<label for="full_name"><span>Full Name:</span>
							<input type="text" name="fname" value="" id="full_name">
						</label>
								
						<label for="email_address"><span>Email Address:</span>
							<input type="email" name="email" value="" id="email_address">
						</label>
					
						<label for="city_name"><span>Residence:</span>
							<input type="text" name="cname" value="" id="residence">
						</label>		
					
						<label for="prof_pic"><span>Profile Picture</span>
							<input type="file" name="pic" value="" id="prof_pic" value="">
						</label>	
						
						<label for="pwd"><span>Password:</span>
							<input type="password" name="password" value="" id="pwd" minlength="9">
						</label>

						<button class="submit" type="button" name="Register" value="Register">Sign Up</button>
				</form>
			</div>
				<div class="sub-cont">
					<div class="img">
						<div class="img-text">
							<h2>Welcome</h2>
							<h2>Karibu</h2>
						<p class="existing-acc"><a href="login.php">Already have an account? Sign In</a></p>	
						</div>
					</div>
				</div>	
		</div>		
	</body>
</html>