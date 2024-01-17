<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pizza Orders</title>
</head>

<body>
     <!-- Navigation Bar -->
     <nav>
        <ul>
            <li><a href="index.php">Order Pizza</a></li>
            <li><a href="allOrders.php">All Orders</a></li>
        </ul>
    </nav>
    <h1>Pizza Order Form</h1>
    
    <div class="pizza-form">
        <form method="post" id="pizzaForm">
            <label for="quantity" class="bold-font">Number of Pizzas:</label>
            <input type="number" id="quantity" name="quantity" min="1" required="">
            <span id="quantityError" class="error"></span>
            <div class="pizza-fields" id="pizzaFields" style="display: block;">
               
                <label class="pizza-field-label bold-font" for="size">Pizza Size:</label>
                <select id="size" name="size" required="">
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="Extra large">Extra large</option>
                </select>

                <label class="pizza-field-label bold-font" for="dough">Dough Type:</label>
                <select id="dough" name="dough" required="">
                  
                    <option value="regular">regular</option>
                    <option value="regular thin crust">regular thin crust</option>
                    <option value="regular thick crust">regular thick crust</option>
                    <option value="whole grain crust">whole grain crust</option>
                    <option value="whole grain thin crust">whole grain thin crust</option>
                    <option value="whole grain thick crust">whole grain thick crust</option>
                </select>
                <br>
                <label class="pizza-field-label bold-font" >Cheese Type:</label>
        <div id="cheese" >
        <label >
                        <input type="radio" name="cheese" value="Mozzarella " class="checkbox-label">
                        Mozzarella
                    </label><label>
                        <input type="radio" name="cheese" value="Dairy-Free " class="checkbox-label">
                        Dairy-Free
                    </label><label>
                        <input type="radio" name="cheese" value="Four Cheese Blend" class="checkbox-label">
                        No Cheese
                    </label><label>
                        <input type="radio" name="cheese" value="No Cheese " class="checkbox-label">
                        No Cheese
                    </label><label>  
        </div>
        <br>
                <label class="pizza-field-label bold-font" for="sauce">Sauce Type:</label>
                <div id="sauce" name="sauce" required="">
                   
                    <label >
                        <input type="radio" name="sauce" value="home-style Italian tomato " class="checkbox-label">
                        home-style Italian tomato
                    </label><label>
                        <input type="radio" name="sauce" value="buffalo blue cheese " class="checkbox-label">
                        buffalo blue cheese
                    </label><label>
                        <input type="radio" name="sauce" value="creamy garlic " class="checkbox-label">
                        creamy garlic
                    </label><label>
                        <input type="radio" name="sauce" value="chipotle " class="checkbox-label">
                        chipotle
                    </label><label>
                        <input type="radio" name="sauce" value="pesto " class="checkbox-label">
                        pesto
                    </label><label>
                        <input type="radio" name="sauce" value="spicy " class="checkbox-label">
                        spicy
                    </label><label>
                        <input type="radio" name="sauce" value="sweet chilli Thai " class="checkbox-label">
                        sweet chilli Thai
                    </label><label>
                        <input type="radio" name="sauce" value="tandoori " class="checkbox-label">
                        tandoori
                    </label><label>
                        <input type="radio" name="sauce" value="Texas " class="checkbox-label">
                        Texas
                    </label><label>
                        <input type="radio" name="sauce" value="no sauce " class="checkbox-label">
                        no sauce
                    </label>
                </div>
                <br>
                <label class="pizza-field-label bold-font" for="toppings">Toppings:</label>
                <div id="toppings" name="toppings" multiple="" required="">
                    <!-- Dynamically generated options for toppings -->
                    <label>
                        <input type="checkbox" name="toppings[]" value="anchovies " class="checkbox-label">
                        anchovies
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="artichokes " class="checkbox-label">
                        artichokes
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="bacon strips " class="checkbox-label">
                        bacon strips
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="broccoli " class="checkbox-label">
                        broccoli
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="bruschetta " class="checkbox-label">
                        bruschetta
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="buffalo chicken " class="checkbox-label">
                        buffalo chicken
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="caramelized onions " class="checkbox-label">
                        caramelized onions
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="cilantro " class="checkbox-label">
                        cilantro
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="chipotle chicken " class="checkbox-label">
                        chipotle chicken
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="chipotle steak " class="checkbox-label">
                        chipotle steak
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="chorizo sausage " class="checkbox-label">
                        chorizo sausage
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="fire-roasted red peppers " class="checkbox-label">
                        fire-roasted red peppers
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="green olives " class="checkbox-label">
                        green olives
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="green peppers " class="checkbox-label">
                        green peppers
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="grilled chicken " class="checkbox-label">
                        grilled chicken
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="grilled zucchini " class="checkbox-label">
                        grilled zucchini
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="ground beef " class="checkbox-label">
                        ground beef
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="hot banana peppers " class="checkbox-label">
                        hot banana peppers
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="Italian ham " class="checkbox-label">
                        Italian ham
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="jalapeno peppers " class="checkbox-label">
                        jalapeno peppers
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="kalamata olives " class="checkbox-label">
                        kalamata olives
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="mushrooms " class="checkbox-label">
                        mushrooms
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="New York style pepperoni " class="checkbox-label">
                        New York style pepperoni
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="pepperoni " class="checkbox-label">
                        pepperoni
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="pineapple " class="checkbox-label">
                        pineapple
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="plant-based chorizo crumble " class="checkbox-label">
                        plant-based chorizo crumble
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="plant-based pepperoni " class="checkbox-label">
                        plant-based pepperoni
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="red onions " class="checkbox-label">
                        red onions
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="roasted garlic " class="checkbox-label">
                        roasted garlic
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="Roma tomatoes " class="checkbox-label">
                        Roma tomatoes
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="salami " class="checkbox-label">
                        salami
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="spicy Italian sausage " class="checkbox-label">
                        spicy Italian sausage
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="steak strips " class="checkbox-label">
                        steak strips
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="spinach " class="checkbox-label">
                        spinach
                    </label><label>
                        <input type="checkbox" name="toppings[]" value="sun-dried tomatoes " class="checkbox-label">
                        sun-dried tomatoes
                    </label>
                </div>

            </div>

            <label for="firstName" class="bold-font">First Name:</label>
            <input type="text" id="firstName" name="firstName" min=2 required="">
            <span id="firstNameError" class="error"></span>

            <label for="lastName" class="bold-font">Last Name:</label>
            <input type="text" id="lastName" name="lastName" min=2 required="">
            <span id="lastNameError" class="error"></span>

            <label for="email" class="bold-font">Email Address:</label>
            <input type="email" id="email" name="email" required="">
            <span id="emailError" class="error"></span>

            <label for="phone" class="bold-font">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required="">
            <span id="phoneError" class="error"></span>

            <label for="street" class="bold-font">Street Number and Name:</label>
            <input type="text" id="street" name="street" required="">
            <span id="streetNameError" class="error"></span>
            <button type="submit" class="submit-button" id="submit_button">
                Place Order
            </button>
           

        </form>
    </div>

    <?php
    function generateOrderID() {
        // Get the current timestamp
        $date = date("YmdHis");
        // Generate a random number (you can use other methods for better randomness)
        $randomNumber = mt_rand(10000, 99999);
    
        // Combine timestamp and random number to create a unique order ID
        $orderID = $date . $randomNumber;
    
        return $orderID;
    }
    
    // Check if the form is submitted using POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Retrieve form data
        $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
        $size = isset($_POST["size"]) ? $_POST["size"] : "";
        $dough = isset($_POST["dough"]) ? $_POST["dough"] : "";
        $sauce = isset($_POST["sauce"]) ? $_POST["sauce"] : "";
        if (isset($_POST['toppings']) && is_array($_POST['toppings'])) {
            $toppings = $_POST['toppings'];
        }
        $cheese = isset($_POST["cheese"]) ? $_POST["cheese"] : "";
        
        // User information
        $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
        $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
        $street = isset($_POST["street"]) ? $_POST["street"] : "";
        if(empty($orderID)){
            $orderId =  generateOrderID();
        }
        
