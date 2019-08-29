<?php include 'db.php';?>
<?php session_start(); 
$email=$_GET['email'];
$sql="SELECT * FROM user WHERE email='$email'";
$res=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>
<body>

<nav class="blue-grey darken-4">
    <div class="nav-wrapper">
      <div class="brand-logo">DREAD FEED</div>
      <ul id="nav-mobile" class="right show-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
      </ul>
  	</div>
</nav>  	

<div class="row"></div>

<?php 
	if (mysqli_num_rows($res)>0) {
		while ($row=mysqli_fetch_assoc($res)) {
			
?>

	<div class="row">
		<div class="col s4">
			<img class="responsive-img" src="img/<?php echo $row['image'];?>">
		</div>

		<div class="col s8">
		  <p>Name : <?php echo $row['name']; ?> </p>
          <p>Email : <?php echo $row['email']; ?> </p>
          <p>About the author : </p>
          <p><?php echo $row['bio']; ?></p>
		</div>
		
	</div>

	<?php } } ?>	

<?php

$sql2="SELECT title FROM posts WHERE email='$email'";
$res2=mysqli_query($conn,$sql2);
?>

<div class="container">
	<div class="row">
		<div class="col s4">
			<h3>Written posts</h3>
				<?php
					if(mysqli_num_rows($res2)>0){
						while($row2=mysqli_fetch_assoc($res2)){
			?>
<div class="col s12" style="width: 70vw;">
      <div class="card-panel white">
        <span class="black-text">
        	<?php echo "<a href='post.php?email=".$email."&title=".$row2['title']."'><h6>".$row2['title']."</h6></a>";
 ?>
        </span>
      </div>
</div>					

					 

			<?php				
						}
					}
				?>

		</div>
		
	</div>
</div>

<?php

if(isset($_SESSION['email']))
{
?>

<div class="col s12">
      <div class="card-panel white">
        <span class="black-text">
        	<a href="write.php"><h6><b>Write an article....</b></h6></a>
        </span>
      </div>
</div>
<?php
}
else{
?>

<div class="col s12">
      <div class="card-panel white">
        <span class="black-text">
        	<a href="signin1.php"><h6><b>Write an article....</b></h6></a>
        </span>
      </div>
</div>

<?php
}
?>


<footer class="page-footer blue-grey darken-4">
<div class="footer-copyright">
    AND ACTION, Copyright &copy; 2017
</div>
</footer>
             

<!-- JavaScript -->
 <script src="materialize/js/materialize.min.js">	
 </script>

</body>
</html>