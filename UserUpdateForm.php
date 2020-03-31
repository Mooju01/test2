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

    <?  $Cus_id = $_GET['Cus_id'];
		include("connect.php"); 
		$sql="select * from CUSTOMER where Cus_id='$Cus_id'";
		$dbquery= mysqli_query($mysqli, $sql); 
		//$num_rows = mysql_num_rows($dbquery);
		 $result= mysqli_fetch_array($dbquery); 
	 ?>
   
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
                               <strong> <h2 align='center' > แก้ไขข้อมูลลูกค้า </h2> </strong>
                                </header>
                 <div class="w3-container">
   <form  name="form1" method="post" action="edit_new_data.php">            
        <table border='1' align='center' width='300'>
    <tr>
      <td>&nbsp;</td>
      <td ><div align="right"  >รหัสลูกค้า : </div></td>
      <td><input  type="text" value="<? echo $result[Cus_id];?>" disabled>
      <input  type="hidden" name="Cus_id"  id="Cus_id"   value="<? echo $result[Cus_id];?>"></td>
          </tr>
          
		   <tr>
      <td>&nbsp;</td>
      <td ><div align="right"> ชื่อลูกค้า : </div></td>
      <td><input name="Cus_name" type="text" id="Cus_name"  value="<? echo $result[Cus_name]; ?>"></td>
    </tr>
    
		  <tr>
      <td>&nbsp;</td>
      <td ><div align="right"  >เพศ : </div></td>
      <td><input name="cus_sex" type="text" id="Cus_sex"  value="<? echo $result[cus_sex]; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td ><div align="right"  >เบอร์โทร : </div></td>
      <td><input name="cus_phone" type="text" id="cus_phone"  value="<? echo $result[cus_phone]; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td ><div align="right"  >ที่อยู่ : </div></td>
      <td><input name="cus_address" type="text" id="cus_address"  value="<? echo $result[cus_address]; ?>"></td>
    </tr>

    <tr>
    <td>&nbsp;</td>
    <td ><div align="right"  ></div></td>
    <td><input type="submit" name="Submit" value="แก้ไขข้อมูล">
    <input type="reset" name="Submit2" value="Reset"></td>
  </tr>
           </table>
           </form>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>