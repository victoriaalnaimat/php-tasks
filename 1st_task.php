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
?>
</body>
</html>
