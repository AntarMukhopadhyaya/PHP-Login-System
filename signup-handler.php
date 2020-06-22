<?php 

if (isset($_POST['submit1'])) {
	require 'config.php';


				$username =$_POST['username'];
			    $email = $_POST['email'];
			    $password = $_POST['pwd'];
			    $confirm_password= $_POST['pwd1'];

			 	if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
			 		header("Location:login.php?error=emptyfields&username=".$username."&mail=".$email);
			 		exit();
			 		
			 	}
			 	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$username)) {

			 		header("Location:signup.php?error=invalidemailanduser&username=");
			 		exit();
			 		
			 	}
			 	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			 		header("Location:signup.php?error=invalidemail&username=".$username);
			 		exit();
			 	}
			 	elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
			 		header("Location:signup.php?error=invaliduser&mail=".$email);
			 		exit();
			    }
			    elseif ($password !== $confirm_password) {
			    	header("Location:signup.php?error=passwordcheck&user=".$username."&email".$email);
			 		exit();
			    }
			    else{
			    	$sql = "SELECT username FROM login WHERE username=?";
			    	$stmt = mysqli_stmt_init($conn);

			    	if (!mysqli_stmt_prepare($stmt,$sql)) {
			    		header("Location:signup.php?error=sqlerror");
			 		   exit();
			    	}
			    	else{
			    		mysqli_stmt_bind_param($stmt,"s",$username);
			    		mysqli_stmt_execute($stmt);
			    		mysqli_stmt_store_result($stmt);
			    		$resultcheck = mysqli_stmt_num_rows($stmt);
			    		if ($resultcheck >0) {
			    			header("Location:signup.php?error=usertaken&mail=".$email);
			 		        exit();
			    		}
			    		else{
			    			$sql = "INSERT INTO login(username, password,  email) VALUES(?,?,?)";
			    			$stmt = mysqli_stmt_init($conn);
			    			if (!mysqli_stmt_prepare($stmt,$sql)) {
			    		    header("Location:signup.php?error=sqlerror");
			 		        exit();
			    		}
			    		else{
			    			$password_hash = password_hash($password, PASSWORD_DEFAULT);
			    			mysqli_stmt_bind_param($stmt,"sss",$username,$password_hash,$email);
			    		    mysqli_stmt_execute($stmt);
			    		    header("Location:index.php?signup=sucess");
			    		    exit();
			    		}
			    	}
			    }
			    mysqli_stmt_close($stmt);
			    mysqli_close($conn);

			}






}
else{
	header('location:signup.php');
	exit();
}	


?>