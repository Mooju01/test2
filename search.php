<?php
include 'connect.php';
$sql = "select * from CURTOMER where Cus_name like '%{$_POST['Cus_name']}%'";
$query = mysql_query($sql);
?>
<div class="col-md-12">
<table class="table table-bordered">
<thead>
<tr>
<th>ลำดับ</th>
<th>รหัสสินค้า</th>
<th>ชื่อสินค้า</th>
<th>ราคาสินค้า</th>
<th>หน่วยนับ</th>
</tr>
</thead>
<tbody>
<?php $i=1; while ($result = mysql_fetch_assoc($query)) { ?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $result['Cus_name'];?></td>
<td><?php echo $result['cus_address'];?></td>
<td><?php echo number_format($result['cus_phone']);?></td>
<td><?php echo $result['City'];?></td>
</tr>
<?php $i++; } ?>
</tbody>
</table>
</div>