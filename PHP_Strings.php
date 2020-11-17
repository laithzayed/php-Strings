<?php


// 1. Write a PHP script to :
//     a) transform a string all uppercase letters.
//     b) transform a string all lowercase letters.
//     c) make a string's first character uppercase.
//     d) make a string's first character of all the words uppercase.
// 2. Write a PHP script to split the following string.
// Sample string : '082307'
// Expected Output : 08:23:07
// 3. Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.'
// Check whether the said string contains the string 'jumps'.
// 4. Write a PHP script to convert the value of a PHP variable to string.



//     1-a) transform a string all uppercase letters.



$person = 'I love Orange Coding Academy!';
$trans = strtoupper($person);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$trans</td>";
echo "<tr>";
echo "<br>";
echo "</table>";

//     1-b) transform a string all lowercase letters.


echo "<br>";
$person = 'I love Orange Coding Academy!';
$trans = strtolower($person);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$trans</td>";
echo "<tr>";
echo "<br>";
echo "</table>";



//     3-c) make a string's first character uppercase.

echo "<br>";
$person = 'i love Orange Coding Academy!';
$trans = ucfirst($person);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$trans</td>";
echo "<tr>";
echo "<br>";
echo "</table>";

//     4-d) make a string's first character of all the words uppercase.

echo "<br>";
$person = 'i love orange coding academy!';
$trans = ucwords($person);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$trans</td>";
echo "<tr>";
echo "<br>";
echo "</table>";
echo "<hr>";

// 2. Write a PHP script to split the following string.
// Sample string : '082307'
// Expected Output : 08:23:07

$person = '082307';
$trans = str_split($person, 2);
$transform = implode (':', $trans);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$transform</td>";
echo "<tr>";
echo "<br>";
echo "</table>";
echo "<hr>";


// 3. Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.'
// Check whether the said string contains the string 'jumps'.

$word = "fox";
$mystring = "The quick brown fox jumps over the lazy dog";
 

if(strpos($mystring, $word) !== false){
    echo "<td>Word Found!</td>";
} else{
    echo "<td>Word Not Found!</td>";
}
echo "<br>";
echo "<hr>";

// 4. Write a PHP script to convert the value of a PHP variable to string.

$person = 2020;
$trans = strval($person);


echo "<table border='3'>";
echo "<tr>";
echo "<td>$trans</td>";
echo "<tr>";
echo "<br>";
echo "</table>";
echo "<hr>";

// 5. Write a PHP script to extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php'
// Expected Output : 'index.php'


$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
echo "<br>";
echo "<hr>";

// 6. Write a PHP script to extract the user name from the following email ID. Sample String : 'Ayham@example.com'
// Expected Output : 'Ayham'


$laith="laith.z.zayed@gmail.com";
$user=strstr($laith, '@', true);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$user</td>";
echo "<tr>";
echo "<br>";
echo "</table>";
echo "<hr>";


// 7. Write a PHP script to get the last three characters of a string. Sample String : 'Ayham@example.com'
// Expected Output : 'com'


$laith="laith.z.zayed@gmail.com";
$user=substr($laith, -3);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$user</td>";
echo "<tr>";
echo "<br>";
echo "</table>";
echo "<hr>";


// 8. Write a PHP script to format values in currency style. Sample values : valuel = 65.45, value2 = 104.35
// Expected Result : 169.80


$valuel = 65.45;
$value2 = 104.35;
$total= sprintf("%1.2f", $valuel+$value2);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$total</td>";
echo "<tr>";
echo "<br>";
echo "</table>";
echo "<hr>";

// 9. Write a PHP script to generate simple random passwords [do not use rand() function] from a given string.

$pass= '0123456789abcdefghijklmnopqrsuvwxyz!@#$%^&*()';
$result= substr(str_shuffle($pass),5, 20);

echo "<table border='3'>";
echo "<tr>";
echo "<td>$result</td>";
echo "<tr>";
echo "<br>";
echo "</table>";
echo "<hr>";

// 10. Write a PHP script to replace the first 'the' of the following string with 'That'.
// Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog.

echo "<br>";
$strings = array (
    'the quick brown fox jumps over the lazy dog.',
  
  
);

$search = array (
    'the',
    
);
$replace = array (
    'that',
    
);

$replaced = str_replace ( $search, $replace, $strings );
print_r ( $replaced );

