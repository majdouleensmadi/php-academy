<?php
function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 47;
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number"
?>

<?php
echo "<br>";
function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('remove')."\n");
?>
<?php
echo "<br>";
function checkLowerCase($string){
   // $string="hello";
   if($string===strtolower($string)){
      echo "The string is lower case";
   }
   else{
      echo " The string contain capital case";
   }
}
checkLowerCase("Hello");
?>
<?php
echo "<br>";
function swapVariables($x,$y){
   $z=$x;
   $x=$y;

   $y=$z;
   echo $x;
   echo $y;
}
swapVariables(10,20);
?>
<?php
echo "<br>";

 
function checkArmstrong($num){ 
   $total=0;  
$x=$num;
while($x!=0)  
{  
$rem=$x%10;  

$total=$total+$rem*$rem*$rem;  
$x=intval($x/10);  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  
}
checkArmstrong(407);
?>
<?php
echo "<br>";
function isPalindrome($string) {
   $string = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string)); // convert to lowercase and remove non-alphanumeric characters
   $reversed = strrev($string); // reverse the string
   
   return $string === $reversed; // return true if the reversed string is equal to the original string, false otherwise
   
}
if (isPalindrome("A man a plan a canal Panama")) {
   echo "The string is a palindrome.";
} else {
   echo "The string is not a palindrome.";
}
?>
<?php
echo "<br>";
function removeDuplicates($array) {
   $result = array(); // initialize an empty result array
   
   foreach ($array as $value) {
      if (!in_array($value, $result)) { // check if value is already in the result array
         $result[] = $value; // add value to the result array if it's not already there
      }
   }
   
   return $result; // return the result array
}
$array = array(1, 2, 3, 2, 4, 3);
$uniqueArray = removeDuplicates($array);
print_r($uniqueArray);

?>