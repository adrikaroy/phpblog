<?php include 'db.php';

session_start();


$email=$_POST['email'];
$pass=$_POST['password'];

$sql = "SELECT email,password FROM user WHERE email = '$email' AND password = '$pass'";

$result= mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {

  	
	$_SESSION["email"]=$_POST['email'];
	$_SESSION["password"]=$_POST['password']; 

	header("Location: http://localhost/blog/index.php"); 

    }
else {
    header("Location: http://localhost/blog/signin1.php"); 
}

mysqli_close($conn);

?>
