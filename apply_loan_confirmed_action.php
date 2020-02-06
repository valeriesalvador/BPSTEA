<?php
session_start();
include 'connection.php';

$employee_number=$_SESSION['user'];
$date_today=date('Y-m-d');
$status="Not Approved";
$loan_amount=$_GET['id'];
$years_to_pay=$_GET['id1'];
$status1="Pending";
$interest="";
 if ($loan_amount=10000 && $years_to_pay=1) {
                       $interest=895.83;
                      }elseif ($loan_amount=10000 && $years_to_pay=2) {
                          $interest=491.66;
                      }elseif ($loan_amount=20000 && $years_to_pay=1) {
                          $interest= 1791.66;
                      }elseif ($loan_amount=20000 && $years_to_pay=2) {
                         $interest = 983.33;
                      }

$select=mysqli_query($con, "SELECT * from loan_tb where employee_number='$employee_number' and status='$status1'");
if (! $select) {
	echo mysqli_error($con);
}else{
if (mysqli_num_rows($select)>0) {
	?>
	<script type="text/javascript">
		alert("You cannot apply for a loan yet. You have an unpaid loan.");
		self.location.replace("my_loans.php");
	</script>
	<?php
}else{
	$loan_amount1=$_GET['id'];
	$years_to_pay=$_GET['id1'];
$query=mysqli_query($con, "INSERT into loan_tb (employee_number, loan_amount, years_to_pay,status,date_applied, amortization) values('$employee_number', 
	'$loan_amount1', '$years_to_pay', '$status', '$date_today', '$interest')");

if (! $query) {
	echo mysqli_error($con);
}else{
	$loan_id=mysqli_insert_id($con);
	$q=mysqli_query($con, "SELECT * from members_tb where employee_number='$employee_number'");
	while ($r=mysqli_fetch_array($q)) {
		$present_station=$r['cur_school_name'];
		$u=mysqli_query($con, "UPDATE loan_tb set present_station='$present_station' where loan_id='$loan_id'");
	}
	?>
		<script type="text/javascript">
		alert("Loan Successfully Applied. Please visit My Loans page to view status of your loan");
		self.location.replace("my_loans.php");
	</script>
	<?php
}
}
}

?>