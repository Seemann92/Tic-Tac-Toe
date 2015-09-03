<?php 
	session_start();
	$count=0;
	$_SESSION["Count"]=$count;
	$hod=0;
	$_SESSION['Hod']=$hod;
	$mas=array(array(0,0,0), array(0,0,0),array(0,0,0));
	$_SESSION["Mas"]=$mas;
	$key=0;
	$_SESSION["Key"]=0;
	require("show.php");
?>
