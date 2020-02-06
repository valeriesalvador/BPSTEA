<?php
include "connection.php";
$id=$_GET['id'];



$status="Member";
$query=mysqli_query($con, "UPDATE members_tb set status='$status' where employee_number='$id'");
if (! $query) {
	echo mysqli_error($con);
}else{
	$query1=mysqli_query($con, "SELECT * from members_tb where employee_number='$id'");
while ($row1=mysqli_fetch_array($query1)) {
    $message="YOUR ACCOUNT HAS BEEN NOW ACTIVATED. VISIT OUR WEBSITE www.bpstea.esy.es FOR MORE INFO.";
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
	header("LOCATION: approve_reg.php");
}
?>