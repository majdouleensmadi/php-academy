<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM employee WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$salary = $row['salary'];

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Check if the amount and select fields are set
    if (isset($_POST['amount']) && isset($_POST['select'])) {
        $amount = $_POST['amount'];
        $select = $_POST['select'];

        // Multiply the amount based on the select option
        if ($amount !== '') {
            if ($select == 'increase') {
                $amount *= 1;
            } else {
                $amount *= -1;
            }
        }

        // Check if the checkbox is selected
        if (isset($_POST['all'])) {
            // Update salary for all employee
            $sql = "UPDATE employee SET salary = salary + $amount";
        } else {
            // Update salary for a specific employee
            $sql = "UPDATE employee SET salary = salary + $amount WHERE id = $id";
        }

        // Execute the update query
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header('location:LandingPage.php');
            exit;
        } else {
            die(mysqli_error($conn));
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <style>
        form {
            margin-left: 40px;
        }
        .form-control {
            width: 20%;
        }
    </style>
</head>

<body>

<form method="post" class="my-5">
    <label>Amount</label>
    <input type="number" class="form-control" name="amount" autocomplete="off"><br>

    <label for="select">Select:</label>
    <select id="select" name="select">
        <option name="increase" value="increase">Increase</option>
        <option name="decrease" value="decrease">Decrease</option>
    </select>

    <br><br><br>

    <label>Employee ID:</label>
    <input type="number" id="idF" class="form-control" name="id" autocomplete="off"><br><br>

    <input type="checkbox" id="all" name="all" value="all" onchange="toggleIDField()">
    <label for="all">For All</label>
    <br>

    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>

    <script>
        function toggleIDField() {
            var checkbox = document.getElementById("all");
            var idField = document.getElementById("idF");

            if (checkbox.checked) {
                idField.style.display = "none"; // Hide the ID field
            } else {
                idField.style.display = "block"; // Show the ID field
            }
        }
    </script>
</body>

</html>