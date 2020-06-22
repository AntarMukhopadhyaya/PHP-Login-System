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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Our Movie</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="download.php">Movies </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="log-in.php">Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Signup <span class="sr-only">(current)</span> </a>
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
  <?php
  if (isset($_SESSION['userName'])) {
    echo '<section><center><h1>You Are Logged In</h1></center>
    <center><a class="btn btn-primary" href="index.php" role="button">Return Back</a></center></section>';
    
  } else {

    echo '<section><div class="container">
    <h2>Horizontal form</h2>
    <form class="form-horizontal" action="signup-handler.php" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Username:</label>
        <div class="col-sm-10">
          <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required="">
          
         
          
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pwd1" placeholder="Confirm password" name="pwd1" required="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit1" class="btn btn-danger">Submit</button>
        </div>
      </div>
    </form>
  </div>
  </section>

';
  }
  ?>
</body>

</html>
