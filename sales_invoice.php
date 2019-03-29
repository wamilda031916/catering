<?php
   include("connect.php");
   session_start();
   ?>
   <?php

$servername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "catering";
 $conn = new PDO("mysql: host=localhost;dbname=catering","root","");
function fill_unit_select_box($conn)
{ 
 $output = '';
 $query = "SELECT * FROM customer ORDER BY customer_id ASC";
 $statement = $conn->prepare($query);
 $statement->execute();
 $res = $statement->fetchAll(PDO::FETCH_ASSOC);
 foreach($res as $row)
 {
  $output .= '<option value="'.$row['customer_id'].'">'.$row['firstname'].' '.$row['lastname'].'</option>';
 }
 return $output;
 $statement->close();
}

function fill_unit_select_box1($conn)
{ 
 $output = '';
 $query = "SELECT * FROM product ORDER BY product_code ASC";
 $statement = $conn->prepare($query);
 $statement->execute();
 $res = $statement->fetchAll(PDO::FETCH_ASSOC);
 foreach($res as $row)
 {
  $output .= '<option value="'.$row['product_code'].'">'.$row['description'].'</option>';
 }
 return $output;
 $statement->close();
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Sales Invoice</title>
<!--   <link rel="stylesheet" href="css/bootstrap2.min.css" />
  <script src="jquery/jquery2.min.js"></script>
  <script src="js/bootstrap3.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <style>
body{
  background-image: url(images/table2.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  }
</style>
 <body>
  <br />
  <div class="container">
   <h1 align="center">Sales Invoice</h1>
   <br />
   <form method="post" id="insert_form" action="insert_salesinvoice.php">
    <div class="table-repsonsive">
     <span id="error"></span>
      <div class="col-sm-3">
     <input type="date" name="date" class="form-control"/></br>
      <input type="type" name="terms" class="form-control"/></br>
   </div>
     <table class="table table-bordered" id="item_table">
      <thead>
      <tr>
        <th><center>Select Customer</center></th>
        <th><center>Select Product</center></th>
       <th><center>Enter Quantity</center></th>
       <th><center>Unit</center></th>
       <th><center>Unit Price</center></th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
                <?php 
                  include "db.php";
                  $sql = "SELECT * FROM customer";
                  $res = $conn->prepare($sql);
                  $res->execute();
                ?>
                <select name="customer" required class="form-control customer" >
                  <option value=""></option>
                <?php while ($line = $res->fetch()): ?>
                  <option value="<?php echo $line['customer_id']; ?>"><?php echo $line['firstname'].' '.$line['lastname']; ?></option>
                 <?php endwhile; ?>
                </select>
              </td>

             <td> 
                <?php 
                  $sql1 = "SELECT * FROM product";
                  $res1 = $conn->prepare($sql1);
                  $res1->execute();

                ?>
                <select name="product[]" required class="form-control product" >
                  <option value=""></option>
                <?php while ($line1 = $res1->fetch()):?>
                  <option value="<?php echo htmlspecialchars($line1['product_code']) ?>"><?php echo htmlspecialchars($line1['description']); ?></option>
                 <?php endwhile; ?>
                </select>
              </td>
              <td><input type="text" class="form-control" name="quantity[]"></td>
              <td><input type="text" class="form-control" name="unit[]"></td>
              <td><input type="text" class="form-control" name="price[]"></td>
              
      </tr>
    </tbody>
     </table>

    <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
          <button class="btn btn-success" href="view_products.php">Back</button>
     </div>
   </form>
  </div>
  
  
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><select name="customer" class="form-control customer"><option value=""></option><?php echo fill_unit_select_box($conn);?></select></td>';
  html += '<td><select name="product[]" class="form-control product"><option value=""><?php echo fill_unit_select_box1($conn);?></option></select></td>';
  html += '<td><input type="text" name="quantity[]" class="form-control quantity" /></td>';
  html += '<td><input type="text" name="unit[]" class="form-control unit" /></td>';
  html += '<td><input type="text" name="price[]" class="form-control unit_price" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.customer').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.product').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter  Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select unit at "+count+" Row</p>";
    return true;
   }
   $('.quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select unit at "+count+" Row</p>";
    return true;
   }
    $('.unit_price').each(function(){
    var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select unit_price at "+count+" Row</p>";
    return false;
   }
   count = count >1;
  });
  $('.date').each(function(){
    var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select date at "+count+" Row</p>";
    return false;
   }
   count = count >1;
  });
  $('.terms').each(function(){
    var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select terms at "+count+" Row</p>";
    return false;
   }
   count = count >1;
  });
    alert(form_data);
  var form_data = $(this).serialize();
  if(error == '')

  {
   $.ajax({
    url:"insert_salesinvoice.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
});
</script>