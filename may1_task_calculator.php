<?php

// To Get the Current Filename.
$currentPage = $_SERVER['SCRIPT_NAME'];

// To Get the directory name in 
// which file is stored.
$currentPage = substr($currentPage, 1);

// To Show the Current Filename on Page.
echo $currentPage;

?>
<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Check which operator was chosen and perform the corresponding calculation
    if ($operator == 'add') {
        $result = $num1 + $num2;
    } elseif ($operator == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operator == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operator == 'divide') {
        $result = $num1 / $num2;
    }
} ?>

<form action="" method="post">
    <input type="text" name="num1">
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="text" name="num2">
    <input type="submit" name="submit" value="Calculate">
</form>

<?php // If the form has been submitted, display the result
if (isset($result)) {
    echo "Result: $result";
}
?>