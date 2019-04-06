<html>
	<body>
		<form method="POST"> 
		Numerator <input type="number" name="num1" require>
		Denominator<input type="number" name="num2" require><br><br> 
		Result: <input type="submit" name="Ok">
		</form>
	</body>
</html>

<?php 
	if (isset($_POST['Ok'])) {
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		if($num1 < 0 && $num2 < 0)
		{
			// $positive = abs($value);
			$x =1;
			do {
				$r=abs($num2) * $x;
				$x ++;
			}while ($r <= abs($num1));
			// echo "Highest Factor = ".$r-=abs($num2);
			echo "<br> Quotient = ".$x-=2;
			echo "<br> Remainder = ".$num1%$num2;
		}
		else if($num1 < 0 || $num2 < 0)
		{
			$x =1;
			do {
				$r=abs($num2) * $x;
				$x ++;
			}while ($r <= abs($num1));
			// echo "Highest Factor = ".$r-=abs($num2);
			echo "<br> Quotient = "."-".$x-=2;
			echo "<br> Remainder = ".$num1%$num2;
		}else if($num1 == 0 && $num2 == 0){

		}else{
			$x =1;
			do {
				$r=$num2 * $x;
				$x ++;
			}while ($r <= $num1);
			echo "Highest Factor = ".$r-=$num2;
			echo "<br> Quotient = ".$x-=2;
			echo "<br> Remainder = ".$num1%$num2;
		}

	}
?>