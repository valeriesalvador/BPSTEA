<?php
session_start();
include "connection.php";
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];
$employee_number=$_SESSION['user'];
$sql=mysqli_query($con, "SELECT * from members_tb where employee_number='$employee_number'");
while ($row=mysqli_fetch_array($sql)) {
	$old_pass1=$row['password'];
	if ($old_pass==$old_pass1) {
		$query=mysqli_query($con, "UPDATE members_tb set password='$new_pass' where employee_number='$employee_number'");
		if (! $query) {
			echo mysqli_error($con);
		}else{
			?>
			<script type="text/javascript">
				alert("Password Changed Successfully!!!");
				self.location.replace("member_officer_dashboard.php");
			</script>
			<?php
		}
	}else{
		?>
		<script type="text/javascript">
				alert("Current Password is Incorrect");
				self.location.replace("change_pass_m.php");
			</script>
		<?php
	}
}

?>