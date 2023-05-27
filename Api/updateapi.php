<?php

$conn = mysqli_connect("localhost", "root", "", "api_data");

// Get the user data from the URL parameters
$id = $_GET['id'];
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];


// Insert the data into the database
$sql = "UPDATE data
SET id='$id', name='$name', age='$age',email='$email'
WHERE id='$id'";
$result = mysqli_query($conn, $sql);

// Check if the data was created
if ($result && mysqli_affected_rows($conn) > 0) {
  // Return a success message and status code
  header("HTTP/1.1 201 Created");
  echo "Data created successfully.";
} else {
  // Return an error message and status code
  header("HTTP/1.1 400 Bad Request");
  echo "Error creating data.";
}

mysqli_close($conn);

?>
