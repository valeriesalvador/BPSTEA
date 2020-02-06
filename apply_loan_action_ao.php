<?php
$interest="";
$loan_amount=$_POST['loan_amount'];
$years_to_pay=$_POST['years_to_pay'];
if ($loan_amount=="10000" && $years_to_pay=="1") {
                       $interest=895.83;
                      }elseif ($loan_amount=="10000" && $years_to_pay=="2") {
                          $interest=491.66;
                      }elseif ($loan_amount=="20000" && $years_to_pay=="1") {
                          $interest= 1791.66;
                      }elseif ($loan_amount=="20000" && $years_to_pay=="2") {
                         $interest = 983.33;
                      }
?>
<script>
    var r = confirm("Continue Applying Loan? Loan Amount:<?php echo $_POST['loan_amount'] ?> Interest:<?php echo $interest ?>");
    if (r == true) {
       self.location.replace("apply_loan_confirmed_action_ao.php?id=<?php echo $_POST['loan_amount'] ?>&id1=<?php echo $_POST['years_to_pay'] ?>");
    } else {
        self.location.replace("apply_loan_ao.php");
    }
</script>

