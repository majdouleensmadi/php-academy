<?php include('header.php'); ?>
<?php include('dbcon.php') ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

$query = " select * from `students` WHERE `id` = '$id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("query falied" . mysqli_connect_error());
} else {
    $row = mysqli_fetch_assoc($result);

}
}
?>


<?php

if (isset($_POST['Update_trainey'])) {
if(isset($_GET['id_new'])){
    $idnew=$_GET['id_new'];
}



    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $age = $_POST['age'];

    $query = " UPDATE `students` SET `first-name` = '$fname', `last-name` = '$lname', `age` = '$age' WHERE `id` = $idnew;";
    $result = mysqli_query($conn, $query);
        if (!$result) {
            die("query falied" . mysqli_error($conn));
        } else {
         header("location:index.php?update_msg=you have succssfully update data");

    }


}


?>







<form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="first-name" class="form-control" value=" <?php echo $row['first-name'] ?>">
    </div>
    <div class="form-group">
        <label for="f_name">Last Name</label>
        <input type="text" name="last-name" class="form-control" value="<?php echo $row['last-name'] ?>">
    </div>
    <div class="form-group">
        <label for="f_name">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>">
    </div>
    <input type="submit" class="btn btn-success" name="Update_trainey" value="Update">
</form>




<?php include('footer.php'); ?>