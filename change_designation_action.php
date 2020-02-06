<?php
include "connection.php";
$status=$_POST['designation'];
$employee_number=$_GET['id'];
$cashier="Cashier";
$bookkepper="Book Keeper";
$approving_officer="Approving Officer";

if ($status==$cashier) {
	$query1=mysqli_query($con, "SELECT * from members_tb where status='$cashier'");
if (mysqli_num_rows($query1)>0) {
	echo mysqli_num_rows($query1);
	?>
	<script type="text/javascript">
		alert("Sorry. Only one person can be assigned to the designation <?php echo $status ?>");
		self.location.replace("change_designation.php?id=<?php echo $employee_number ?>");
	</script>
	<?php
}else{
$query=mysqli_query($con, "UPDATE members_tb set status='$status' where employee_number='$employee_number'");
if (! $query) {
	echo mysqli_error($con);
}else{
	header("LOCATION: view_more_details.php?id=" . $employee_number);
}

}
}elseif ($status==$bookkepper) {
	$query1=mysqli_query($con, "SELECT * from members_tb where status='$bookkepper'");
if (mysqli_num_rows($query1)>0) {
	echo mysqli_num_rows($query1);
	?>
	<script type="text/javascript">
		alert("Sorry. Only one person can be assigned to the designation <?php echo $status ?>");
		self.location.replace("change_designation.php?id=<?php echo $employee_number ?>");
	</script>
	<?php
}else{
$query=mysqli_query($con, "UPDATE members_tb set status='$status' where employee_number='$employee_number'");
if (! $query) {
	echo mysqli_error($con);
}else{
	header("LOCATION: view_more_details.php?id=" . $employee_number);
}

}
}elseif ($status==$approving_officer) {
	$query1=mysqli_query($con, "SELECT * from members_tb where status='$approving_officer'");
if (mysqli_num_rows($query1)>0) {
	echo mysqli_num_rows($query1);
	?>
	<script type="text/javascript">
		alert("Sorry. Only one person can be assigned to the designation <?php echo $status ?>");
		self.location.replace("change_designation.php?id=<?php echo $employee_number ?>");
	</script>
	<?php
}else{
$query=mysqli_query($con, "UPDATE members_tb set status='$status' where employee_number='$employee_number'");
if (! $query) {
	echo mysqli_error($con);
}else{
	header("LOCATION: view_more_details.php?id=" . $employee_number);
}

}
}else{
	$query=mysqli_query($con, "UPDATE members_tb set status='$status' where employee_number='$employee_number'");
if (! $query) {
	echo mysqli_error($con);
}else{
	header("LOCATION: view_more_details.php?id=" . $employee_number);
}
}


?>