<?php
$Cus_id = $_REQUEST['Cus_id'];
$Cus_name =$_POST['Cus_name'];
$cus_sex =$_POST['cus_sex'];
$cus_phone =$_POST['cus_phone'];
$cus_address =$_POST['cus_address'];

echo "Cus_id = $Cus_id <br>";
echo "Cus_name = $Cus_name<br>";
echo "cus_sex = $cus_sex <br>";
echo "cus_phone = $cus_phone<br>";
echo "cus_address = $cus_address <br>";

include("connect.php");

$sql=" UPDATE CUSTOMER set Cus_name= '$Cus_name' , cus_sex = '$cus_sex' ,cus_phone = '$cus_phone',cus_address='$cus_address'
where Cus_id='$Cus_id' "; 
//mysql_query($sql,$conn) or die("ไม่สามารถเชื่อมฐานข้อมูล".mysql_error());
$dbquery=  mysqli_query($mysqli, $sql) ;
echo "แก้ไขข้อมูลสำเร็จ<br>";
echo "[<a href='showcar.php'>กลับหน้าแรก</a>]";

?> 

