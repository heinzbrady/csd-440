
<?php
/*
Name: Brady Heinz
Course: CSD-440
Assignment: Module 5.2
Date: 11/15/2026
Description: Functions used to display and
search customer records.
*/

// Display customers in an HTML table
function displayCustomers($customerList) {
    if (empty($customerList)) {
        echo "<p>No customers found.</p>";
        return;
    }

    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Phone</th></tr>";

    foreach ($customerList as $customer) {
        echo "<tr>";
        echo "<td>" . $customer["firstName"] . "</td>";
        echo "<td>" . $customer["lastName"] . "</td>";
        echo "<td>" . $customer["age"] . "</td>";
        echo "<td>" . $customer["phone"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Search customers by a specific field
function searchCustomers($customers, $field, $value) {
    return array_filter($customers, function($customer) use ($field, $value) {
        return $customer[$field] == $value;
    });
}

// Find customers older than a certain age
function searchByAge($customers, $age) {
    return array_filter($customers, function($customer) use ($age) {
        return $customer["age"] > $age;
    });
}
?>
