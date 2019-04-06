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
		function division($numerator, $denominator){
			if($numerator< 0 && $denominator < 0)
			{
				$x =1;
				do {
					$r=abs($denominator) * $x;
					$x ++;
				}while ($r <= abs($numerator));
				echo "<br> Quotient = ".$x-=2;
				echo "<br> Remainder = ".-($numerator%$denominator);
			}else if($numerator< 0 || $denominator < 0)
			{
				$x =1;
				do {
					$r=abs($denominator) * $x;
					$x ++;
				}while ($r <= abs($numerator));
				echo "<br> Quotient = -".$x-=2;
				echo "<br> Remainder = ".$numerator%$denominator;
			}else if($numerator == 0 || $denominator == 0){
				echo "Input error";
			}else{
				$x =1;
				do {
					$r=$denominator * $x;
					$x ++;
				}while ($r <= $numerator);
				echo "Highest Factor = ".$r-=abs($denominator);
				echo "<br> Quotient = ".$x-=2;
				echo "<br> Remainder = ".$numerator%$denominator;
			}
		}
		division($num1,$num2);
	}
?>