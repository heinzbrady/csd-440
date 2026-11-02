
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 3 - PHP Table</title>
</head>
<body>

<h1>PHP Random Number Table</h1>

<?php
/*
Name: Brady Heinz
Course: CSD-440
Assignment: Module 3.2
Date: 10/30/2026
Description: Creates a table using random numbers
and an external function to calculate their sum.
*/

include 'TableFunctions.php';
?>

<table border="1" cellpadding="10">
    <?php
    for ($row = 1; $row <= 5; $row++) {
    ?>
        <tr>
        <?php
        for ($col = 1; $col <= 5; $col++) {
            $num1 = rand(1, 50);
            $num2 = rand(1, 50);
            $total = addNumbers($num1, $num2);
        ?>
            <td><?php echo $total; ?></td>
        <?php
        }
        ?>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>
