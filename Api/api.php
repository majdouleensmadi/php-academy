

<?php

// // Create connection


$conn = mysqli_connect("localhost", "root", "", "api_data");

 $responce = array();

// // Check connection
if ($conn) {
    $i=0;
$sql="SELECT * from `data`" ;
$result = mysqli_query($conn,$sql);
 if($result){
     while($row = mysqli_fetch_assoc($result)){
     header("Content-Type: JSON");
        $responce[$i]['id']=$row['id'];
         $responce[$i]['name']=$row['name'];
       $responce[$i]['age']=$row['age'];
       $responce[$i]['email']=$row['email'];
$i++;
    }echo json_encode($responce ,JSON_PRETTY_PRINT);

 }
}
 echo "Connected successfully";


?>  

