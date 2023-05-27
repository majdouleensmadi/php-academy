<?php
include("config.php");

$name = $_POST['name'];

$sql = "SELECT * FROM employee WHERE name LIKE '$name%' OR id LIKE '$name%'";
$query = mysqli_query($conn, $sql);
$data = '';
if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data .= '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row["name"] . '</td>
                    <td>' . $row["address"] . '</td>
                    <td>' . $row["salary"] . '</td>
                    <td>' . $row["img"] . '</td>
                    
                    <td><img src="' . $row["img"] . '" width="90" height="90" alt=""></td>
                      <td>
                <a href="edit.php?id= '.$row["id"].'" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
               
                <a href="delete.php?id='.$row["id"].'" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                <a href="operation.php?id='.$row["id"].'" class="btn btn-dark mb-3">Operation</a>
              </td>

                </tr>';
    }
    echo $data;
} else {
    echo '<tr><td colspan="6">No Record Found</td></tr>';
}
?>