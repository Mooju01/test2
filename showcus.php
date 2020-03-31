<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
--> 
<meta charset="UTF-8">
  
<html>
	<head>
		<title>ระบบการจัดการสำหรับอู่ซ่อมรถ </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
       <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body class="is-preload">
   
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
                            <?php include 'header.php' ;
                            ?>
                            <!--End  Header -->
                                                      
                        <!-- Banner -->
                     							
							<div class="content">		
                                
                                <section id="banner">	
                                <div class="w3-card-4" style="width:100%;"  >
                                
                                <header class="w3-container w3-orange" >
                               <strong> <h2 align='center' > ข้อมูลลูกค้า </h2> </strong>
                                </header>

                                <div class="w3-container">
 <!-- ค้าหาข้อมูล -->
    <form class="form-inline" name="searchform" id="searchform">
 <div class="form-group">
 
 <input type="text" name="itemname" id="itemname" class="form-control" placeholder="คำค้นหา" autocomplete="off" style="width:50%;" >
 </div>
 <button type="button" class="btn btn-primary" id="btnSearch">
 <span class="glyphicon glyphicon-search"></span>
 ค้นหา
 </button>
 </form>
  <!-- ค้าหาข้อมูล -->
   
      <?php
      
        //1. เชื่อมต่อ database: 
        include 'connect.php' ; 
        //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
        //2. query ข้อมูลจากตาราง tb_member: 
        $query = "SELECT * FROM CUSTOMER ORDER BY Cus_id asc"; 
        //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
        $result = mysqli_query($mysqli, $query); 
        //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

        echo "<table border='4' align='center' width='10000'>";
        //หัวข้อตาราง
        echo "<tr align='center' bgcolor='#CCCCCC'>
        <strong> <td>รหัส</td>
            <td>ชื่อลูกค้า</td>
            <td>เพศ</td>
            <td>เบอร์โทร</td>
            <td>ที่อยู่</td>
            <td>แก้ไข</td>
            <td>ลบ</td>
            </tr>";
        while($row = mysqli_fetch_array($result)) { 
        echo "<tr align='center' >";
        echo "<td>" .$row["Cus_id"] .  "</td> "; 
        echo "<td>" .$row["Cus_name"] .  "</td> ";  
        echo "<td>" .$row["cus_sex"] .  "</td> ";
        echo "<td>" .$row["cus_phone"] .  "</td> ";
        echo "<td>" .$row["cus_address"] .  "</td> ";
      
        //แก้ไขข้อมูล
        echo "<td><a href='UserUpdateForm.php?Cus_id=".$row["Cus_id"]."'>edit</a></td> ";
              
        //ลบข้อมูล
        echo "<td><a href='UserDelete.php?Cus_id=".$row["Cus_id"]."'>del</a></td> ";
        echo "</tr>";
        }
        echo "</table>";
        //5. close connection
        mysqli_close($mysqli);
        ?>

      </div>

                                  
                            </div>
                            </div>
                        </section>
                        
						</div>
					</div>

							
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
          

							<!-- Menu -->
                            <?php include 'menu.php' ;
                            ?>
                            <!-- End Menu -->

							

						</div>
					</div>

			</div>

		<!-- Scripts -->
        <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
 <script type="text/javascript">
 $(function () {
 $("#btnSearch").click(function () {
 $.ajax({
 url: "search.php",
 type: "post",
 data: {itemname: $("#itemname").val()},
 beforeSend: function () {
 $(".loading").show();
 },
 complete: function () {
 $(".loading").hide();
 },
 success: function (data) {
 $("#list-data").html(data);
 }
 });
 });
 $("#searchform").on("keyup keypress",function(e){
 var code = e.keycode || e.which;
 if(code==13){
 $("#btnSearch").click();
 return false;
 }
 });
 });
 </script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>