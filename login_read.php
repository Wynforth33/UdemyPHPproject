<?php include "./includes/functions.php"; ?>
<?php define("TITLE", "Login_Read | Login App"); ?>

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
       <h1 class="text-center">READ</h1>
        <pre>  
            <?php readRows(); ?>
        </pre>
    </div><!-- .col-sm-6 -->
  </div><!-- .container -->
</body>
</html>