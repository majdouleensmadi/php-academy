<?php
include "config.php";

if (isset($_POST["submit"])) {
    $img = $_POST['img'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    

   $sql = "INSERT INTO `employee`(`id`, `img`, `name`, `address`, `salary`) VALUES ('','$img','$name','$address','$salary')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: landing.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> Admin Dashboard</title>
    <style>
        .circle-image {
            border-radius: 50%;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #b359b0;">
        CRUD 
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                
                <?php if (!empty($msg)): ?>
                    <div class="alert <?php echo $css_class; ?>">
                        <?php echo $msg; ?>
                    </div>
                <?php endif; ?>

                <div class="form-label">
                    <img src="images/profile.jpg" onclick="triggerClick()" id="image" class="circle-image" height="120"
                        width="120">
                    <label>Image</label> <br> <br>
                    <input type="file" class="form-control" onchange="displayImage(this)" name="img">
                </div>

                <div class="col">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" >
                </div>

            </div>

            <div class="mb-3">
                <label class="form-label">Address:</label>
                <input type="text" class="form-control" name="address" >
            </div>

            <div class="mb-3">
                <label class="form-label">Salary:</label>
                <input type="number" class="form-control" name="salary">
            </div>


            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="landing.php" class="btn btn-danger">Cancel</a>
            </div>
            </form>
            </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        function displayImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('image').src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function triggerClick() {
            document.querySelector('input[name="img"]').click();
        }
    </script>
</body>

</html>