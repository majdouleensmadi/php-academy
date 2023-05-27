<?php
include("dbcon.php");
if (isset($_POST['add_trainey'])) {
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $age = $_POST['age'];



    if ($fname == "" || empty($fname)) {
        header('location:index.php?message=You need to fill firstname!');
    } else {
        $query = " INSERT INTO `students` (`first-name`,`last-name`,`age`) values ('$fname', '$lname','$age')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Falied" .mysqli_error($conn));

        } else {
            header('location:index.php?insert_msg= you data has been added successfully');
        }
    }

}


?>