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

$add1=mysqli_query($con, "INSERT into co_maker_tb (full_name, age, occupation, contact_number, relationship, address, employee_number) VALUES ('$full_name', '$age', '$occupation', '$contact_number', '$relationship', '$address', '$employee_number')");
		if (! $add1) {
			echo mysqli_error($con);
		}else{
			?>
				<script type="text/javascript">
		self.location.replace("cashier_dashboard.php");
	</script>
				<?php
			}
			?>
?>