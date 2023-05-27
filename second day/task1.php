<!-- Q1 -->
<?php
   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $my_year = 2025;
   year_check($my_year);
?>
  echo '<br>';
<!-- Q2 -->
<?PHP 
$temp = 19;
if($temp<20)
{
    echo "It is wintertime!";

}else{
    echo"It is summertime";
}

?>
  echo '<br>';
<!-- Q3 -->
<?php
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1, 2)."\n";
echo test(3, 2)."\n";
echo test(2, 2)."\n";  
?>
  echo '<br>';
<!--  Q4 -->
<?php
function test1($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test1(30, 0));
var_dump( test1(25, 5));
var_dump( test1(20, 30));
var_dump(test1(20, 25)); 
?>
  echo '<br>';
 <!--    Q5 -->
 $number = 20;

if ($number % 3 == 0) {
  echo "true";
} else {
  echo "false";
}

?>
echo '<br>';

 <!--    Q6 -->
 <?php
$number = 50;

if ($number >= 20 && $number <= 50) {
  echo 'true';
} else {
  echo 'false';
}
?>

<!-- Q7 -->
<?php

function findLargest($arr) {
  $max = $arr[0];
  foreach ($arr as $num) {
    if ($num > $max) {
      $max = $num;
    }
  }
  return $max;
}

$numbers = [1, 5, 9];
echo findLargest($numbers); // Output: 9

?>
  echo '<br>';
<!--  Q8 -->
<?php

function calculateElectricityBill($units) {
  $bill = 0;
  if ($units <= 50) {
    $bill = $units * 2.50;
  }
  elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
  }
  elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
  }
  else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
  }
  return $bill;
}

$units = 200;
echo "The monthly electricity bill for $units units is: " . calculateElectricityBill($units) . " JOD"; // Output: The monthly electricity bill for 200 units is: 1030 JOD

?>

echo '<br>';

<!--  Q9 -->
<?php

$num1 = 10;
$num2 = 5;
$operator = '+';

switch ($operator) {
  case '+':
    $result = $num1 + $num2;
    echo "Addition: " . $result . "<br>";
    break;
  case '-':
    $result = $num1 - $num2;
    echo "Subtraction: " . $result . "<br>";
    break;
  case '*':
    $result = $num1 * $num2;
    echo "Multiplication: " . $result . "<br>";
    break;
  case '/':
    if ($num2 == 0) {
      echo "Division by zero error";
    } else {
      $result = $num1 / $num2;
      echo "Division: " . $result . "<br>";
    }
    break;
  default:
    echo "Invalid operator";
}

?>
echo '<br>';
<!-- Q10 -->
<?php

$age = 15;

if ($age >= 18) {
  echo "Is eligible to vote";
} else {
  echo "Is not eligible to vote";
}

?>
echo '<br>';
<!-- Q11 -->
<?php

$num = -60;

if ($num > 0) {
  echo "Positive";
} else if ($num < 0) {
  echo "Negative";
} else {
  echo "Zero";
}

?>
echo '<br>';
<!-- Q12 -->
<?php
function calculate_grade($scores) {
    $average = array_sum($scores) / count($scores);
    if ($average >= 90 && $average <= 100) {
        return 'A';
    } elseif ($average >= 80 && $average <= 89) {
        return 'B';
    } elseif ($average >= 70 && $average <= 79) {
        return 'C';
    } elseif ($average >= 60 && $average <= 69) {
        return 'D';
    } else {
        return 'F';
    }
}

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$grade = calculate_grade($scores);
echo $grade; // Output: D
?>



