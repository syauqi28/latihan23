<html><!DOCTYPE html>
<html>
<head>
	<title>Mencari nilai max</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	
	<form method="post">
		<table>
			<tr>
			<td>	
				<label for="a">Variabel A:</label>
			</td>
			<td>		
				<input type="text" name="a">
			</td>
			</tr>

			<tr>
			<td>	
				<label for="b">Variabel B:</label>
			</td>
			<td>	
				<input type="text" name="b">
			</td>
			</tr>

			<tr>
			<td>	
				<label for="c">Variabel C:</label>
			</td>
			<td>	
				<input type="text" name="c">
			</td>
			</tr>

			<tr>
				<td>
				<input type="submit" value="Nilai Terbesar">
				</td>
			</tr>
		</table>			
	</form>

	<?php
		
		$a=isset($_POST['a'])?$_POST['a']:"0";
		$b=isset($_POST['b'])?$_POST['b']:"0";
		$c=isset($_POST['c'])?$_POST['c']:"0";

		echo "Variabel A = ". $a;
		echo "<br>";
		echo "Variabel B = ". $b;
		echo "<br>";
		echo "Variabel C = ". $c;
		echo "<br>";


		if ($a == max($a,$b,$c)) {	
			echo "Nilai terbanyak adalah Variabel  A";
		}elseif ($b == max($a,$b,$c)){
			echo "Nilai terbanyak adalah Variabel  B";
		}else {
			echo "Nilai terbanyak adalah Variabel  C";
		}
	?>





</body>
</html>