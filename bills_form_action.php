<?php
session_start();
include "connection.php";

$emp_number=$_SESSION['user'];

$payment=$_POST['payment'];
$payment_for=$_POST['payment_for'];
$date_today=date('Y-m-d');

$query=mysqli_query($con, "INSERT into bills_form_tb (payment_for, payment, cashier, date_made) values ('$payment_for', '$payment', '$emp_number', '$date_today')");

if (! $query) {
	echo mysqli_error($query);
}else{
	?>
	<script type="text/javascript">
		alert("Bills Form Successfully Saved");
		self.location.replace("bills_form.php");
	</script>
	<?php
}

?>