// Validate form data
$errors = [];

// Validate quantity
if (empty($quantity) || !is_numeric($quantity) || $quantity < 1 || $quantity > 9) {
    $errors['quantity'] = "Invalid quantity. Please enter a quantity between 1 and 9 for regular orders.";
}


// Validate first name
if (empty($firstName) || strlen($firstName) < 2) {
    $errors['firstName'] = "First name must be at least 2 characters.";
}

// Validate last name
if (empty($lastName) || strlen($lastName) < 2) {
    $errors['lastName'] = "Last name must be at least 2 characters.";
}

// Validate street
if (empty($street)) {
    $errors['street'] = "Street number and name are required.";
}

// Validate email
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email address.";
}

// Validate phone number
if (empty($phone) || !preg_match('/^\d{3}-\d{3}-\d{4}$/', $phone)) {
    $errors['phone'] = "Invalid phone number. It should be a 10-digit number.";
}

if (empty($errors)){
            $toppings = [];
            // creating variables for database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "orders";
            
            // creating db
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Escape the values to prevent SQL injection (you need to add more escaping based on your database structure)
            $quantity = mysqli_real_escape_string($conn, $quantity);
            $size = mysqli_real_escape_string($conn, $size);
            $dough = mysqli_real_escape_string($conn, $dough);
            $sauce = mysqli_real_escape_string($conn, $sauce);
            $cheese = mysqli_real_escape_string($conn, $cheese);
           // Process selected toppings
        if (isset($_POST['toppings']) && is_array($_POST['toppings'])) {
            foreach ($_POST['toppings'] as $selectedTopping) {
                // Sanitize and add each selected topping to the $toppings array
                $toppings[] = mysqli_real_escape_string($conn, $selectedTopping);
            }
        }
            $firstName = mysqli_real_escape_string($conn, $firstName);
            $lastName = mysqli_real_escape_string($conn, $lastName);
            $email = mysqli_real_escape_string($conn, $email);
            $phone = mysqli_real_escape_string($conn, $phone);
            $street = mysqli_real_escape_string($conn, $street);

            // Calculate pizza cost based on size
            $pizzaCosts = [
                'Small' => 7.00,
                'Medium' => 12.00,
                'Large' => 17.00,
                'Extra large' => 25.00
            ];

            $subtotal = $pizzaCosts[$size] * $quantity;

            // Additional toppings cost
            $toppingCost = count($toppings) > 2 ? (count($toppings) - 2) * 0.50 : 0.00;

            // Calculate subtotal, tax amount, and total
            $subtotal += $toppingCost;
            $taxRate = 0.13;
            $taxAmount = $subtotal * $taxRate;
            $total = $subtotal + $taxAmount;

 // Encode the array to JSON
 $toppingsJSON = json_encode($toppings);
            // Output the results
            echo '<form method="post" action="index.php" id="confirmationForm" class="pizza-form">';
            echo "<h2>Order Summary</h2>";
            echo "<p>Toppings x$" . (count($toppings) - 2) . ":" . number_format($toppingCost, 2) . "</p>";
            echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
            echo "<p>Tax: $" . number_format($taxAmount, 2) . "</p>";
            echo "<p>Total: $" . number_format($total, 2) . "</p>";

            // Display hidden input values
            echo '<h3>Order Details</h3>';
            echo '<p>Quantity: ' . htmlspecialchars($quantity) . '</p>';
            echo '<p>Size: ' . $size . '</p>';
            echo '<p>Dough: ' . $dough . '</p>';
            echo '<p>Sauce: ' . $sauce . '</p>';
            echo '<p>Cheese: ' . $cheese . '</p>';
            echo '<p>Toppings: ' . implode(', ', $toppings) . '</p>';
            echo '<p>First Name: ' . $firstName . '</p>';
            echo '<p>Last Name: ' . $lastName . '</p>';
            echo '<p>Email: ' . $email . '</p>';
            echo '<p>Phone: ' . $phone . '</p>';
            echo '<p>Street: ' . $street . '</p>';
            echo '<p>OrderId:'.$orderId.' </p>';

            // Add the buttons for submitting or modifying the order
            echo '<form method="post" action="index.php" id="confirmationForm">';
            echo '<input type="text" name="orderId" id="orderId" value="' . $orderId . '">';
            echo '<input type="text" name="quantity" value="' . htmlspecialchars($quantity) . '">';
            echo '<input type="text" name="size" value="' . $size . '">';
            echo '<input type="text" name="dough" value="' . $dough . '">';
            echo '<input type="text" name="sauce" value="' . $sauce . '">';
            echo '<input type="text" name="cheese" value="' . $cheese . '">';
            echo '<input type="text" name="toppings[]" value="' . implode(', ', $toppings) . '">';
            echo '<input type="text" name="firstName" value="' . $firstName . '">';
            echo '<input type="text" name="lastName" value="' . $lastName . '">';
            echo '<input type="text" name="email" value="' . $email . '">';
            echo '<input type="text" name="phone" value="' . $phone . '">';
            echo '<input type="text" name="street" value="' . $street . '">';

            // <!-- order details for submitting and modifying the data -->
           echo '<button type="submit" class="submit-button" name="submitOrder">Submit Order</button>';
            echo '<button type="submit" class="submit-button" name="modifyOrder">Modify Order</button>';
            echo '</form>';

           

            // Insert data into the database only if the Submit Order button is clicked
            if (isset($_POST["submitOrder"])) {
                $sql = "INSERT INTO orders (order_id, quantity, size, dough, sauce, cheese, toppings, first_name, last_name, email, phone, street, subtotal, tax, total) 
    VALUES ('$orderId','$quantity', '$size', '$dough', '$sauce','$cheese', '$toppingsJSON', '$firstName', '$lastName', '$email', '$phone', '$street', $subtotal, '$taxAmount', '$total')";

                if ($conn->query($sql) === TRUE) {
                    echo "Order submitted successfully!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 
                
            } elseif (isset($_POST["modifyOrder"])) {
                $orderId = isset($_POST['orderId']) ? $_POST['orderId'] : '';
                    // Retrieve the relevant information to identify the order (e.g., email, phone, etc.)
                    $userIdentifier = isset($_POST['email']) ? $_POST['email'] : ''; // Adjust this based on your scenario
            
                    // Retrieve orderId from the database based on the user's information
                    $orderIdQuery = "SELECT order_id FROM orders WHERE email = '$userIdentifier' LIMIT 1"; // Adjust the query based on your database structure
                    $orderIdResult = $conn->query($orderIdQuery);
            
                    if ($orderIdResult === false) {
                        echo "Error: " . $conn->error;
                    } elseif ($orderIdResult->num_rows > 0) {
                        // Fetch the orderId from the result
                        $row = $orderIdResult->fetch_assoc();
                        $orderId = $row['order_id'];
                
                        // Set the retrieved orderId as the value of the hidden input field
                        echo '<input type="hidden" name="orderId" id="orderId" value="' . htmlspecialchars($orderId) . '">';
                    } else {
                        echo "Error: Unable to retrieve orderId.";
                    }
                $orderId = isset($_POST['orderId']) ? $_POST['orderId'] : '';

                if (empty($orderId)) {
                    echo "Error: Order ID is missing.";
                } else {
                    // Escape the order ID to prevent SQL injection
                    $orderId = mysqli_real_escape_string($conn, $orderId);

                    // Retrieve the other form data for modification
                    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
                    $size = isset($_POST["size"]) ? $_POST["size"] : "";
                    $dough = isset($_POST["dough"]) ? $_POST["dough"] : "";
                    $sauce = isset($_POST["sauce"]) ? $_POST["sauce"] : "";
                    $cheese = isset($_POST["cheese"]) ? $_POST["cheese"] : "";
                    $toppings = isset($_POST["toppings"]) ? (is_array($_POST["toppings"]) ? $_POST["toppings"] : [$_POST["toppings"]]) : [];
                    // User information
                    $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
                    $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
                    $email = isset($_POST["email"]) ? $_POST["email"] : "";
                    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
                    $street = isset($_POST["street"]) ? $_POST["street"] : "";

                    // Validate form data (you might need more validation)
                    if (empty($quantity) || $quantity < 1 || $quantity > 9) {
                        echo "Invalid quantity. Please enter a quantity between 1 and 9 for regular orders.";
                        // Handle the error (e.g., redirect back to the form with an error message)
                    } else {
                        // Update the order in the database
                        $sql = "UPDATE orders SET quantity='$quantity', size='$size', dough='$dough', sauce='$sauce', cheese='$cheese', toppings='" . $toppingsJSON . "', first_name='$firstName', last_name='$lastName', email='$email', phone='$phone', street='$street' WHERE order_id=$orderId";

                        if ($conn->query($sql) === TRUE) {
                            echo "Order modified successfully!";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                }
            }

            // Close the database connection
            $conn->close();
        }
        else {
            // Output validation errors
            foreach ($errors as $error) {
                echo "<p>Error: $error</p>";
            }
        }
    } else {
        // If someone tries to access this script directly without submitting the form
        echo "Access denied.";
    }
    ?>


</body>

</html>