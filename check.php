<?php
	session_start();
	$mas=$_SESSION["Mas"];
	$count=$_SESSION["Count"];
	$key=$_SESSION["Key"];
	for ($i=0; $i<3; $i++)
		if ($mas[$i][0]!=0 && $mas[$i][0]==$mas[$i][1] && $mas[$i][0]==$mas[$i][2]){
			$mas[$i][0]=3; $mas[$i][1]=3; $mas[$i][2]=3; $key=1; $_SESSION["Key"]=$key;
		}
	for ($i=0; $i<3; $i++)
		if ($mas[0][$i]!=0 && $mas[0][$i]==$mas[1][$i] && $mas[0][$i]==$mas[2][$i]){
			$mas[0][$i]=3; $mas[1][$i]=3; $mas[2][$i]=3; $key=1; $_SESSION["Key"]=$key;
		}
	if ($mas[0][0]==$mas[1][1] && $mas[0][0]==$mas[2][2]){
		$mas[0][0]=3; $mas[1][1]=3; $mas[2][2]=3; $key=1; $_SESSION["Key"]=$key;
	}
	elseif ($mas[0][2]==$mas[1][1] && $mas[0][2]==$mas[2][0]){
		$mas[0][2]=3; $mas[1][1]=3; $mas[2][0]=3; $key=1; $_SESSION["Key"]=$key;
	}
	if ($key==0 && $count==9)
		for ($i=0; $i<3; $i++)
			for ($j=0; $j<3; $j++)
				$mas[$i][$j]=3;
	$_SESSION["Mas"]=$mas;
	require("show.php");
?>
