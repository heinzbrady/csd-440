
<!DOCTYPE html>
<html lang="en">
<!--
    Name: Brady Heinz
    Course: CSD-440
    Assignment: Module 1
    Date: October 20, 2026
    Description: My first PHP program demonstrating
    variables, output, and basic arithmetic.
-->
<head>
    <meta charset="UTF-8">
    <title>My First PHP Program</title>
</head>
<body>
    <h1>My First PHP Program</h1>

    <?php
        // Display a welcome message using PHP.
        $name = "Brady Heinz";
        $course = "CSD-440";

        echo "<p>Hello! My name is $name.</p>";
        echo "<p>Welcome to my first PHP program for $course.</p>";
    ?>

    <h2>Basic PHP Arithmetic</h2>

    <?php
        // Declare variables and calculate their sum.
        $number1 = 25;
        $number2 = 15;
        $total = $number1 + $number2;

        print "<p>First Number: $number1</p>";
        print "<p>Second Number: $number2</p>";
        print "<p>Sum: $total</p>";
    ?>

</body>
</html>
