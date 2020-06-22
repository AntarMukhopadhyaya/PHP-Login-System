<?php 

if(isset($_POST['submit2'])){

    
    require'config.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    if(empty($username)|| empty($password)|| empty($email)){
        header('location:log-in.php?error=emptyfields');
	    exit();

    }
    else{
        $sql = "SELECT * FROM login WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header('location:log-in.php?error=sqlerror');
            exit();

        }
        else{
           mysqli_stmt_bind_param($stmt,"ss",$email,$email);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           if($row = mysqli_fetch_assoc($result)){
               $password_check = password_verify($password,$row['password']);
               if($password_check == FALSE){
                header('location:log-in.php?error=wrongpassword');

                exit();
                   

               }
               else if($password_check == true){
                   session_start();
                   $_SESSION['userId'] = $row['sno'];
                   $_SESSION['userName'] = $row['username'];
                   header('location:index.php?login=sucess');

                   exit();


               }
               else{
                header('location:log-in.php?error=wrongpassword');

                exit();

               }

           }
           else{
            header('location:log-in.php?error=nouser');
            exit();
    

           }
        }
    }

}
else{
    header('location:log-in.php');
	exit();
}


?>