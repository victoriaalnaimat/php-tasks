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
    /*Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the
start and end position.*/
    for ($x = 1; $x <= 10; $x++) {
        if ($x < 10) {
            echo "$x-";
        } else {
            echo "$x" . "\n";
        }
    }
    echo "<br>";
    //q2------------------------------------------------------------
    echo "Q2.  ";
    /*Create a script using a for loop to add all the integers between 0 and 30 and display the total.*/
    $sum = 0;
    for ($x = 1; $x <= 30; $x++) {
        $sum += $x;
    }
    echo "The sum of the numbers 0 to 30 is $sum" . "\n";
    echo "<br>";
    //q3------------------------------------------------------------
    echo "Q3.  ";
    /*Create a script to generate the following pattern, using the nested for loop.*/
    // square pattern - ALPHABETICAL
    $size = 5;
    for ($i = 0; $i < $size; $i++) {
        // print column
        for ($j = 0; $j < $size; $j++) {
            // print row
            echo "A";
        }
        echo "<br>";
    }
    echo "<br>";
    //q4------------------------------------------------------------
    echo "Q4.  ";
    /*Create a script to generate the following pattern, using the nested for loop.*/
    // square pattern - NUMERIC
    $limit = 5;
    $count = 5;
    for ($i = 5; $i >= 1; $i--) {
        for ($j = $limit; $j >= 1; $j--) {
            $count = ($count >= 1) ? $count : 5;
            echo $count-- . "&nbsp;";
        }
        if ($count < 1) {
            $count = $i - 1;
        } else {
            $count--;
        }
        echo "<br>";
    }
    echo "<br>";
    //q5------------------------------------------------------------
    echo "Q5.  ";

    echo "<br>";
    //q6------------------------------------------------------------
    echo "Q6.  ";

    echo "<br>";
    //q7------------------------------------------------------------
    echo "Q7.  ";

    echo "<br>";
    //85------------------------------------------------------------
    echo "Q8.  ";

    echo "<br>";
    //q9------------------------------------------------------------
    echo "Q9.  ";

    echo "<br>";
    //q10------------------------------------------------------------
    echo "Q10.  ";

    echo "<br>";
    //q11------------------------------------------------------------
    echo "Q11.  ";

    echo "<br>";
    //q12------------------------------------------------------------
    echo "Q12.  ";

    echo "<br>";
    ?>
</body>

</html>