<?php
include "connection.php";
$old_annual_due=$_POST['old_annual_due'];
$new_annual_due=$_POST['new_annual_due'];

   $query=mysqli_query($con, "SELECT * from annual_dues_tb");
                  if (mysqli_num_rows($query)>0) {
                  	$update=mysqli_query($con, "UPDATE annual_dues_tb set old_annual_due='$old_annual_due', new_annual_due='$new_annual_due'");
                  	if (! $update) {
                  		echo mysqli_error($con);
                  	}else{
                  		?>
                  		<script type="text/javascript">
                  			alert("Anuual Dues Amount Updated");
                  			self.location.replace("annual_dues_amount_maintenance.php");
                  		</script>
                  		<?php
                  	}
                  	}else{
                  		$add=mysqli_query($con, "INSERT into annual_dues_tb(old_annual_due, new_annual_due) values('$old_annual_due', '$new_annual_due')");
                  		if (! $add) {
                  			echo mysqli_error($con);
                  		}else{
                  			?>
                  			<script type="text/javascript">
                  			alert("Anuual Dues Amount Updated");
                  			self.location.replace("annual_dues_amount_maintenance.php");
                  		</script>
                  			<?php
                  		}
                  	}
?>