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
			$message="YOUR LOAN AMOUNT OF ". $row['loan_amount'].". HAS BEEN APPROVED REFER TO YOUR ACCOUNT FOR MORE DETAILS REGARDING THE LOAN";
		  $number=$row1['contact_number'];
        $url = 'https://www.itexmo.com/php_api/api.php';
        $apicode="TR-ROLDA307064_MV69X";
        $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
        $param = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);
var_dump($url);
		}
	}
	?>
	<script type="text/javascript">
		alert("Loan Approved");
		self.location.replace("applied_loans.php");
	</script>
	<?php
}
?>