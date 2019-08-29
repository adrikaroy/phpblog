<?php include 'db.php';
$email=$_GET['email'];
$title=$_GET['title'];
$sql3="SELECT * FROM posts WHERE email='$email' AND title='$title'";

$res3=mysqli_query($conn,$sql3);
?>
<!DOCTYPE html>
<html>
<head>

<!-- Css -->
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

<div class="container" style="margin-top: 80px; margin-bottom: 80px;">
  <?php 
  if (mysqli_num_rows($res3)>0) {
    while ($row=mysqli_fetch_assoc($res3)) {
      
?>
 <ul class="collection">
    <li class="collection-item avatar">
      <img src="img/<?php echo $row['image']; ?>" alt="" class="circle">
      <a href="user.php?email=<?php echo $row['email']; ?>" >
      <?php echo " ".$row['author']; ?><br></a>
      <span><h3><?php echo $row['title']; ?></h3> </span>
      
    </li>
  </ul>
    <p>
        <?php echo $row['content']; ?>
      </p>       
  <?php } } ?>
</div>



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


















