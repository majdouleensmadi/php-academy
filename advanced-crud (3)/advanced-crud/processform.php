<?php

$msg = "";
$css_class = "";

$con = mysqli_connect('localhost', 'root', '', 'employee');

if (isset($_POST['submit'])) {
    echo "<pre>", print_r($_POST), "</pre>";
    echo "<pre>", print_r($_FILES['img']['name']), "</pre>";

    $imagename = time() . '_' . $_FILES['img']['name'];

    $target = 'images/' . $imagename;

    if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        $msg = "image uploaded and saved to database";
        $css_class = "alert-success";
    } else {
        $msg = "Database Error: failed to save user";
        $css_class = "alert-danger";
    }
} else {
    $msg = " failed to upload";
    $css_class = "alert-danger";
}

?>
