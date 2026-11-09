
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 4 - PHP Palindrome</title>
</head>
<body>

<h1>PHP Palindrome Checker</h1>

<?php
/*
Name: Brady Heinz
Course: CSD-440
Assignment: Module 4.2
Date: 11/04/2026
Description: Checks six strings to see if they
are palindromes using a PHP function.
*/

// Function to check if a string is a palindrome
function checkPalindrome($word) {
    $reverse = strrev($word);

    if ($word == $reverse) {
        return "Palindrome";
    } else {
        return "Not a Palindrome";
    }
}

// Six example strings
$words = array(
    "racecar",
    "level",
    "madam",
    "hello",
    "world",
    "computer"
);
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Original String</th>
        <th>Reversed String</th>
        <th>Result</th>
    </tr>

    <?php
    foreach ($words as $word) {
        $reverse = strrev($word);
        $result = checkPalindrome($word);
    ?>
        <tr>
            <td><?php echo $word; ?></td>
            <td><?php echo $reverse; ?></td>
            <td><?php echo $result; ?></td>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>
