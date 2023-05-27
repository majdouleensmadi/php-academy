<?php
include("connection.php");
// Get the discount code from the form
$discount_code = $_POST['discount'];

// Query the database for the discount code
$query = "SELECT * FROM discount_codes WHERE code = '$discount_code'";
$result = mysqli_query($conn, $query);

// If the discount code does not exist, return an error message
if (mysqli_num_rows($result) == 0) {
  echo "Invalid discount code.";
  exit();
}

// Get the discount code details from the database
$discount = mysqli_fetch_assoc($result);
$start_date = strtotime($discount['start_date']);
$end_date = strtotime($discount['end_date']);
$usage_limit = $discount['usage_limit'];

// Check if the discount code is valid (i.e., within the start and end dates)
if (time() < $start_date || time() > $end_date) {
  echo "Discount code is not valid.";
  exit();
}

// Check if the discount code has exceeded its usage limit
$query = "SELECT COUNT(*) FROM orders WHERE discount = '$discount_code'";
$result = mysqli_query($conn, $query);
$count = mysqli_fetch_row($result)[0];
if ($count >= $usage_limit) {
  echo "Discount code has been used too many times.";
  exit();
}

// Calculate the discount amount and apply it to the order total
$discount_amount = $discount['discount'];
$total_amount = $order_amount - $discount_amount;

// Update the order in the database with the discount amount and the discount code
$query = "UPDATE orders SET discount = '$discount_code', discount_amount = '$discount_amount', total_amount = '$total_amount' WHERE id = '$order_id'";
mysqli_query($conn, $query);
?>