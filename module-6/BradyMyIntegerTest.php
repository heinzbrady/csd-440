
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 6.2 - MyInteger</title>
</head>
<body>

<h1>PHP MyInteger Class</h1>

<?php
/*
Name: Brady Heinz
Course: CSD-440
Assignment: Module 6.2
Date: 11/15/2026
Description: Creates two MyInteger objects
and tests all the class methods.
*/

// Include the class file
require_once 'BradyMyInteger.php';

// Create two objects
$number1 = new BradyMyInteger(7);
$number2 = new BradyMyInteger(10);

// Function to display the test results
function displayResults($object) {
    $num = $object->getNumber();

    echo "<h2>Testing Number: $num</h2>";

    echo "Even: " .
        ($object->isEven($num) ? "Yes" : "No") . "<br>";

    echo "Odd: " .
        ($object->isOdd($num) ? "Yes" : "No") . "<br>";

    echo "Prime: " .
        ($object->isPrime() ? "Yes" : "No") . "<br>";
}

// Test both objects
displayResults($number1);
displayResults($number2);

// Test the setter method
echo "<h2>Testing Setter Method</h2>";

$number1->setNumber(12);

echo "Updated Number: " . $number1->getNumber() . "<br>";

// Test the updated number
displayResults($number1);

?>

</body>
</html>
