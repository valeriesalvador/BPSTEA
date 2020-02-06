<?php
include "connection.php";
$date=date('Y-m-d');
$member_id=$_POST['member_id'];
$amount=$_POST['amount'];
$payment_for=$_POST['payment_for'];

$query=mysqli_query($con, "INSERT into annual_payment_tb(amount, year, employee_number, payment_for) values ('$amount', '$date', '$member_id', '$payment_for')");
if (! $query) {
	echo mysqli_error($con);
}else{
	?>
	<script type="text/javascript">
		alert("Payment Saved Successfully!!!");
		self.location.replace("annual_dues_payment_form.php");
	</script>
	<?php
}
?>