<?php 
  define("TITLE", "Login | Login App");
  
  if(isset($_POST['submit'])) {
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // SYNTAX: function mysqli_connect("server","adminUser","adminPass","Database")
      $connection = mysqli_connect("localhost", "root", "root", "loginapp");
      
      // Test if Connected to Database
      if($connection){
          echo "we are connected";
      } else {
          die("Database Connection Failed!");
      }
      
      // Test if Both Username/Pasword were submitted.
      if($username && $password) {
          echo "<h1>Welcome " . $username . "</h1><br>";
          echo "<h2>Your Password is: " . $password . "</h2><br>";
      } else {
          echo "Both Username and Password required for Login!";
      }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo TITLE; ?></title>
  
<!--Stylesheets-->
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body>
  
  <!-- CONTENT -->
  <div class="container">
        
    <div class="col-sm-6">
      <form action="login.php" method="post">
       
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username"> 
        </div><!-- .form-group -->
        
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div><!-- .form-group -->
  
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
       
      </form>
    </div><!-- .col-sm-6 -->

  </div><!-- .container -->

<!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>