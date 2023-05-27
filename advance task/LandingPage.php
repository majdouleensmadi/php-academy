<?php
include "config.php";
$sql = "SELECT * FROM `employee`";
            $result = mysqli_query($conn, $sql);
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

  <title>PHP CRUD Application</title>

</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #b359b0;">
    PHP Complete CRUD Application
  </nav>

    <div class="container">

 
    <?php
    if (isset($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        ' . $msg . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    
<div class="row mb-3">
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Number of Employees</h5>
        <p class="card-text"><?php echo mysqli_num_rows($result); ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Salary</h5>
        <?php
          $sql = "SELECT SUM(salary) as total_salary FROM employee";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $total_salary = $row['total_salary'];
        ?>
        <p class="card-text"><?php echo $total_salary; ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Highest Salary</h5>
        <?php
          $sql = "SELECT MAX(salary) as max_salary FROM employee";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $max_salary = $row['max_salary'];
        ?>
        <p class="card-text"><?php echo $max_salary; ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lowest Salary</h5>
        <?php
          $sql = "SELECT MIN(salary) as min_salary FROM employee";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $min_salary = $row['min_salary'];
        ?>
        <p class="card-text"><?php echo $min_salary; ?></p>
      </div>
    </div>
  </div>
</div>

<!-- search box -->
<h6 class="mt-5"><b>Search Name Or ID</b></h6>
    <div class="input-group mb-4 mt-3">
        <div class="form-outline">
            <input type="text" id="getName"/>
        </div>
    </div>


    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>

        </tr>
        </thead>
        <tbody>
            <?php
            
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["img"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["address"] ?></td>
                <td><?php echo $row["salary"] ?></td>
                <?php
                echo "<td><img src='" . $row['img'] . "' width='50'></td>";
                ?>
                <td>
                <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                <a href="operation.php?id=<?php echo $row["id"] ?>" class="btn btn-dark mb-3">Operation</a>
                <a href="new_salary.php?id=<?php echo $row["id"] ?>" class="btn btn-dark mb-3">off-days</a>

                </td>
            </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
 
 
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js%22%3E%3E"></script>

  <script>
  $(document).ready(function(){
    $('#getName').on("keyup", function(){
      var getName = $(this).val();
      $.ajax({
        method:'POST',
        url:'search.php',
        data:{name:getName},
        success:function(response)
        {
              $("#showdata").html(response);
        } 
      });
    });
  });
</script>

</body>
</html>