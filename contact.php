<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">

</head>

<body>


	<?php
	if (isset($_SESSION['userName'])) {
		echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">Our Movie</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
	
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="download.php">Movies </a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="logout.php">Log Out</a>
							</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav> 
				<section>
				<form action="userinfo.php " method="POST">
				<div class="form-group">
					<label for="uname">Name</label>
					<input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
					<div class="valid-feedback">Valid.</div>
					<label for="uname">Email</label>
					<div class="invalid-feedback">Please fill out this field.</div>
					<input type="email" class="form-control" id="uname" placeholder="Enter Email" name="email" required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
					<div class="form-group">
						<label for="uname">Mobile Number </label>
						<input type="number" class="form-control" id="uname" placeholder="Enter Mobile number" name="phone" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					<div class="form-group">
						<label for="pwd">Message</label>
						<textarea class="form-control" name="message"></textarea>

					</div>
					<div class="form-group form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Check this checkbox to continue.</div>
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</section>';
	} else {
		echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Our Movie</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="download.php">Movies <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="log-in.php">Login</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Signup</a>
				</li>
				
				
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact Us</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<section> 
	<center><h1>You have to Login/Register to acess these page<h2></center>
	</section>';
	}





	?>
	<!-- Start of adf.ly banner code -->
	<div style="width: 728px; text-align: center; font-family: verdana; font-size: 10px;"><a href="https://join-adf.ly/18752865"><img border="0" src="https://cdn.adf.ly/images/banners/adfly.728x90.2.gif" width="728" height="90" title="AdF.ly - shorten links and earn money!" /></a><br /><a href="https://join-adf.ly/18752865">Get paid to share your links!</a></div>
	<!-- End of adf.ly banner code -->
	<footer>
		<p class="p-3 bg-dark text-white text-center">@Antar Mukhopadhyaya</p>
	</footer>


</body>

</html>