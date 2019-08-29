<?php include 'db.php';

# header("location :http://localhost/blog/write.php");
session_start();

$email=$_SESSION['email'];

$sql = "SELECT name,image FROM user WHERE email = '$email'";

$result= mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		$image=$row['image'];
		$name=$row['name'];
	} 

    }
$title=$_POST['title'];
$content=$_POST['content'];

$sql2="INSERT INTO posts(title,content,author,image,email) VALUES('$title','$content','$name','$image','$email')";
$res=mysqli_query($conn,$sql2); 
if($res){
	header("location: http://localhost/blog/user.php?email=".$email);
}
else{
	header("location :http://localhost/blog/write.php");
}


?>










