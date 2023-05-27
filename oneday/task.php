
<?php
echo"Q1:";
echo"<br>";
echo  strtoupper("hello world") . "<br>";
echo  strtolower("HELLO WORLD") . "<br>";
echo  ucfirst("hello world") . "<br>";
echo  ucwords("hello world") . "<br>";
?>
 <!-- 2. Write a PHP script splitting the following numeric string to be a date format.

//Sample Output: '085119" Expected Output: 08:51:19  -->

 <?php
echo"Q2:";
echo"<br>";
// the numeric string to be converted
$numericString = "085119";

// extract the hours, minutes, and seconds using substr()
$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

// format the extracted values as a time string using sprintf()
$timeString = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

// display the result
echo $timeString;
echo"<br>";
?>
<!-- 4. Write a PHP script to extract the file name from the URL.

 Sample Output: 'www.orange.com/index.php' Expected Output: 'index.php' -->

 <?php
 echo"Q4:";
 echo"<br>";
$path = 'http://localhost/php%20task/task4.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
echo"<br>";
?>
<!-- 5. Write a PHP script to extract the username from the following email address.

 Sample Output: 'Musab@orange.com' Expected Output: 'info -->

 <?php
 echo"Q5:";
 echo"<br>";
$mailid  = 'dalia@orange.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
echo"<br>";
?>
<!-- 6. Write a PHP script to get the last three characters from the string.

 Sample Output: 'info@orange.com' Expected Output: 'com' -->

 <?php
 echo"Q6:";
 echo"<br>";
$str1 = 'dalia@orange.com';
echo substr($str1, -3)."\n";
echo"<br>";
?>
<!-- 7. Write a PHP script to generate simple random passwords [do not use rand() function] from a given string.

 Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz

 Expected Output: 254ABCc or h242sfeDAFEe32 -> random number -->

 <?php
 echo"Q7:";
 echo"<br>";
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
echo"<br>";
?>
<!-- 8. Write a PHP script to replace the first word of the sentence with another word.

 Sample Output: 'That new trainee is so genius.'

 Sample Word: 'Our' Expected Result: the new trainee is so genius. -->

 <?php
 echo"Q8:";
 echo"<br>";
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
echo"<br>";
?>
<!-- 9. Write a PHP script to find the first character that is different between two strings.

 String1: 'dragonball

 String2 'dragonboll'

 Expected Result: First difference between two strings at position 7: "a" vs "o" -->
 <?php
 echo"Q9:";
 echo"<br>";
 $string1 = 'dragonball';
  $string2 = 'dragonboll';

  $pos = strspn($string1 ^ $string2, "\0");

  printf(
      'First difference between  at position %d: "%s" vs "%s"',
      $pos, $string1[$pos], $string2[$pos]

  );
echo"<br>";
  ?>
  <!-- 10. Write a PHP script to put a string in an array, use the (var_dump) to view the array.

 Sample Output: "Twinkle, twinkle, little star." Expected Result: array (4) ([0]=> string (30) "Twinkle, " [1]=> string (26) twinkle," [2] => string (27) twinkle" [3]=> string (26) little star.") -->


<?php
echo"Q10:";
echo"<br>";
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
echo"<br>";
?>
<!-- 12. Write a PHP script to insert a string at the specified position in a given

 Original String: 'The brown fox'

 Insert 'quick' between 'The' and 'brown'. Expected Output: 'The quick brown fox' 18. Write a PHP script to get the first word of a sentence. Original String: 'The quick brown fox'

 Expected Output: 'The' -->

 <?php
 echo"Q12:";
 echo"<br>";
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
echo"<br>";
?>
<!-- 13. Write a PHP script to remove zeroes from the given number.

 Original String: '0000657022.24'

 Expected Output: '65722.24' -->

 <?php
 echo"Q13:";
 echo"<br>";
$x = '0000657022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>
#Q14
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>
//Q15
 <?php
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
echo"<br>";
?>
<!-- 16. Write a PHP script to remove Special characters from the following string.

 Sample Output: '\"\1+2/3 2:2-3/4"3" Expected Output: '1232 2343' -->

 <?php
 echo"Q16:";
 echo"<br>";
$str1 = "$12,334.00A";
echo preg_replace("/[^0-9,.]/", "", $str1)."\n";
echo"<br>";
?>
<!-- 17. Write a PHP script to select first 5 words from the following string.

 Sample Output: 'The quick brown fox jumps over the lazy dog' Expected Output: 'The quick brown fox jumps' -->
 <?php
 echo"Q17:";
 echo"<br>";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
echo"<br>";
?>
<!-- 18. Write a PHP script to remove comma(s) from the following numeric string.

 Sample Output: '2,543.12' Expected Output: 2543.12 -->

 <?php
 echo"Q18:";
 echo"<br>";
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
echo"<br>";
?>

<!-- 19. Write a PHP script to print letters from 'a' to 'z'. Expected Output: abcdefghijklmnopqrstuvwxyz -->


<?php
echo"Q19:";
echo"<br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n";
echo"<br>";
?>



