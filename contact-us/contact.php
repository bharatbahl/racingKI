<?php
session_start();
$_SESSION['success_contact']=true;
try{
	$pdo=new PDO('mysql:host=localhost;dbname=kiracing','root','secret');
}
catch (PDOException $e) {
	$_SESSION['success_contact']=false;
	header('Location:index.php');
}

date_default_timezone_set("Asia/Kolkata");
$insdate=date("d/m/Y");
$insdate.=" ".date("h:i:sa");
$sql_info= 'insert into info set yourname="' .$_POST['your-name']. '",youremail="' .$_POST['your-email']. '", yoursubject="' .$_POST['your-subject']. '",yourmessage="' .$_POST['your-message']. '",insdate="' .$insdate.'"';

$result=$pdo->exec($sql_info);
if(!$result)
	$_SESSION['success_contact']=false;
header('Location:index.php');

?>
