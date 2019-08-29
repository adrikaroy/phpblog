 <?php include 'db.php';
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


  <div class="container deep-purple lighten-5" style="padding: 80px; margin-top: 100px; margin-bottom: 100px;">

    <form action="signin2.php" method="post">
      <div class="row center">
        <label>Email</label>
          <input type="email" name="email">
      </div>
      <div class="row center">
        <label>Password</label>
          <input type="password" name="password">
      </div>
      <div class="row left">
        <input class="btn" type="submit" value="Sign In">
      </div>
    </form>
    <a class="btn right" href="signup.php">Signup</a>
  </div>
  </div>

<script src="materialize/js/materialize.min.js">  
 </script>  

 </body>
 </html>

