<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2 class="text-center">Admin Login</h2>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
         <?php
         if(isset($_SESSION['login']) and $_SESSION['login']=='wrong'){
         $_SESSION['login']='loggedin';
          ?>
          <div class="alert alert-danger">
            Wrong password.
          </div>
          <?php
        }
        ?>
         <?php
         if(isset($_SESSION['login']) and $_SESSION['login']=='error'){
          $_SESSION['login']='loggedin';
          ?>
          <div class="alert alert-danger">
           Error connecting to server.
          </div>
          <?php
        }
        ?>

        <form action="logincheck.php" method="POST">

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php

 $_SESSION['login']='loggedin';
 ?>