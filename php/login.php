<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container id="container">
		<div class="form sign-in-container">
			<form action="logout.php" method="post">
				<h2>Tyap Kitchenware</h2>

						<label for="email_address"><span>Email Address:</span>
							<input type="email" name="email" value="" id="email_address">
						</label>

						<label for="pwd"><span>Password:</span>
							<input type="password" name="password" value="" id="pwd">
						</label>
					

					<button class="submit" type="button" name="Login" value="Login">Sign In</button>
					<p class="new-user"><a href="#">Forgot Password?</a></p>

					<div class="social-media">
						<ul>
							<li><img src="img/facebook.png"></li>
							<li><img src="img/twitter.png"></li>
							<li><img src="img/linkedin.png"></li>
							<li><img src="img/instagram-sketched.png"></li>
						</ul>
					</div>
			</form>				
		</div>
		<div class="sub-cont">
			<div class="img">
				<div class="img-text">
					<h2>Welcome</h2>
					<h2>New Here?</h2>
					<p class="new-user"><a href="index.html">Sign Up Today</a></p>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>