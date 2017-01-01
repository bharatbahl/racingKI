<?php
session_start();
 $_SESSION['login']='loggedin';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin View - Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>
<?php 
try{
  $pdo=new PDO('mysql:host=localhost;dbname=kiracing','root','secret');
}
catch (PDOException $e) {
  $_SESSION['login']='error';
  header('Location:index.php');
}
ob_start();
$f=0;


$pass=$_POST['password'];

$f=0;
if($pass=="ki01")
{

  $sql='select * from info';
  $result=$pdo->query($sql);
  $row1=$result->fetchAll();
  echo "<div class='container'>";
  echo "<div class='row'>";
  echo "<h2 class='text-center'>Contact us database</h2>";
  echo "<div class='text-right'><a href='index.php'><button class='btn btn-primary'>Logout</button></a></div>";
  echo "<br><br>";
  echo "<div class='col-sm-8 col-sm-offset-2'>";
  echo "<table class='table table-striped table-bordered'>
  <tr>
    <th>Name</th>
    <th>E-mail</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Date</th>
  </tr>";

  for($i=0;$i<count($row1);$i=$i+1)
  {
    echo "<tr>";
    echo "<td>" . $row1[$i]['yourname'] . "</td>";
    echo "<td>" . $row1[$i]['youremail'] . "</td>";
    echo "<td>" . $row1[$i]['yoursubject'] . "</td>";
    echo "<td>" . $row1[$i]['yourmessage'] . "</td>";
    echo "<td>" . $row1[$i]['insdate'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}
else
{
  $_SESSION['login']='wrong';
  header("Location: index.php");
}

?>