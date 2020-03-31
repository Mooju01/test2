<?php 

include "connect.php";
$query = "SELECT * FROM CUSTOMER ORDER BY Cus_name ";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>How to return JSON Data from PHP Script using Ajax Jquery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
     <h3 align="center">Search Customer Data</h3><br />   
   <div class="row">
    <div class="col-md-4">
     <select name="customer_list" id="customer_list" class="form-control">
      <option value="">Select Customer</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["Cus_name"].'">'.$row["Cus_id"].'</option>';
      }
      ?>
     </select>
    </div>
    <div class="col-md-4">
     <button type="button" name="search" id="search" class="btn btn-info">Search</button>
    </div>
   </div>
   <br />
   <div class="table-responsive" id="customer_details" style="display:none">
   <table class="table table-bordered">
   <tr>
     <td width="10%" align="right"><b>Cus_id</b></td>
     <td width="90%"><span id="customer_Cus_id"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>Name</b></td>
     <td width="90%"><span id="customer_Cus_name"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>City</b></td>
     <td width="90%"><span id="customer_City"></span></td>
    </tr>

    <tr>
     <td width="10%" align="right"><b>Country</b></td>
     <td width="90%"><span id="customer_Country"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>Postalcode</b></td>
     <td width="90%"><span id="customer_Postalcode"></span></td>
    </tr>
   
   </table>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#customer_list').val();
  if(id != '')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{Cus_name:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#customer_details').css("display", "block");
     $('#customer_Cus_id').text(data.Cus_id);
     $('#customer_Cus_name').text(data.Cus_name);
     $('#customer_City').text(data.City);
     $('#customer_Country').text(data.Country);
     $('#customer_Postalcode').text(data.Postalcode);
     
    }
   })
  }
  else
  {
   alert("Please Select Customer");
   $('#Customer_details').css("display", "none");
  }
 });
});
</script>