
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 2.2 - PHP Table</title>
</head>
<body>

<!--
    Name: Brady Heinz
    Course: CSD-440
    Assignment: Module 2.2
    Date: 10/30/2026
    Description: Creates an HTML table using PHP
    nested loops and random numbers.
-->

<h1>PHP Random Number Table</h1>

<p>This table displays random numbers generated using PHP.</p>

<table border="1" cellpadding="10">

    <?php
    // Outer loop creates the rows
    for ($row = 1; $row <= 5; $row++) {
    ?>
        <tr>

        <?php
        // Inner loop creates the columns
        for ($col = 1; $col <= 5; $col++) {

            // Generate a random number from 1 to 100
            $number = rand(1, 100);
        ?>
            <td><?php echo $number; ?></td>

        <?php
        } // End inner loop
        ?>

        </tr>

    <?php
    } // End outer loop
    ?>

</table>

</body>
</html>
