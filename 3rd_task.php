<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //q1------------------------------------------------------------
    echo "Q1.  ";
    /*A leap year is a calendar year in which an additional day is added to February month.
    In a leap year, the number of days in February month and the year are 29 and 366 respectively.
    A year that is not a leap year is called a common year. A year is said to be a leap year if:
        1. it is divisible by 4.
        2. it is divisible by 4 but not divisible by 100.
        3. it is divisible by 4, 100 and 400.*/
    $year = 2013;
    if ($year % 400 == 0) {
        echo $year . " is a leap year.";
    } elseif ($year % 100 == 0) {
        echo $year . " is not a leap year.";
    } elseif ($year % 4 == 0) {
        echo $year . " is a leap year.";
    } else {
        echo $year . " is not a leap year.";
    }
    echo "<br>";
    //q2------------------------------------------------------------
    echo "Q2.  ";

    echo "<br>";
    //q3------------------------------------------------------------
    echo "Q3.  ";
    function test($x, $y)
    {
        return $x == $y ? ($x + $y) * 3 : $x + $y;
    }
    echo test(1, 2) . "\n";
    echo test(3, 2) . "\n";
    echo test(2, 2) . "\n";

    echo "<br>";
    //q4------------------------------------------------------------
    echo "Q4.  ";
    function test2($x, $y)
    {
        return ($x == 30) || ($y == 30) || ($x + $y == 30);
    }

    var_dump(test2(30, 0));
    var_dump(test2(25, 5));
    var_dump(test2(20, 30));
    var_dump(test2(20, 25));

    echo "<br>";
    //q5------------------------------------------------------------
    echo "Q5.  ";
function test3($n)
{
   return $n % 3 == 0 ;
}

var_dump(test3(3));
var_dump(test3(14));
var_dump(test3(12));
var_dump(test3(37));

    echo "<br>";
    ?>
</body>
</html>
