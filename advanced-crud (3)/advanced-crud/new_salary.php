<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT  `salary`, `new_salary`, `valid_off_days`, `off_days` FROM `employee` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$salary = $row['salary'];
$off_days = $row['off_days'];
$new_salary = $row['new_salary'];
$valid_off_days = $row['valid_off_days'];
$day ="";
$discount="";

if (isset($_POST['off_days'])&& !empty($_POST['off_days'])) {
    // Check if the off_days is set
    $off_days = $_POST['off_days'];
    if ($off_days > 14) {
        
        $day = $off_days - 14;
        $discount = $day * ($salary / 30);
        $new_salary = $salary - $discount;
        $valid_off_days = 0;

    } else {
        // $off_day = $_POST['off_day'];
        $valid_off_days = 14 - $off_days;
        $new_salary = $salary;
        
        
    }

    $sql = "UPDATE `employee` SET `new_salary` ='$new_salary', `valid_off_days`='$valid_off_days',`off_days`='$off_days' WHERE  id = $id";
    mysqli_query($conn, $sql);

    // Re-fetch the updated row
    $result = mysqli_query($conn, "SELECT `salary`, `new_salary` FROM `employee` WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    $salary = $row['salary'];
    $new_salary = $row['new_salary']; // Update the value of $new_salary
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Salary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
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
    <label>Number of off days</label>
    <input type="number" class="form-control" name="off_days"  value="<?php echo $off_days ?>"><br>

    <label>Salary:</label>
    <input type="number" id="salary" class="form-control" name="salary" value="<?php echo $salary ?>" ><br><br>

    <label>New Salary:</label>
    <input type="number" id="new_salary" class="form-control" name="new_salary" value="<?php echo $new_salary ?>"><br><br>

    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php
