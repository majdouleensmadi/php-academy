<?php
$color = "red";
echo "My car is " . $color . "<br>";
// varabile are case sensitive! in this example return error "Warning: Undefined variable $COLOR in C:\xampp\htdocs\php\test\t1.php on line 4"
// echo "My house is " . $COLOR . "<br>";
// echo "My boat is " . $coLOR . "<br>";
#this is a comment
/*
this 
is 
what
you 
do!?
*/
?>
<?php
$txt="love dalia";
echo "Are you $txt? <br>";
echo "Are you"  .$txt . "?";
?>
<?php
echo "<br>";
$X=5;
$y=19;
echo $X+$y;

?>
<!-- <?php
$x = 5; // global scope
 
// function myTest() {
//     $Y=7; #local scope
//     global $x; // this is way can use to access  to a global varaible inside function 
//   // using x inside this function will generate an error
//   echo "<p>Access to global varible from inside function: $x</p>";
//   echo "<p>Variable x inside function is: $Y</p>";
// } 
// myTest();

// echo "<p>Variable x outside function is: $x</p>";
?> -->
<?php
$x = 5;
$y = 10;
echo "<br>";
function myTest() {
$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y; // outputs 15
echo "<br>";
var_dump($y);
echo "<br>";
$Arr=array("1","2");
var_dump($Arr);
echo "<br>";
$A=null;
var_dump($A);


?>
<?php
echo "<h2> Php is Fun!</h2>"
?>
<?php 
$Txt = "Learn Php";
$Txt1="W3Schoool!";
echo  "<h3>","love to ".$Txt. "</h3>";
print "<h4>Hello world! </h4>";

?>
