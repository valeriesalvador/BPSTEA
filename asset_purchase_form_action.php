<?php
session_start();
include "connection.php";

$emp_number=$_SESSION['user'];
$payment_for=$_POST['payment_for'];
$name_of_object=$_POST['name_of_object'];
$years_to_pay=$_POST['years_to_pay'];
$monthly_payment=$_POST['monthly_payment'];
$payment_type=$_POST['payment_type'];
$cash_payment=$_POST['cash_payment'];
$quantity=$_POST['quantity'];
$date_purchased=$_POST['purchased_date'];
$purchased_from=$_POST['purchased_from'];
$unit_price=$_POST['unit_price'];
$status="Not Approved";

$date_today=date('Y-m-d');

$query=mysqli_query($con, "INSERT into asset_purchase_form (payment_purpose, name_of_thing, years_to_pay, monthly_payment, cashier, date_made,type_of_payment, quantity, unit_price, purchased_from, date_purchased, cash_payment,status) values ('$payment_for', '$name_of_object', '$years_to_pay', '$monthly_payment','$emp_number','$date_today', '$payment_type', '$quantity', '$unit_price', '$purchased_from', '$date_purchased', $cash_payment, '$status')");

if (! $query) {
	echo mysqli_error($query);
}else{
	?>
	<script type="text/javascript">
		alert("Asset Form Successfully Saved");
		self.location.replace("asset_purchase_form.php");
	</script>
	<?php
}

?>