
<?php
echo "Q1:";
echo "<br>";
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
echo "<br>";
?>
<?php
echo "Q2:";
echo "<br>";
$color = array('white', 'green', 'red');
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
echo "<br>";
?>
<?php
echo "Q3:";
echo "<br>";
 $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );

asort($cities) ;
foreach($cities as $country => $capital)
{
echo "<br>";
echo "The capital of $country is $capital"."\n" ;
}
echo "<br>";
?>
<?php
echo "Q4:";
echo "<br>";
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
echo "<br>";
?>
<?php 
echo "  Q5:";
echo "<br>";
$num = array('1','2','3','4','5');
$inserted = '$';
// array_push($num,'$');
array_splice( $num, 3, 0, $inserted );//zero to save length array
foreach ($num as $x) 
{echo "$x ";}
echo"<br>";
?>
<?php
echo "Q6:";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"
);
asort($fruits);
foreach ($fruits as $key => $val) {
    echo"<br>";
    echo "$key = $val\n";
}
echo"<br>";
?>
<?php
echo "Q7:";
echo"<br>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " <br>List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
echo"<br>";
?>

<?php
echo "Q8:";
echo"<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r( $result);
echo"<br>";
?>
<?php 
echo "Q9:";
echo"<br>";
function convertToUpper($array) {
    $upperCaseArray = array();
    foreach ($array as $value) {
        $upperCaseArray[] = strtoupper($value);
    }
    return $upperCaseArray;
}
$colors = array("red","blue", "white","yellow");
$upperCaseColors = convertToUpper($colors);
print_r($upperCaseColors);
echo"<br>";
?>
<?php 
echo"Q10:";
echo"<br>";
?>
<?php 
echo "Q11:";
echo "<br>";
 echo implode(",",range(200,250,4))."\n";
 echo"<br>";
?>
<?php
echo"Q12:";
echo"<br>";
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
echo"<br>";
?>
<?php
echo"Q13:";
echo"<br>";
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n";
echo"<br>";
?>
<?php
echo"Q14:";
echo"<br>";
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(2, 0, 10, 12, 6))."\n");
echo"<br>";
?>
<?php
echo"Q15:";
echo"<br>";
function columns($uarr)
{
$n=$uarr;
if (count($n) == 0)
 return array();
else if (count($n) == 1)
 return array_chunk($n[0], 1);
array_unshift($uarr, NULL);
 $transpose = call_user_func_array('array_map', $uarr);
return array_map('array_filter', $transpose);
}
function bead_sort($uarr)
{
foreach ($uarr as $e)
 $poles []= array_fill(0, $e, 1);
return array_map('count', columns(columns($poles)));
}
echo 'Original Array : '.'
';
print_r(array(5,3,1,3,8,7,4,1,1,3));
echo '
'.'After Bead sort : '.'
';
print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));
echo"<br>";
?>
<?php
echo"Q16:";
echo"<br>";
function floorDec($number, $precision, $separator)
{
$number_part=explode($separator, $number);
$number_part[1]=substr_replace($number_part[1],$separator,$precision,0);
if($number_part[0]>=0)
{$number_part[1]=floor($number_part[1]);}
else
{$number_part[1]=ceil($number_part[1]);}

$ceil_number= array($number_part[0],$number_part[1]);
return implode($separator,$ceil_number);
}
print_r(floorDec(1.155, 2, ".")."\n");
print_r(floorDec(100.25781, 4, ".")."\n");
print_r(floorDec(-2.9636, 3, ".")."\n");
echo"<br>";
?>
<?php
echo"Q17:";
echo"<br>";
$list1 = "4, 5, 6, 7";
  $list2 = "4, 5, 7, 8";
  // combine both lists with unique values only
  $result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));
  echo $result."\n";
echo"<br>";
?>
<?php
echo"Q18:";
echo"<br>";
function array_uniq($my_array, $value) 
{ 
    $count = 0; 
    
    foreach($my_array as $array_key => $array_value) 
    { 
        if ( ($count > 0) && ($array_value == $value) ) 
        { 
            unset($my_array[$array_key]); 
        } 
        
        if ($array_value == $value) $count++; 
    } 
    
    return array_filter($my_array); 
} 
$numbers = array(4, 5, 6, 7, 4, 7, 8);

print_r(array_uniq($numbers, 7));

echo"<br>";
?>

<?php
echo"Q19:";
echo"<br>";
// PHP program to find whether an array
// is subset of another array
 
/* Return 1 if arr2[] is a subset of
arr1[] */
function isSubset($arr1, $arr2, $m, $n)
{
    $i = 0;
    $j = 0;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $m; $j++)
        {
            if($arr2[$i] == $arr1[$j])
                break;
        }
         
        /* If the above inner loop was
        not broken at all then arr2[i]
        is not present in arr1[] */
        if ($j == $m)
            return 0;
    }
     
    /* If we reach here then all
    elements of arr2[] are present
    in arr1[] */
    return 1;
}
 
// Driver code
    $arr1 = array('a','1','2','3','4') ;
    $arr2 = array( 'a','3');
 
    $m = count($arr1);
    $n = count($arr2);
 
    if(isSubset($arr1, $arr2, $m, $n))
        echo "arr2[] is subset of arr1[] ";
    else
        echo "arr2[] is not a subset of arr1[]";    
 
// This code is contributed by anuj_67.
?>





