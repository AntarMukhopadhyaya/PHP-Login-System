		<?php
		session_start();


		?>
		<!DOCTYPE html>
		<html>

		<head>

			<title>Login System With PHP</title>

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
				<a class="navbar-brand" href="#">Movie Center</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="download.php">Movies</a>
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
			';
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
						<li class="nav-item">
						<a class="nav-link" href="download.php">Movies</a>
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
			</nav>';
			}



			?>





			<div class="jumbotron">
				<h1 class="display-4">PHP Login</h1>
				<p class="lead">Login/Register systme With PHP.</p>
				<hr class="my-4">
				<p>Welcome to our Site.</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg" href="download.php" role="button">Download Latest Movies Now </a>
				</p>
			</div>

			<section class="my-5">
				<div class="py-5">
					<h3 class="text-center">About us</h3>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<img src="images/cc2.jpeg" class="img-fluid aboutimg">
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<h2 class="display-4">Write Something...</h2>
							<p class="py-3">Write Something..
							</p>
							<a href="about.php" class="btn btn-outline-success">Wanna Know Me</a>
						</div>
					</div>
				</div>

			</section>
			


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
			
			<footer>
				<p class="p-3 bg-dark text-white text-center">@antar</p>
			</footer>

		</body>

		</html>
