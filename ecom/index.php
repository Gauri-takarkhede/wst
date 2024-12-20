<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "ecom";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       
        $productName = $row["product_name"];
        $productDescription = $row["product_description"];
        $productPrice = $row["product_price"]; 

        echo "<div class='product'>";
        echo "<h2 class='header'>$productName</h2>";
        echo "<p class='description'>$productDescription</p>";
        echo "<p class='price'>$productPrice</p>";
        echo "<div class='btn'>Add to cart</div>";
        echo "<div class='quickview'>Quickview</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
