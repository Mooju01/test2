<?php

if(isset($_POST["Cus_name"]))
{
include 'connect.php';
 $query = "SELECT * FROM CUSTOMER WHERE Cus_name = '".$_POST["Cus_name"]."'";
 
 $result = mysqli_query($mysqli, $query);

 while($row = mysqli_fetch_array($result))
 {
    $data["Cus_id"] = $row["Cus_id"];
  $data["Cus_name"] = $row["Cus_name"];
  $data["City"] = $row["City"];
  $data["Country"] = $row["Country"];
  $data["Postalcode"] = $row["Postalcode"];
  
 }

 echo json_encode($data);
}
?>