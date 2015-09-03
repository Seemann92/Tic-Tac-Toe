<?php
	session_start();
	$key=$_SESSION["Key"];
	if (!$key){
		$count=$_SESSION["Count"];
		$hod=$_SESSION["Hod"];
		$mas=$_SESSION["Mas"];
		$st=$_GET['st'];
		$sl=$_GET['sl'];
		if (!$mas[$st][$sl]){
			if ($hod==0){
				$mas[$st][$sl]=2;
				$hod=1;
			}
			else{
				$mas[$st][$sl]=1;
				$hod=0;
			}
			$count++;
			$_SESSION["Count"]=$count;
			$_SESSION["Hod"]=$hod;
			$_SESSION["Mas"]=$mas;
			if ($count<5) require("show.php");
			else require("check.php");
		}
		else require("show.php");
	}
	else require("show.php");
?>
