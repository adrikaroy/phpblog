<?php include 'db.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$bio=$_POST['bio'];
$target_dir = "img/";

$target_file = $target_dir . basename($_FILES['image']['name']);
$a= move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
$image= basename($_FILES['image']['name']);

$sql= "INSERT INTO user(name,email,password,image,bio) VALUES('$name','$email','$pass','$image','$bio')";

$res=mysqli_query($conn,$sql);

if($res)
{
	header("location: http://localhost/blog/signin1.php");
}
else
{
	header("location: http://localhost/blog/signup.php");
}



?>