echo "<br>";
echo "<br>";
echo "<hr>";

////////////////////////////////


// 11. Write a PHP script to find the first character that is different between two strings.
// Stringl : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o"

$string1 = 'football';
$string2 = 'footboll';
$str_pos = strspn($string1 ^ $string2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $string1[$str_pos], $string2[$str_pos]);
printf("\n");
echo "<br>";
echo "<hr>";

// 12. Write a PHP script to put a string in an array.
// Sample strings : "Twinkle, twinkle, little star, lnHow I wonder what you are.inUp above the world so high, lnLike a diamond in the sky.";
// Expected Result (using var dump()) : array(4) { [O]=> string(30) "Twinkle, twinkle, little star," [11=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);

echo "<br>";
echo "<hr>";


// 13. Write a PHP script to get the filename component of the following path. Sample path : "https://www.orange.com/index.php"
// Expected Output : 'index'

$link = 'www.example.com/public_html/index.php';
$target = basename($link, ".php"); 
echo $target."\n";

// 14. Write a PHP script to print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character :'z' Expected Output : 'a'

$cha = 'L';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[ss];
 }
echo $next_cha."\n";
echo "<br>";
echo "<hr>";

// 15. Write a PHP script to remove a part of a string from the beginning. Sample string : 'rayy@exampie.corn'
// Expected Output : 'example.com'

$sub_string = 'laith.z.zayed@';
$str = 'laith.z.zayed@gmail.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";

echo "<br>";
echo "<hr>";


// 16. Write a PHP script to get a hex dump of a string.
// Sample string : Tayy©example.com'

$string2 = 'laith.z.zayed@gmail.com';
echo bin2hex($string2)."\n";

echo "<br>";
echo "<hr>";


// 17. Write a PHP script to insert a string at the specified position in a given
// string.
// Original String : 'The brown fox'
// Insert 'quick' between 'The' and 'brown'.
// Expected Output : 'The quick brown fox'

$original = 'The brown fox';
$inserted ='quick';
$insert_pos = 4;
$new_string = substr_replace($original, $inserted.' ', $insert_pos, 0);
echo $new_string."\n";

echo "<br>";
echo "<hr>";

// 18. Write a PHP script to get the first word of a sentence. Original String : 'The quick brown fox'
// Expected Output : 'The'

$start = 'The quick brown fox';
$array1 = explode(' ',trim($start));
echo $array1[0]."\n";
echo "<br>";
echo "<hr>";

// 19. Write a PHP script to remove all leading zeroes from a string. Original String : '000547023.24'
// Expected Output : '547023.24'

$x = '000547023.24';
$str1 = trim($x, '0');
echo $str1."\n";
echo "<br>";
echo "<hr>";

// 20. Write a PHP script to remove part of a string. Original String : 'The quick brown fox jumps over the lazy dog' Remove 'fox' from the above string.
// Expected Output : 'The quick brown jumps over the lazy dog'

$words = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $words)."\n";
echo "<br>";
echo "<hr>";


// 21. Write a PHP script to remove trailing slash from a string. Original String : 'The quick brown fox jumps over the lazy dog///' Expected Output : 'The quick brown fox jumps over the lazy dog'
$words = 'The quick brown fox jumps over the lazy dog///';
echo trim($words, '/')."\n";
echo "<br>";
echo "<hr>";

// 22. Write a PHP script to get the characters after the last '/' in an url. Sample URL : 'http://www.example.com/5478631'
// Expected Output : '5478631'

$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
echo "<br>";
echo "<hr>";

// 23. Write a PHP script to replace multiple characters from the following
// string.
// Sample String : 711+2/3*2:2-3/4*3' Expected Output : '1 2 3 2 2 3 4 3'

$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
echo "<br>";
echo "<hr>";

// 24. Write a PHP script to select first 5 words from the following string. Sample String : 'The quick brown fox jumps over the lazy dog'
// Expected Output : 'The quick brown fox jumps'

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
echo "<br>";
echo "<hr>";

// 25. Write a PHP script to remove comma(s) from the following numeric string.
// Sample String : '2,543.12' Expected Output : 2543.12

$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
  echo "<br>";
echo "<hr>";


//   26. Write a PHP script to print letters from 'a' to 'z'.
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n";
 echo "<br>";
 echo "<hr>";

 //   All was done successfully. 


?>