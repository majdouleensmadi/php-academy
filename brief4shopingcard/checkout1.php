<?php
  // Include the database connection file
  require 'config.php';

  // Initialize variables
  $grand_total = 0;
  $allItems = '';
  $items = [];

  // Query the cart table to retrieve the items and their total price
  $sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();

  // Loop through the result set and store the items and their total price
  while ($row = $result->fetch_assoc()) {
    $grand_total += $row['total_price'];
    $items[] = $row['ItemQty'];
  }

  // Convert the items array into a string
  $allItems = implode(', ', $items);

  // Process the order when the submit button is clicked
  if(isset($_POST['submit'])){

    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pmode = $_POST['pmode'];
    $products = $_POST['products'];
    $grand_total = $_POST['grand_total'];

    // Insert the order details into the orders table
    $sql = "INSERT INTO orders (name, email, phone, address, pmode, products, amount) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssd", $name, $email, $phone, $address, $pmode, $products, $grand_total);
    $stmt->execute();

    // Clear the cart by deleting all the items from the cart table
    $sql = "DELETE FROM cart";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Redirect to the order confirmation page
    header("location: order_confirmation.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
</head>
<body>
  <h1>Checkout</h1>
  <form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br>

    <label for="pmode">Payment Mode:</label>
    <select id="pmode" name="pmode" required>
      <option value="">Select Payment Mode</option>
      <option value="cod">Cash On Delivery</option>
      <option value="netbanking">Net Banking</option>
      <option value="cards">Debit/Credit Card</option>
    </select><br>

    <input type="hidden" name="products" value="<?= $
