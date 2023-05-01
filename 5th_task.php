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
    /*Write a script to generate the following paragraph
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red
carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. -
Richard M. Nixon"
The words 'red', 'green' and 'white' should come from the $colors array.*/
    $color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is like a frame of film forever frozen at
 that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky.
 The new president and his first lady. - Richard M. Nixon" . "\n";

    echo "<br>";
    //q2------------------------------------------------------------
    echo "Q2.  ";
    /*$colors = array('white', 'green', 'red')
Write a PHP script that will display the colors as unordered list */
    $color = array('white', 'green', 'red');
    foreach ($color as $c) {
        echo "$c, ";
    }
    sort($color);
    echo "<ul>";
    foreach ($color as $y) {
        echo "<li>$y</li>";
    }
    echo "</ul>";
    echo "<br>";
    //q3------------------------------------------------------------
    echo "Q3.  ";
    /*$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );
Create a PHP script to displays the capital and country name from the above array $cities. Sort
the list by the capital of the country.*/
    $ceu = array(
        "Italy" => "Rome", "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels", "Denmark" => "Copenhagen",
        "Finland" => "Helsinki", "France" => "Paris",
        "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
        "Germany" => "Berlin", "Greece" => "Athens",
        "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon", "Spain" => "Madrid"
    );
    asort($ceu);
    foreach ($ceu as $country => $capital) {
        echo "The capital of $country is $capital" . "<br>";
    }
    echo "<br>";
    //q4------------------------------------------------------------
    echo "Q4.  ";
    /*$color = array (4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to display the first element of the above array*/
    $color = array(4 => 'white', 6 => 'green', 11 => 'red');
    echo reset($color) . "\n";
    echo "<br>";
    //q5------------------------------------------------------------
    echo "Q5.  ";
    /*Write a PHP script that inserts a specific new item in an array in any position.*/
    $original = array('1', '2', '3', '4', '5');
    echo 'Original array : ' . "\n";
    foreach ($original as $x) {
        echo "$x ";
    }
    $inserted = '$';
    array_splice($original, 3, 0, $inserted);
    echo " <br> After inserting '$' the array is : ";
    foreach ($original as $x) {
        echo "$x ";
    }
    echo "<br>";
    //q6------------------------------------------------------------
    echo "Q6.  ";
    /*Write a PHP script to sort the following associative array depending on the key value [asc] :*/
    //Sorting Associative Arrays in Ascending Order
    $fruits = array("d" => "lemon...", "a" => "orange...", "b" => "banana...", "c" => "apple...");
    asort($fruits);
    print_r($fruits);
    echo "<br>";

    //Sorting Associative Arrays in Descending Order
    $fruits2 = array("d" => "lemon...", "a" => "orange...", "b" => "banana...", "c" => "apple...");
    arsort($fruits2);
    print_r($fruits2);
    echo "<br>";
    //q7------------------------------------------------------------
    echo "Q7.  ";
    /*Write a PHP script to calculate and display the average temperature for the recorded reads, also
the script should display the list of the five lowest and the five highest temperatures*/
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    $temp_array = explode(',', $month_temp);
    $tot_temp = 0;
    $temp_array_length = count($temp_array);
    foreach ($temp_array as $temp) {
        $tot_temp += $temp;
    }
    $avg_high_temp = $tot_temp / $temp_array_length;
    echo "Average Temperature is : " . $avg_high_temp . "
";
    sort($temp_array);
    echo " List of five lowest temperatures :";
    for ($i = 0; $i < 5; $i++) {
        echo $temp_array[$i] . ", ";
    }
    echo "List of five highest temperatures :";
    for ($i = ($temp_array_length - 5); $i < ($temp_array_length); $i++) {
        echo $temp_array[$i] . ", ";
    }
    echo "<br>";
    //85------------------------------------------------------------
    echo "Q8.  ";
    /*Write a PHP program to merge the following two arrays.*/
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    function mergeArraysByIndex($x, $y)
    {
        $temp = array();
        $temp[] = $x; 
        if (is_scalar($y)) {
            $temp[] = $y;
        }
        return $temp;
    }
    echo '<pre>';
    print_r(array_map('mergeArraysByIndex', $array2, $array1));
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