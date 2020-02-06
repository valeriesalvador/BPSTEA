<?php
include "connection.php";
$full_name=$_POST['full_name'];
$occupation=$_POST['occupation'];
$age=$_POST['age'];
$address=$_POST['address'];
$contact_number=$_POST['contact_number'];
$relationship=$_POST['relationship'];
$employee_number=$_POST['employee_number'];

$query=mysqli_query($con, "INSERT into beneficiary_tb(full_name, address, occupation, contact_number, relationship, employee_number) values ('$full_name', '$address', '$occupation', '$contact_number', '$relationship', '$employee_number')");
if (! $query) {
	echo mysqli_error($con);
}else{
	?>
<script type="text/javascript">
		self.location.replace("identify_member.php");
	</script>
	<?php
}
?>