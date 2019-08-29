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


  <div class="container teal lighten-5" style="padding: 80px; margin-top: 100px; margin-bottom: 100px;">

    <form action="signup2.php" method="post" enctype="multipart/form-data"
>
      <div class="row center">
        <label>Author Name</label>
          <input type="text" name="name">
      </div>
      
      <label>Write a short bio about yourself</label>
        <div class="input-field col s12">
          <textarea name="bio" cols="50" rows="10" style="width: 100%; height: 100%;"></textarea>
        </div>
      
      <div class="row center">
        <label>Email</label>
          <input type="email" name="email">
      </div>

      <div class="row center">
        <label>Password</label>
          <input type="password" name="password">
      </div>

      <div class="row center">
        <label>Author's Photo</label><br>
          <input type="file" name="image">
      </div><br>    

      <div class="row center">
        <input class="btn" type="submit" value="Sign Up">
      </div>
  </div>
  </div>

<script src="materialize/js/materialize.min.js">  
 </script>  
 
 </body>
 </html>
