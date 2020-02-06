<?php
include "connection.php";
$loan_id=$_GET['id'];
$date_today=date('Y-m-d');
$status="Approved";

$query=mysqli_query($con, "UPDATE loan_tb set status='$status', date_approved='$date_today' where loan_id='$loan_id'");
if (! $query) {
	echo mysqli_error($con);
}else{
	$query1=mysqli_query($con, "SELECT * from loan_tb where loan_id='$loan_id'");
	while ($row=mysqli_fetch_array($query1)) {
		$employee_number=$row['employee_number'];
		$query2=mysqli_query($con, "SELECT * from members_tb where employee_number='$employee_number'");
		while ($row1=mysqli_fetch_array($query2)) {
			$username = "kristinesalvador425@gmail.com";
	$hash = "1e0aea5af84aaa6565c7194352d89af3817476680b9be15988850d8c581f85b8";
  // Config variables. Consult http://api.txtlocal.com/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "BPSTEA"; // This is who the message appears to be from.
  $numbers =$row1['contact_number']; // A single number or a comma-seperated list of numbers
  $message = "YOUR LOAN HAS BEEN APPROVED. REFER TO YOUR ACCOUNT FOR MORE DETAILS REGARDING THE LOAN";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.txtlocal.com/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
		}
	}
	?>
	<script type="text/javascript">
		alert("Loan Approved");
		self.location.replace("approve_approval_officer_loan.php");
	</script>
	<?php
}
?>