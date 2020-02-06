<?php
session_start();
include "connection.php";
$full_name=$_POST['full_name'];
$occupation=$_POST['occupation'];
$age=$_POST['age'];
$address=$_POST['address'];
$contact_number=$_POST['contact_number'];
$relationship=$_POST['relationship'];
$employee_number=$_SESSION['user'];

$query1=mysqli_query($con, "SELECT * from beneficiary_tb where employee_number='$employee_number'");
if (mysqli_num_rows($query1)>=2) {
	?>
	<script type="text/javascript">
		alert("You cannot have more than two beneficiaries");
		self.location.replace("member_dashboard.php");
	</script>
	<?php
}else{

$query=mysqli_query($con, "INSERT into beneficiary_tb(full_name, address, occupation, contact_number, relationship, employee_number) values ('$full_name', '$address', '$occupation', '$contact_number', '$relationship', '$employee_number')");
if (! $query) {
	echo mysqli_error($con);
}else{
	?>
<script type="text/javascript">
		self.location.replace("member_dashboard.php");
	</script>
	<?php
}
}
?>