<?php
include "connection.php";
$s="Approved";
$check=mysqli_query($con, "SELECT * from loan_tb where status='$s'");
while ($row=mysqli_fetch_array($check)) {
  $years_to_pay=$row['years_to_pay'];
  $loan_id=$row['loan_id'];
  $check1=mysqli_query($con, "SELECT * from loan_payment_tb where loan_id='$loan_id'");
  echo mysqli_num_rows($check1);
  if ($years_to_pay=1) {
    $result=mysqli_num_rows($check1);
    $twelve=12;
    $twofour=24;
    if ($result==$twelve) {
      $status="Completed";
      $update=mysqli_query($con, "UPDATE loan_tb set status='$status' where loan_id='$loan_id'");
    }
  }elseif ($years_to_pay=2) {
    if ($result=="$twofour") {
       $status="Completed";
      $update=mysqli_query($con, "UPDATE loan_tb set status='$status' where loan_id='$loan_id'");
    }
  }
}
?>