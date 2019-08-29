<?php include 'db.php';?>

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

<div class="container" style=" margin-top: 50px; margin-bottom: 100px;">
<form action="write2.php" method="post">
	<div class="row">
		<div class="input-field col s12">
          <input placeholder="Enter Title" id="first_name" type="text" class="validate" name="title">
          <label for="first_name">Title</label>
        </div>
        <label>Content</label>
        <div class="input-field col s12">
          <textarea name="content" cols="50" rows="10" style="width: 100%; height: 100%;"></textarea>
        </div>
        <div class="center">
        	<input class="btn" type="submit" value="submit">
        </div>
		</div>
		
	</div>
	
</form>	
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