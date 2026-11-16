
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 5.2 - Customer Array</title>
</head>
<body>

<h1>Customer Information</h1>

<?php
/*
Name: Brady Heinz
Course: CSD-440
Assignment: Module 5.2
Date: 11/15/2026
Description: Creates an array of customers and
searches for customers using different fields.
*/

// Include the customer functions
include 'CustomerFunctions.php';

// Create an array of 10 customers
$customers = [
    ["firstName" => "John", "lastName" => "Smith", "age" => 25, "phone" => "555-123-4567"],
    ["firstName" => "Mary", "lastName" => "Johnson", "age" => 32, "phone" => "555-234-5678"],
    ["firstName" => "James", "lastName" => "Brown", "age" => 45, "phone" => "555-345-6789"],
    ["firstName" => "Sarah", "lastName" => "Davis", "age" => 28, "phone" => "555-456-7890"],
    ["firstName" => "Michael", "lastName" => "Wilson", "age" => 35, "phone" => "555-567-8901"],
    ["firstName" => "Emily", "lastName" => "Moore", "age" => 22, "phone" => "555-678-9012"],
    ["firstName" => "David", "lastName" => "Taylor", "age" => 40, "phone" => "555-789-0123"],
    ["firstName" => "Jessica", "lastName" => "Anderson", "age" => 30, "phone" => "555-890-1234"],
    ["firstName" => "Robert", "lastName" => "Thomas", "age" => 50, "phone" => "555-901-2345"],
    ["firstName" => "Ashley", "lastName" => "Jackson", "age" => 27, "phone" => "555-012-3456"]
];

// Display all customers
echo "<h2>All Customers</h2>";
displayCustomers($customers);

// Search by first name
echo "<h2>Search by First Name: John</h2>";
displayCustomers(searchCustomers($customers, "firstName", "John"));

// Search by last name
echo "<h2>Search by Last Name: Davis</h2>";
displayCustomers(searchCustomers($customers, "lastName", "Davis"));

// Search by age
echo "<h2>Customers Older Than 30</h2>";
displayCustomers(searchByAge($customers, 30));

// Search by phone number
echo "<h2>Search by Phone: 555-789-0123</h2>";
displayCustomers(searchCustomers($customers, "phone", "555-789-0123"));

?>

</body>
</html>
