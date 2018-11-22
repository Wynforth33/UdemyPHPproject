<?php include "./includes/functions.php"; ?>
<?php define("TITLE", "Login_Update | Login App"); ?>
<?php createRow(); ?>

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
     <h1 class="text-center">Create</h1>
      <form action="login_create.php" method="post">
       
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

</body>
</html>