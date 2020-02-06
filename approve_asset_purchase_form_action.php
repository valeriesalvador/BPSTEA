<?php
include "connection.php";
$id=$_GET['id'];
$status="Approved";
$query=mysqli_query($con, "UPDATE asset_purchase_form set status='$status' where asset_form_id='$id'");
if (! $query) {
	echo mysqli_error($con);
}else{
	?>
	<script type="text/javascript">
		alert("Asset Purchase Approved Successfully!!!");
		self.location.replace("approve_asset_purchase_form.php");
	</script>
	<?php
}
?>