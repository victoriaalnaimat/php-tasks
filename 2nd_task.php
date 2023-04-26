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
    echo "Q1.  ";
    function isPrime($n)
    {
        for ($x = 2; $x < $n; $x++) {
            if ($n % $x == 0) {
                return 0;
            }
        }
        return 1;
    }
    $a = isPrime(3);
    if ($a == 0) {
        echo 'This is not a Prime Number.' . "\n";
    } else {
        echo 'This is a Prime Number.' . "\n";
    }
    echo "<br>";
    //q2------------------------------------------------------------
    echo "Q2.  ";
    function reversestring($str1)
    {
        $n = strlen($str1);
        if ($n == 1) {
            return $str1;
        } else {
            $n--;
            return reversestring(substr($str1, 1, $n)) . substr($str1, 0, 1);
        }
    }
    print_r(reversestring('1234') . "\n");
    echo "<br>";
    //q3------------------------------------------------------------
    echo "Q3.  ";
    function isStrLowercase($str1)
    {
        for ($sc = 0; $sc < strlen($str1); $sc++) {
            if (
                ord($str1[$sc]) >= ord('A') &&
                ord($str1[$sc]) <= ord('Z')
            ) {
                return false;
            }
        }
        return true;
    }
    var_dump(isStrLowercase('abc def ghi'));
    var_dump(isStrLowercase('abc dEf ghi'));
    echo "<br>";
    //q4+q5------------------------------------------------------------
    echo "Q4.+Q5  ";
    $a = 15;
    $b = 27;

    // Swap Logic

    echo "\nThe number before swapping is:\n";
    echo "Number a =" . $a . " and b=" . $b;

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "\nThe number after swapping is: \n";
    echo "Number a =" . $a . " and b=" . $b . "\n";
    echo "<br>";
    //q6------------------------------------------------------------
    echo "Q6.  ";
    function isArmstrongNumber($number)
    {
        $sum = 0;
        $temp = $number;
        $numDigits = strlen((string) $number);

        while ($temp > 0) {
            $digit = $temp % 10;
            $sum += pow($digit, $numDigits);
            $temp = (int) ($temp / 10);
        }

        if ($sum == $number) {
            return true;
        } else {
            return false;
        }
    }
    $number = 407;
    if (isArmstrongNumber($number)) {
        echo $number . " is Armstrong number";
    } else {
        echo $number . " is not Armstrong number";
    }
    echo "<br>";
    //q7------------------------------------------------------------
    echo "Q7.  ";
    function palindrome($number)
    {
        $temp = $number;
        $new = 0;
        while (floor($temp)) {
            $d = $temp % 10;
            $new = $new * 10 + $d;
            $temp = $temp / 10;
        }
        if ($new == $number) {
            return 1;
        } else {
            return 0;
        }
    }
    // Driver Code
    $original = 1441;
    if (palindrome($original)) {
        echo "Palindrome";
    } else {
        echo "Not a Palindrome";
    }
    echo "<br>";
    //q8------------------------------------------------------------
    echo "Q8.  ";
    $colors = array(
        0 => 'Red',
        1 => 'Green',
        2 => 'White',
        3 => 'Black',
        4 => 'Red',
    );

    $numbers = array(
        0 => 100,
        1 => 200,
        2 => 100,
        3 => -10,
        4 => -10,
        5 => 0,
    );
    $uniq_colors = array_keys(array_flip($colors));
    $uniq_numbers = array_keys(array_flip($numbers));
    print_r($uniq_colors);
    print_r($uniq_numbers);
    echo "<br>";
    ?>
</body>
</html>
