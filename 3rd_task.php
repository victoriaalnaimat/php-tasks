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
        return $n % 3 == 0;
    }

    var_dump(test3(3));
    var_dump(test3(14));
    var_dump(test3(12));
    var_dump(test3(37));

    echo "<br>";
    //q6------------------------------------------------------------
    echo "Q6.  ";
    function test4($x, $y)
    {
        return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
    }
    var_dump(test4(20, 84));
    var_dump(test4(14, 50));
    var_dump(test4(11, 45));
    var_dump(test4(25, 40));

    echo "<br>";
    //q7------------------------------------------------------------
    echo "Q7.  ";
    function test5($x, $y, $z)
    {
        $max = max($x, max($y, $z));
        return $max;
    }
    echo test5(1, 2, 3) . "\n";
    echo test5(1, 3, 2) . "\n";
    echo test5(1, 1, 1) . "\n";
    echo test5(1, 2, 2) . "\n";

    echo "<br>";
    //85------------------------------------------------------------
    echo "Q8.  ";
    $amount = '';
    $kwh_usage = '';
    if (isset($_POST['submit'])) {
        $units = $_POST['kwh'];
        if (!empty($units)) {
            $kwh_usage = calculateElectricityBill($units);
            $amount = '<strong>Total amount of ' . $units . ' units -</strong> ' . $kwh_usage;
        }
    }
    /**
     * To calculate electricity bill as per unit cost
     */
    function calculateElectricityBill($units)
    {
        $firstUnitCost = 8;
        $secondUnitCost = 12;
        $thirdUnitCost = 16;
        $fourthUnitCost = 20;

        if ($units <= 100) {
            $bill = $units * $firstUnitCost;
        } elseif ($units > 100 && $units <= 200) {
            $temp = 100 * $firstUnitCost;
            $remainingUnits = $units - 100;
            $bill = $temp + ($remainingUnits * $secondUnitCost);
        } elseif ($units > 200 && $units <= 300) {
            $temp = (100 * $firstUnitCost) + (100 * $secondUnitCost);
            $remainingUnits = $units - 200;
            $bill = $temp + ($remainingUnits * $thirdUnitCost);
        } else {
            $temp = (100 * $firstUnitCost) + (100 * $secondUnitCost) + (100 * $thirdUnitCost);
            $remainingUnits = $units - 300;
            $bill = $temp + ($remainingUnits * $fourthUnitCost);
        }
        return number_format((float)$bill, 2, '.', '');
    }
    echo "<br>";
    //q9------------------------------------------------------------
    echo "Q9.  ";
    /* $firstNum = $_POST['firstNum'];
    $secondNum = $_POST['secondNum'];
    $operator = $_POST['operator'];
    $result = '';
    if (is_numeric($firstNum) && is_numeric($secondNum)) {
        switch ($operator) {
            case "Add":
                $result = $firstNum + $secondNum;
                break;
            case "Subtract":
                $result = $firstNum - $secondNum;
                break;
            case "Multiply":
                $result = $firstNum * $secondNum;
                break;
            case "Divide":
                $result = $firstNum / $secondNum;
        }
    }*/
$oldFigure = 14;
$newFigure = 12.50;

$percentChange = (1 - $oldFigure / $newFigure) * 100;

echo $percentChange;
    echo "<br>";
    //q10------------------------------------------------------------
    echo "Q10.  ";
    function checkVote() //function has been declared
    {
        $name = "Rashed";
        $age = 19;
        if ($age >= 18) {
            echo $name . ", you Are Eligible For Vote";
        } else {
            echo $name . ", you are not eligible for vote. ";
        }
    }
    checkVote(); //function has been called
    echo "<br>";
    //q11------------------------------------------------------------
    echo "Q11.  ";
    function checkNumber($x)
    {
        if ($x > 0) {
            $message = "Positive number";
        }
        if ($x == 0) {
            $message = "Zero";
        }
        if ($x < 0) {
            $message = "Negative number";
        }
        echo $message . "\n";
    }

    checkNumber(5.5);
    checkNumber(-10.8);
    echo "<br>";
    //q12------------------------------------------------------------
    echo "Q12.  ";
    // PHP Script to Calculate Total Marks of Student and Display Grade

    // These are the marks of five subjects
    $sub_1 = 95;
    $sub_2 = 85;
    $sub_3 = 74;
    $sub_4 = 64;
    $sub_5 = 53;

    $total = null;
    $average = null;
    $percentage = null;
    $grade = null;

    // It will calculate total, average, percentage, and grade
    $total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
    $average = $total / 5.0;
    $percentage = ($total / 500.0) * 100;

    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80 && $average < 90) {
        $grade = "B";
    } elseif ($average >= 70 && $average < 80) {
        $grade = "C";
    } elseif ($average >= 60 && $average < 70) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // It will print the final output
    echo "The Total marks   = " . $total . "/500\n";
    echo "The Average marks = " . $average . "\n";
    echo "The Percentage    = " . $percentage . "%\n";
    echo "The Grade         = '" . $grade . "'\n";

    echo "<br>";
    ?>
</body>
</html>
