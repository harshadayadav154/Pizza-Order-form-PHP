<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>All Orders</title>
</head>

<body>
     <!-- Navigation Bar -->
     <nav>
        <ul>
            <li><a href="index.php">Order Pizza</a></li>
            <li><a href="allOrders.php">All Orders</a></li>
        </ul>
    </nav>
    
    <h1>All Orders</h1>

    <?php
    // Connect to the database (replace with your actual database connection code)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orders";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve all orders from the database
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the orders in a table
        echo "<table border='1'>";
        echo "<tr><th>Order ID</th><th>Quantity</th><th>Size</th><th>Dough</th><th>Sauce</th><th>Toppings</th><th>Cheese</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Street</th><th>Subtotal</th><th>Tax</th><th>Total</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["order_id"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td>" . $row["size"] . "</td>";
            echo "<td>" . $row["dough"] . "</td>";
            echo "<td>" . $row["sauce"] . "</td>";
            echo "<td>" . $row["toppings"] . "</td>";
            echo "<td>" . $row["cheese"] . "</td>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["street"] . "</td>";
            echo "<td>" . $row["subtotal"] . "</td>";
            echo "<td>" . $row["tax"] . "</td>";
            echo "<td>" . $row["total"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No orders found.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>

</html>
