<?php include 'db.php';?>
<?php session_start(); 
$sql3="SELECT * FROM posts";
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
        <li><a href="about.php">ABOUT</a></li>

        <?php
        if(isset($_SESSION["email"]) && isset($_SESSION["password"])) {

          $email=$_SESSION["email"];
          $sql = "SELECT name FROM user WHERE email = '$email'";
          $result= mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
    
              while($row = mysqli_fetch_assoc($result)) {
        
          
        ?>  

        <li>
          <a class='dropdown-trigger btn' data-target='dropdown1'><?php echo $row["name"]; ?> </a>
         <ul id='dropdown1' class='dropdown-content'>
            <li><a href="logout.php">SIGN OUT</a></li>
            <li><a href="user.php?email=<?php echo $email; ?> ">MY PROFILE</a></li>

         </ul>
          </li>

  
        <?php 
          }
        }


        }
        else {
        ?> 
        <li><a href="signin1.php">SIGN IN</a></li>
        <?php
          }
        ?>  

      
      </ul>
    </div>
  </nav>


  <div class="slider">
    <ul class="slides">
      <li>
        <img src="pics/pic2.jpg"> 
        <div class="caption center-align">
          <h3>We bring you everything...</h3>
          <h4 class="light grey-text text-lighten-3">in the name of horror!</h4>
        </div>
      </li>
      <li>
        <img src="pics/pic4.jpg"> 
        <div class="caption left-align">
            <h3 class="red-text text-lighten-3">Love for the spooky? Head here...</h3>
        </div>
      </li>
      <li>
        <img src="pics/pic1.jpg"> 
        <div class="caption right-align">
          <h3>By the Fans, for the Fans!</h3>
        </div>
      </li>
      <li>
        <img src="pics/pic3.jpg"> 
        <div class="caption center-align">
          <h3>CREEP enough to give you a no-sleep night!</h3>
        </div>
      </li>
    </ul>
  </div>

<div class="container"> 

<div class="row">
  <div class="col s12">
    <h3 class="header">RECENT POSTS</h3>
    <?php 
        if (mysqli_num_rows($res3)>0) {
          while ($row=mysqli_fetch_assoc($res3)) {
      
    ?>
    <div class="card horizontal">
      <div class="card-image">
        <img src="img/<?php echo $row['image']; ?>">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <h5>
            <?php echo $row['title']; ?>
          </h5>
          <p>
            <?php echo substr($row['content'],0,300)."....."; ?>
          </p>

        </div>
        <div class="card-action">
          <?php echo "<a href='post.php?email=".$row['email']."&title=".$row['title']."'>See More</a>"; ?>
        </div>
      </div>
    </div>
    <?php } } ?>
  </div>


  
</div>

</div>

<footer class="page-footer blue-grey darken-4">
<div class="footer-copyright">
    AND ACTION, Copyright &copy; 2017
</div>
</footer>
             

<!-- JavaScript -->
 <script src="materialize/js/materialize.min.js">	
 </script>

<script>
	    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
  });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
  });
</script>
</body>
</html>