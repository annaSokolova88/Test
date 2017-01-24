<html>
<head>
<style type="text/css">
table, th, td {
   border: 1px solid black;   
}
tr, td {
    min-width: 50;
	height: 50;
	overflow: hidden;
    color: white;
}
</style>
</head>
<body>
<?php

function viewTable ($row, $col, $color_1, $color_2, $color_3 = "#ffffff"){
	echo "<table>";
	$color = [$color_1, $color_2, $color_3];
	$value = 0;
	for ($i =1; $i <= $row; $i++){
		echo "<tr>";		
		for ($a =1; $a <= $col; $a++){		
			echo "<td bgcolor = {$color[$value]}' ></td>";
			if($value <2){
				$value++;
			}else{
				$value = 0; 
			}
		}
		if($value <2){
			$value++;
		}else{
			$value = 0; 
		}
		echo "</tr>";
	}
	echo "</table>";
}
viewTable(10, 10, "#244420", "#000000");
?>
</body>
</html>


