<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<body>
	<form name="login" action="" method="GET">
	<input type="text" name="xn" placeholder="мерность массива"><br>
<!-- 	<input type="text" name="n" placeholder=""><br> -->
	<input type="submit" value="Login" id="login-form-submit"><br>
	<?php 
		if (isset($_GET['xn'])/*&&isset($_GET['n'])*/){
			$mer = $_GET['xn'];
			$arr = [];
			for($i = 0; $i <= $mer-1;$i++){
				for($j = 0; $j <= $mer-1;$j++){
					$arr[$i][$j]=rand(0,9);
				}
			}
			echo"созданный массив<br>";
			foreach ($arr as $ar){
				foreach($ar as $a){
					echo $a;
				}

				echo"<br>";

			}
			for($i = 0; $i <= $mer-1; $i++){
				for($j = ($i + 1); $j <= $mer - 1;$j++){
					if($arr[$i][$i]<$arr[$j][$j]){
						$temp = $arr[$i][$i];
						$arr[$i][$i] = $arr[$j][$j];
						$arr[$j][$j]=$temp;
					}
				}
			}
			echo "отсортированный масив<br> ";
			foreach ($arr as $ar){
				foreach($ar as $a){
					echo $a;
				}

				echo"<br>";

			}
			for($i = 0; $i <= $mer-1; $i++){
				$b+=$arr[$i][$i];
			}
			echo"сумма<br>";
		echo $b;
		}

	?>
</form>
</body>
</html>