<!--  <?php 

include "connect.php";
$query = "SELECT * FROM customer right JOIN transection On customer.Cus_id=transection.Cus_id
WHERE YEAR(transection.Tran_date)='2018' AND Total_price>='200";

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
       echo '<option value="'.$row["customer.Cus_id"].'">'.$row["transection.Cus_id"].'</option>';
      
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
     <td width="10%" align="right"><b>Date</b></td>
     <td width="90%"><span id="customer_Cus_name"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>price</b></td>
     <td width="90%"><span id="customer_City"></span></td>
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
    url:"ans.php",
    method:"POST",
    data:{Tran_date:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#customer_details').css("display", "block");
     $('#customer_Cus_id').text(data.Customer.Cus_id);
     $('#customer_Cus_name').text(data.transection.Tran_date);
     $('#customer_City').text(data.transection.Total_price);
  
     
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
</script> -->

