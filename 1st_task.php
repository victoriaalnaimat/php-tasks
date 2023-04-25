<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>My first PHP page</h1>

<?php
//q1------------------------------------------------------------
echo strtoupper("Hello WORLD!") . "<br>";
echo strtolower("Hello WORLD! 2") . "<br>";
echo ucfirst("Hello WORLD! 3") . "<br>";
echo ucwords("Hello WORLD! 4") . "<br>";
//q2------------------------------------------------------------
//echo "The time is " . date("h:i:sa");
//date_default_timezone_set("America/New_York");  echo "The time is " . date("h:i:sa");
//Create a Date From a String With strtotime():-
$d=strtotime("085119");
echo date("h:i:sa", $d) . "<br>";
//q3-------------------------------------------------------------
$word = "fox";
$mystring = "The quick brown fox jumps over the lazy dog";

if (strpos($mystring, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}
"<br>";
//q4-------------------------------------------------------------
//ex1
$url = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_120x44dp.png';
        
        $name = basename($url); // to get file name
        $ext = pathinfo($url, PATHINFO_EXTENSION); // to get extension
        $name2 =pathinfo($url, PATHINFO_FILENAME); //file name without extension

        echo $name ."<br/>";
        echo $ext ."<br/>";
        echo $name2 ."<br/>";
//ex2
$path = 'www.example.com/public_html/index.php';
        $file_name = substr(strrchr($path, "/"), 1);
        echo $file_name."\n"; // "index.php"

//ex3
$path = "/testweb/home.php";
    //Show filename
echo basename($path) ."<br/>";
    //Show filename, but cut off file extension for ".php" files
echo basename($path, ".php")."<br/>";

//q5-------------------------------------------------------------
$mailid  = 'ahmed@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n"."<br/>";

//q6-------------------------------------------------------------
$str1 = 'orange coding academy';
echo substr($str1, -3)."\n"."<br/>";

//q7-------------------------------------------------------------
function password_generate($chars)
{
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7)."\n"."<br/>";

//q8-------------------------------------------------------------
  $str = 'the quick brown fox jumps over the lazy dog.';
  echo preg_replace('/the/', 'That', $str, 1)."\n"."<br/>";

//q9-------------------------------------------------------------
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
        $str_pos, $str1[$str_pos], $str2[$str_pos]
);
printf("\n");
"<br/>";
//q10-------------------------------------------------------------
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1)."<br/>"; //to view the array

//q11-------------------------------------------------------------
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n"."<br/>";

//q12-------------------------------------------------------------
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";

//q13-------------------------------------------------------------
echo rtrim("14522354265300000000000", "0"); // outputs: 145223542653

//q14-------------------------------------------------------------
$sub_string = 'rayy@';
$str = 'rayy@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";

//q15-------------------------------------------------------------
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";

//q16-------------------------------------------------------------
$string = "Wel%come *to( codex<world, the |world o^f pro?gramm&ing.";
// Remove special characters
$cleanStr = preg_replace('/[^A-Za-z0-9]/', '', $string);


//q17-------------------------------------------------------------
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";

//q18-------------------------------------------------------------
$str1 = "2,543.12";
$x = str_replace(',', '', $str1);
if (is_numeric($x)) {echo $x."\n";}

//q19-------------------------------------------------------------
for ($x = ord('a'); $x <= ord('z'); $x++) {
    echo chr($x);
    echo "\n";
}
?>
</body>
</html>