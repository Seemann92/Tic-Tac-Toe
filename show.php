<?php session_start(); ?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet">
		<title>Крестики да нолики</title>
	</head>

	<body>
		<div id="glav">
			<div id="lev">
			<?php
				$mas=$_SESSION["Mas"];
				echo "<table border='1' cellpadding='0'>";
				for ($i=2; $i>=0; $i--){
					echo "<tr>";
					for ($j=2; $j>=0; $j--){
						echo "<td><a href='";
						if ($mas[$i][$j]==1) echo "obr.php?st=".$i."&sl=".$j."&hello'><img src='krestik.png'>";
						elseif ($mas[$i][$j]==2) echo "obr.php?st=".$i."&sl=".$j."&hello'><img src='nolik.png'>";
						elseif ($mas[$i][$j]==3) echo "index.php'><img src='doge.png'>";
						else echo "obr.php?st=".$i."&sl=".$j."&hello'><img src='start.png'>";
						echo "</a></td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			?>
			</div>
			<div>
			<?php
				$mas=$_SESSION["Mas"];
				echo "<table border='1' cellpadding='0'>";
				for ($i=0; $i<3; $i++){
					echo "<tr>";
					for ($j=0; $j<3; $j++){
						echo "<td><a href='";
						if ($mas[$i][$j]==1) echo "obr.php?st=".$i."&sl=".$j."&hello'><img src='krestik.png'>";
						elseif ($mas[$i][$j]==2) echo "obr.php?st=".$i."&sl=".$j."&hello'><img src='nolik.png'>";
						elseif ($mas[$i][$j]==3) echo "index.php'><img src='doge.png'>";
						else echo "obr.php?st=".$i."&sl=".$j."&hello'><img src='start.png'>";
						echo "</a></td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			?>
			</div>
		</div>
	</body>

</html>
