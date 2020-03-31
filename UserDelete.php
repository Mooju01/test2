<?php  
          $Cus_id =$_GET ['Cus_id'];
       include("connect.php");
       $sql = "DELETE FROM CUSTOMER
       WHERE Cus_id = '$Cus_id'";

        if ($mysqli->query($sql) === TRUE) {
          
            echo "<script type='text/javascript'>";
            echo "alert('ลบผู้ใช้งานเรียบร้อย');";
            echo "window.location = 'Showcar.php'; ";
            echo "</script>";
        } 
        else {
            echo "Error deleting record: " . $mysqli->error;
        }
        mysqli_close($mysqli);
    
?>