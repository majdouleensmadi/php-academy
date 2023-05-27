<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];
		switch($operator){
			case "+":
				$result = $num1 + $num2;
				break;
			case "-":
				$result = $num1 - $num2;
				break;
			case "*":
				$result = $num1 * $num2;
				break;
			case "/":
				$result = $num1 / $num2;
				break;
			default:
				$result = "Invalid operator";
		}
		echo "<p>Result: $result</p>";
	}
	?>
	<form method="post">
		<label>Number 1:</label>
		<input type="number" name="num1" required>
		<label>Operator:</label>
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<label>Number 2:</label>
		<input type="number" name="num2" required>
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>