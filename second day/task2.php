<!-- <?php 
phpinfo();
?> -->
<?php
for ($i=1; $i<=10; $i++) {
    if ($i == 10) {
        echo $i;
    } else {
        echo $i . "-";
    }
}
echo "<br>";
?>
<!-- Q2 -->
<?php
$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo $total;
echo "<br>";
?>
<!--    Q3 -->
<?php
$alphabets = range('A', 'E');
$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    $letter = 'A';
    echo "<br>";
    for ($j = 0; $j < $rows; $j++) {
        if ($j >= $rows - $i - 1) {
            echo $alphabets[$i];

            if ($letter != $alphabets[$i]) {
                echo PHP_EOL;
            }

            $letter = $alphabets[$i];
        } else {
            echo "A\n";
        }
    }
}
echo "<br>";
?>
<!-- Q4 -->

<?php
// define the number of rows and columns
$rows = 5;
$cols = 5;

// initialize the matrix with all 1s
$matrix = array();
for ($i = 0; $i < $rows; $i++) {
  $row = array();
  for ($j = 0; $j < $cols; $j++) {
    $row[] = 1;
  }
  $matrix[] = $row;
}

// update the matrix to match the pattern
for ($i = 1; $i < $rows; $i++) {
  for ($j = 1; $j < $cols; $j++) {
    
    if ($i + $j >= $rows) {
      $matrix[$i][$j] = $matrix[$i][$j-1] + 1;
    }
    if ($i + $j >= $cols) {
      $matrix[$i][$j] = $matrix[$i-1][$j] + 1;
    }
  }
}

// print the matrix
for ($i = 0; $i < $rows; $i++) {
    echo "<br>";
  for ($j = 0; $j < $cols; $j++) {

    echo $matrix[$i][$j] . " ";

  }
  echo "\n";
}
echo "<br>";
?>
<!-- Q5 -->
<?php
// define the number of rows and columns
$rows = 5;
$cols = 5;

// initialize the matrix with all zeros
$matrix = array();
for ($i = 0; $i < $rows; $i++) {

  $row = array();
  
  for ($j = 0; $j < $cols; $j++) {
    $row[] = 0;
  }
  $matrix[] = $row;
}


// update the diagonal elements with increasing values
for ($i = 0; $i < $rows; $i++) {
  $matrix[$i][$i] = $i+1;
}
echo "<br>";
// print the matrix
for ($i = 0; $i < $rows; $i++) {
    echo "<br>";
  for ($j = 0; $j < $cols; $j++) {
    echo $matrix[$i][$j] . " ";
  }
  echo "\n";
}
echo "<br>";
?>
<!-- Q6 -->
<?php

$num = 5; // Change this to whatever number you want to calculate the factorial of

$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
  $factorial *= $i;
}

echo "The factorial of $num is: $factorial";
echo "<br>";
?>
<!-- Q7 -->

<?php 

$n1=0;    // first number 
$n2=1;   // second number
for($i=0;$i<=8;$i++){
echo " $n1,";
$temp=$n1+$n2;   // temporary variable
$n2=$n1;        // $n2 value shifted to $n1 
$n1=$temp;     // temporary value ( sum ) is shifted.
}
echo '<br><br>';
?>
<!-- Q8 -->
<?php 
// echo 'Q8:'.'<br>';
$text="Orange Coding Academy";
$search_char="c";
$count="0";
$textLower = strtolower ($text);
for($x="0"; $x< strlen($textLower); $x++)
    { 
    if(substr($textLower,$x,1)==$search_char)
    {
    $count=$count+1;
    }
    }
echo $count;
echo '<br><br>';
?>
<!-- Q10 -->
<?php 
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';

// echo 'Q10:'.'<br>';
for ($i = 1; $i <= 50; $i++)
{
    if ( $i%3 == 0 && $i%5 == 0 )
    {
        echo " FizzBuzz"."\n" ;
    }
    else if ( $i%3 == 0 ) 
    {
        echo " Fizz"."\n";
    }
        else if ( $i%5 == 0 ) 
    {
        echo " Buzz"."\n";
    }
        else
    {
        echo $i."\n";
    }
    }
echo '<br><br>';
?>
<!-- Q11 -->
<?php 
// echo 'Q11:'.'<br>';
$n = 5; 
echo "n = " . $n . "<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
    for ($j = $i; $j < $n + 1; $j++) 
    {
        printf("%4s", $count);
        $count++;
    } 
        echo "<br>";
    }
echo '<br>';
?>
<?php
$letters = range('A', 'E'); // create an array of letters from A to Z

$n = 5; // set the number of rows to generate

// Generate the top half of the pattern
for ($i = 1; $i <= $n; $i++) {
    // Print spaces before each row
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;  ";
    }
    // Print letters for each row
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }
    echo "<br>";
}

// Generate the bottom half of the pattern
for ($i = $n - 1; $i >= 1; $i--) {
    // Print spaces before each row
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp; ";
    }
    // Print letters for each row
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }
    echo "<br>";
}

?>













