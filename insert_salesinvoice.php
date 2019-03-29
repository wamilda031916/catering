<?php
//insert.php;

if(isset($_POST["submit"]))
{
  $servername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "catering";
 $conn = new PDO("mysql:host:localhost;dbname=catering","root","");
 $order_id = uniqid();
$customer = $_POST['customer'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$terms = $_POST['terms'];

 $sql = "INSERT INTO sales_invoice(sales_number,customer_id,date,terms) VALUES ($order,$customer,$date1,$terms)";
 $conn->prepare($sql)->execute([':order' => '$order_id',':customer' => $customer, ':date1' => '$date', ':terms' => '$terms']);
echo $sql;

 for($count = 0; $count < count($_POST["customer"]); $count++)
 {  
  $query = "INSERT INTO sales_item 
  (sales_number,product_code, quantity,unit,unit_price) 
  VALUES (:order_id, :product_code, :quantity, :unit, :unit_price)
  ";
  $statement = $conn->prepare($query);
  $statement->execute(
   array(
    ':order_id' => $order_id,
    ':product_code'  => $_POST["product"][$count], 
    ':quantity' => $_POST["quantity"][$count], 
    ':unit'  => $_POST["unit"][$count],
    ':unit_price'  => $_POST["price"][$count],
   )
  );
 }
 $res = $statement->fetchAll();
 if(isset($res))
 {
  echo 'ok';
 }
}
?>
