<?php include('dbcon.php')  ?>
<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$query = "DELETE FROM `students` WHERE `students`.`id` = '$id'";
$result= mysqli_query($conn,$query);
if(!$result){
    die("  Query Falied " .mysqli_error($conn) );
}else{
    header("location:index.php?delete_msg=you have deleted the record");
}
?>