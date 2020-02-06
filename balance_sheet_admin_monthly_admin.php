<?php
session_start();
include "connection.php";

if (isset($_SESSION['user'])) {
  
}else{
header("LOCATION:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bataan Public School Teachers and Employees Association</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
  
  <!-- Template Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  
  <!-- CSS Reset -->
  <link rel="stylesheet" href="css/normalize.css">
  
  <!-- Milligram CSS minified -->
  <link rel="stylesheet" href="css/milligram.min.css">
  
  <!-- Main Styles -->
<style type="text/css">
  body {
  background: #f9f9f9;
  height: 100%;
  width: 100%;
overflow: auto;
  font-size: 1.6em;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #333; }

h1, h2, h3, h4, h5, h6 {
  font-weight: 500;
  letter-spacing: -.1rem;
  margin-bottom: 2.0rem;
  margin-top: 0; }

h1 {
  font-size: 2.5em; }

h2 {
  font-size: 1.8em; }

h3 {
  font-size: 1.6em; }

h4 {
  font-size: 1.4em; }

h5, h6 {
  color: #555;
  text-transform: uppercase;
  font-size: 0.9em;
  letter-spacing: .05em;
  font-weight: 600;
  margin-bottom: 1rem; }

h6 {
  color: #888;
  font-size: 0.8em; }

p.text-large {
  font-size: 1.5em; }

p.text-small {
  font-size: 0.75em; }

.text-uppercase {
  text-transform: uppercase; }

.text-left {
  text-align: left; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

a {
  color: red; }

a:focus, a:hover {
  color: #c11717; }

.text-muted {
  color: #888; }

hr {
  border: 0;
  border-top: 0.1rem solid #f4f5f6;
  margin: 3.0rem 0; }

.circle {
  border-radius: 499rem; }

td, th {
  border-bottom: 0.1rem solid #eee; }

/*For demo purposes only*/
a.anchor {
  display: block;
  position: relative;
  top: -140px;
  visibility: hidden; }

.grid-example {
  margin-left: 1rem;
  margin-right: 1rem; }
  .grid-example .column {
    background: #ddd;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-bottom: 10px; }

.credit {
  text-align: center;
  margin-top: 30px;
  color: #666;
  font-size: 13px;
  font-weight: bold;
  text-transform: uppercase; }

/*Margins*/
.m-0 {
  margin: 0; }

.mt-1 {
  margin-top: 1rem; }

.mr-1 {
  margin-right: 1rem; }

.mb-1 {
  margin-bottom: 1rem; }

.ml-1 {
  margin-left: 1rem; }

.mt-2 {
  margin-top: 2rem; }

.mr-2 {
  margin-right: 2rem; }

.mb-2 {
  margin-bottom: 2rem; }

.ml-2 {
  margin-left: 2rem; }

.mt-3 {
  margin-top: 3rem; }

.mr-3 {
  margin-right: 3rem; }

.mb-3 {
  margin-bottom: 3rem; }

.ml-3 {
  margin-left: 3rem; }

/*Forms Elements & Buttons*/
input[type='email'], input[type='number'], input[type='password'], input[type='search'], input[type='tel'], input[type='text'], input[type='url'], textarea, select {
  border: 1px solid #f9f9f9 !important; 
  width: 1200px;
}

input[type='email']:focus, input[type='number']:focus, input[type='password']:focus, input[type='search']:focus, input[type='tel']:focus, input[type='text']:focus, input[type='url']:focus, textarea:focus, select:focus {
  border: 1px solid red !important; }

.button, button, input[type='button'], input[type='reset'], input[type='submit'] {
  background-color: red;
  border: 0.1rem solid red;
  border-radius: 499rem;
  font-size: 1.15rem; }

.button:focus, .button:hover, button:focus, button:hover, input[type='button']:focus, input[type='button']:hover, input[type='reset']:focus, input[type='reset']:hover, input[type='submit']:focus, input[type='submit']:hover {
  background-color: #333;
  border-color: #333;
  color: #fff;
  outline: 0; }

.button[disabled], button[disabled], input[type='button'][disabled], input[type='reset'][disabled], input[type='submit'][disabled] {
  cursor: default;
  opacity: .5; }

.button[disabled]:focus, .button[disabled]:hover, button[disabled]:focus, button[disabled]:hover, input[type='button'][disabled]:focus, input[type='button'][disabled]:hover, input[type='reset'][disabled]:focus, input[type='reset'][disabled]:hover, input[type='submit'][disabled]:focus, input[type='submit'][disabled]:hover {
  background-color: red;
  border-color: red; }

.button.button-outline, button.button-outline, input[type='button'].button-outline, input[type='reset'].button-outline, input[type='submit'].button-outline {
  background-color: transparent;
  color: red; }

.button.button-outline:focus, .button.button-outline:hover, button.button-outline:focus, button.button-outline:hover, input[type='button'].button-outline:focus, input[type='button'].button-outline:hover, input[type='reset'].button-outline:focus, input[type='reset'].button-outline:hover, input[type='submit'].button-outline:focus, input[type='submit'].button-outline:hover {
  background-color: transparent;
  border-color: #333;
  color: #333; }

.button.button-outline[disabled]:focus, .button.button-outline[disabled]:hover, button.button-outline[disabled]:focus, button.button-outline[disabled]:hover, input[type='button'].button-outline[disabled]:focus, input[type='button'].button-outline[disabled]:hover, input[type='reset'].button-outline[disabled]:focus, input[type='reset'].button-outline[disabled]:hover, input[type='submit'].button-outline[disabled]:focus, input[type='submit'].button-outline[disabled]:hover {
  border-color: inherit;
  color: red; }

.button.button-clear, button.button-clear, input[type='button'].button-clear, input[type='reset'].button-clear, input[type='submit'].button-clear {
  background-color: transparent;
  border-color: transparent;
  color: red; }

.button.button-clear:focus, .button.button-clear:hover, button.button-clear:focus, button.button-clear:hover, input[type='button'].button-clear:focus, input[type='button'].button-clear:hover, input[type='reset'].button-clear:focus, input[type='reset'].button-clear:hover, input[type='submit'].button-clear:focus, input[type='submit'].button-clear:hover {
  background-color: transparent;
  border-color: transparent;
  color: #333; }

.button.button-clear[disabled]:focus, .button.button-clear[disabled]:hover, button.button-clear[disabled]:focus, button.button-clear[disabled]:hover, input[type='button'].button-clear[disabled]:focus, input[type='button'].button-clear[disabled]:hover, input[type='reset'].button-clear[disabled]:focus, input[type='reset'].button-clear[disabled]:hover, input[type='submit'].button-clear[disabled]:focus, input[type='submit'].button-clear[disabled]:hover {
  color: red; }

input[type='email'], input[type='number'], input[type='password'], input[type='search'], input[type='tel'], input[type='text'], input[type='url'], textarea, select {
  border: 0.1rem solid #eee !important;
  border-radius: .4rem;
  box-shadow: none; }

input[type='email'], input[type='number'], input[type='password'], input[type='search'], input[type='tel'], input[type='text'], input[type='url'], select {
  max-width: 60rem; }

input[type='email']:focus, input[type='number']:focus, input[type='password']:focus, input[type='search']:focus, input[type='tel']:focus, input[type='text']:focus, input[type='url']:focus, textarea:focus, select:focus {
  border-color: red;
  outline: 0; }

select {
  background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 29 14" width="29"><path fill="#eeeeee" d="M9.37727 3.625l5.08154 6.93523L19.54036 3.625"/></svg>') center right no-repeat;
  padding-right: 3.0rem; }

select:focus {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 29 14" width="29"><path fill="#f02563" d="M9.37727 3.625l5.08154 6.93523L19.54036 3.625"/></svg>'); }

.navbar {
  position: fixed;
  z-index: 1;
  width: 100%;
  background: #fff;
  height: 80px;
  padding: 20px 0;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05); }
  .navbar a.site-title {
    color: #222;
    color: red;
    font-size: 2.3rem;
    font-weight: bold;
    display: block;
    margin: 0 20px 10px 20px; }
  .navbar .col-search {
    position: relative; }
    .navbar .col-search .search-btn {
      font-size: 22px;
      color: #888;
      position: absolute;
      top: 6px;
      right: 42px; }
    .navbar .col-search .search-btn:hover {
      color: #333; }
  .navbar input[type=text] {
    margin-top: -.6rem;
    margin-left: -1rem;
    padding-left: 2rem;
    background: #f9f9f9;
    border-radius: 499rem;
    border: none;
    height: 50px; }

#sidebar {
  position: fixed;
  z-index: 0;
  width: 20% !important;
  background: #fff;
  padding: 10px 30px !important;
  box-shadow: 3px 0px 8px rgba(0, 0, 0, 0.05);
  margin-top: 80px;
  height: 100%; }
  #sidebar h1, #sidebar h2, #sidebar h3, #sidebar h4, #sidebar h5, #sidebar h6 {
    color: #333;
    margin-top: 20px;
    margin-bottom: 0; }
  #sidebar ul {
    margin-top: 10px;
    margin-left: -20px;
    margin-right: -30px; }
    #sidebar ul li {
      list-style: none;
      margin: 0;
      padding: 0; }
      #sidebar ul li a {
        display: block;
        padding: 10px 20px;
        color: #888; }
        #sidebar ul li a .fa {
          margin-right: 5px; }
      #sidebar ul li a:hover {
        color: red;
        background-color: #f9f9f9; }

#main-content {
  width: 80% !important;
  padding: 20px 3.5rem !important;
  margin-top: 95px;
  margin-right: 12px; }
  #main-content .page-heading {
    margin-bottom: 20px; }

.card {
  background: #fff;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.05);
  margin-bottom: 2.2rem; }
  .card .canvas-wrapper {
    width: 98%; }
  .card .card-title {
    border-bottom: 1px solid #eee;
    padding: 15px 20px; }
    .card .card-title h1, .card .card-title h2, .card .card-title h3, .card .card-title h4, .card .card-title h5, .card .card-title h6 {
      margin: 0;
      padding: 0; }
    .card .card-title .badge {
      margin-top: 3px; }
  .card .card-block {
    padding: 10px 20px; }

.large-card {
  background: #fff;
  padding: 30px;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.05);
  margin-bottom: 2.2rem; }

.user-section {
  margin-top: -8px;
  margin-right: 40px; }
  .user-section a {
    float: right; }
  .user-section img {
    margin-right: 10px;
    float: left; }
  .user-section .username {
    color: #333;
    float: right;
    text-align: left; }
    .user-section .username h4 {
      margin-bottom: -.5rem; }
    .user-section .username p {
      color: #888;
      font-size: .9em; }

.alert {
  padding: 10px 20px;
  border-radius: .5rem;
  margin-bottom: 20px;
  color: #fff;
  background-color: #888; }
  .alert .fa {
    margin-right: 5px; }

.badge {
  padding: 5px 10px;
  border-radius: 499px;
  color: #fff;
  font-size: .8em;
  height: 28px;
  min-width: 28px;
  text-align: center;
  background-color: #888; }

.background-primary {
  background: red; }

.background-success {
  background: #aee460; }

.background-warning {
  background: #f4cd4a; }

.background-danger {
  background: #fc4660; }

.progress-bar {
  display: block;
  background: #f9f9f9;
  height: 10px;
  border-radius: 499rem;
  margin-bottom: 20px;
  margin-top: -20px; }
  .progress-bar .progress {
    display: block;
    height: 10px;
    border-radius: 499rem; }

/* Mobile */
@media (max-width: 640px) {
  .row, .row.grid-responsive {
    flex-direction: column; }

  .row.grid-responsive .column,
  .row.grid-responsive .column.column-10,
  .row.grid-responsive .column.column-20,
  .row.grid-responsive .column.column-25,
  .row.grid-responsive .column.column-33,
  .row.grid-responsive .column.column-40,
  .row.grid-responsive .column.column-50,
  .row.grid-responsive .column.column-60,
  .row.grid-responsive .column.column-66,
  .row.grid-responsive .column.column-67,
  .row.grid-responsive .column.column-75,
  .row.grid-responsive .column.column-80,
  .row.grid-responsive .column.column-90,
  .row.grid-responsive .column.column-100 {
    display: block;
    width: 100%;
    max-width: 100%; }

  .navbar {
    height: auto;
    position: static; }
    .navbar .user-section {
      text-align: left; }
    .navbar .row .column,
    .navbar .row .column.column-10,
    .navbar .row .column.column-20,
    .navbar .row .column.column-25,
    .navbar .row .column.column-33,
    .navbar .row .column.column-40,
    .navbar .row .column.column-50,
    .navbar .row .column.column-60,
    .navbar .row .column.column-66,
    .navbar .row .column.column-67,
    .navbar .row .column.column-75,
    .navbar .row .column.column-80,
    .navbar .row .column.column-90,
    .navbar .row .column.column-100 {
      width: 100%;
      max-width: 100%;
      padding: 0 20px; }
    .navbar a.site-title {
      margin-left: 0; }
    .navbar .col-search .search-btn {
      top: 12px; }
    .navbar input[type=text] {
      margin: 0; }

  #sidebar {
    position: static;
    width: 100% !important;
    padding: 10px 20px !important;
    margin: 0;
    height: auto;
    left: 0; }

  #main-content {
    width: 100% !important;
    display: block !important;
    margin: 0;
    padding: 1.5rem !important; }

  .card .card-title, .card .card-block {
    padding: 10px 15px; }

  .user-section {
    display: none; } }
/* Tablet */
@media (min-width: 640px) and (max-width: 768px) {
  #sidebar {
    width: 30% !important; }

  #main-content {
    width: 70% !important;
    margin-left: 30%; }

  .navbar .row .column,
  .navbar .row .column.column-10,
  .navbar .row .column.column-20,
  .navbar .row .column.column-25,
  .navbar .row .column.column-33,
  .navbar .row .column.column-40,
  .navbar .row .column.column-50,
  .navbar .row .column.column-60,
  .navbar .row .column.column-66,
  .navbar .row .column.column-67,
  .navbar .row .column.column-75,
  .navbar .row .column.column-80,
  .navbar .row .column.column-90,
  .navbar .row .column.column-100 {
    width: 50%;
    max-width: 50%; }
  .navbar .site-title {
    font-size: 18px !important;
    padding-top: 5px; }

  .row.grid-responsive {
    flex-direction: column; }

  .row.grid-responsive .column,
  .row.grid-responsive .column.column-10,
  .row.grid-responsive .column.column-20,
  .row.grid-responsive .column.column-25,
  .row.grid-responsive .column.column-33,
  .row.grid-responsive .column.column-40,
  .row.grid-responsive .column.column-50,
  .row.grid-responsive .column.column-60,
  .row.grid-responsive .column.column-66,
  .row.grid-responsive .column.column-67,
  .row.grid-responsive .column.column-75,
  .row.grid-responsive .column.column-80,
  .row.grid-responsive .column.column-90,
  .row.grid-responsive .column.column-100 {
    display: block;
    width: 100%;
    max-width: 100%; }

  .card .canvas-wrapper {
    width: 90%; }

  .user-section {
    margin-right: 20px; }
    .user-section .username {
      display: none; } }
@media (min-width: 768px) and (max-width: 960px) {
  .row.grid-responsive {
    flex-direction: column; }

  .row.grid-responsive .column,
  .row.grid-responsive .column.column-10,
  .row.grid-responsive .column.column-20,
  .row.grid-responsive .column.column-25,
  .row.grid-responsive .column.column-33,
  .row.grid-responsive .column.column-40,
  .row.grid-responsive .column.column-50,
  .row.grid-responsive .column.column-60,
  .row.grid-responsive .column.column-66,
  .row.grid-responsive .column.column-67,
  .row.grid-responsive .column.column-75,
  .row.grid-responsive .column.column-80,
  .row.grid-responsive .column.column-90,
  .row.grid-responsive .column.column-100 {
    display: block;
    width: 100%;
    max-width: 100%; }

  #sidebar {
    width: 30% !important; }

  #main-content {
    width: 70% !important;
    margin-left: 30%; }

  .card .canvas-wrapper {
    width: 95%; }

  .user-section {
    margin-right: 20px; }
    .user-section .username {
      display: none; } }

      img.logo{
        width:200px;
        height: 80px;
        margin-top: -20px;
      }
      .dropbtn {
    background-color: red;
    color: white;
    padding: 5px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: white;
    color:red;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

ul.hidden{
  display: none;
}

li.hover a:hover ul.hidden{
  display: block;
}
a.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    background-color: white;
}

li a:hover, .dropdown:hover .dropbtn {
    
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
  margin-left: 70px;
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {}

.dropdown:hover .dropdown-content {
    display: block;
}
input[type="text"].search_bar{
  width: 1300px;
}
tr.header td{
  text-align: center;
  font-weight: bold;
}
table tr th.h{
  text-align: center;
}
</style>
  
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>
  <div class="navbar">
    <div class="row">
      <div class="column column-30 col-site-title"><a href="admin.php" class="site-title float-left"><img src="logo1.png" class="logo"></a></div>
      <div class="column column-40 col-search">
        <a href="logout.php">Logout</a>
      
    </div>
  </div>
</div>
    <div class="row">
    <div id="sidebar" class="column">
      <h5>Navigation Pane</h5>
      <ul>
        <li><a href="assign_designation.php"><em class="fa fa-handshake-o"></em>Assign Designations For Members</a></li>
  <li><a href="approve_reg.php"><em class="fa fa-thumbs-o-up"></em>Approve Registration Requests</a></li>
   <li><a href="annual_dues_maintenance.php"><em class="fa fa-envelope-open-o"></em>Maintenance of Fees</a></li>
   <li> <a href="create_account_employees.php"><em class="fa fa-envelope-open-o"></em>Create Account for Employees</a></li>
  <li class="dropdown"><a href="javascript:void(0)" class="dropbtn"><em class="fa fa-envelope-open-o"></em>Forms</a>
    <div class="dropdown-content">
      <a href="or_p_admin.php"><em class="fa fa-envelope-open-o"></em>Official Receipts Form</a>
      <a href="bills_form_admin.php"><em class="fa fa-envelope-open-o"></em>Bills Form</a>
      <a href="asset_purchase_form_admin.php"><em class="fa fa-envelope-open-o"></em>Asset Purchase Form</a>
    </div>
  </li>
  <br>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn"><em class="fa fa-envelope-open-o"></em>Reports</a>
    <div class="dropdown-content">
      <a href="member_reports_admin.php"><em class="fa fa-envelope-open-o"></em>Membership Reports</a>
      <a href="loan_reports_admin.php"><em class="fa fa-envelope-open-o"></em>On Going Loan Status Reports</a>
       <a href="completed_loan_reports_admin.php"><em class="fa fa-envelope-open-o"></em>Completed Loan Status Reports</a>
     
    </div>
  </li>
   <li class="dropdown"><a href="javascript:void(0)" class="dropbtn"><em class="fa fa-envelope-open-o"></em>Financial Reports</a>
    <div class="dropdown-content">
      <a href="cashflow_admin.php"><em class="fa fa-envelope-open-o"></em>Cashflow</a>
      <a href="balance_sheet_admin.php"><em class="fa fa-envelope-open-o"></em>Balance Sheet</a>
       <a href="income_statements_admin.php"><em class="fa fa-envelope-open-o"></em>Income Statements</a>
    </div>
  </li>

      </ul>
    </div>
     <section id="main-content" class="column column-offset-20">
  

      <div class="row grid-responsive">
        <div class="column ">
           Generate Balance Sheets Report Monthly
             <form method="post" action="balance_sheet_admin_monthly_admin.php">
               <input type="month" name="search_month" required>
               <input type="submit" value="Generate">
             </form>
             Generate Balance Sheets Report Yearly
              <form method="post" action="balance_sheet_admin_yearly_admin.php">
               <input type="text" name="search_year" placeholder="Input Year Here" required>
               <input type="submit" value="Generate">
             </form>
          <div class="card">

<div class="card-block">
   <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">
            <div id="div_print">
              Statement of Financial Condition(Balance Sheet)

              <table>
                <tr class="header" id="haa">
                  <td>
                    BATAAN PUBLIC SCHOOL TEACHERS & EMPLOYEES ASSOCIATION, INC.<br>
                    Capitol Compound, Balanga City, Bataan<br>
                    SEC REGISTRATION NO. A1997-7173 DATED:JUNE 20,1997<br>
                    Statement of Financial Condition As Of <?php echo $_POST['search_month'] ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <table>
                      <tr>
                        <th>Account Title</th>
                          <th>Current Month</th>
                          <th>Prior Month</th>
                          <th>Increase/(Decrease)</th>
                      </tr>
                      <tr>
                        <th  class="h">ASSETS</th>
                      </tr>
                       <tr>
                       <td>CURRENT ASSETS</td>
                      </tr>
                       <tr>
                       <td>Cash on Hand</td>
                       <td>
                          <?php
                          include "connection.php";
                          $total_amount="";
                          $total_amount1="";
                        $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                         $status="Approved";
                         $payment_for="Membership Fee";
                         $payment_for1="Annual Dues";
                         $payment_for2="Mutual Aid System";
                         $query=mysqli_query($con, "SELECT SUM(amount) as total_amount from loan_payment_tb where DATE_FORMAT(payment_date, '%Y%m')='$year'");
                         if (! $query) {
                           echo mysqli_error($con);
                         }

                         $query1=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$year' and status='$status'");
                         $query2=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
                           $query3=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for1'");
                             $query4=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for2'");
                             while ($row=mysqli_fetch_array($query)) {
                               while ($row1=mysqli_fetch_array($query1)) {
                                 while ($row2=mysqli_fetch_array($query2)) {
                                   while ($row3=mysqli_fetch_array($query3)) {
                                     while ($row4=mysqli_fetch_array($query4)) {
                                       $total_amount=$row['total_amount'] +$row1['total_amount'] +$row2['total_amount']+$row3['total_amount']+$row4['total_amount'];
                                       echo "P" . $total_amount;
                                     }
                                   }
                                 }
                               }
                             }

                         ?>
                       </td>
                       <td> <?php
                         $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                         $status="Approved";
                         $payment_for="Membership Fee";
                         $payment_for1="Annual Dues";
                         $payment_for2="Mutual Aid System";
                         $query=mysqli_query($con, "SELECT SUM(amount) as total_amount from loan_payment_tb where DATE_FORMAT(payment_date, '%Y%m')='$prevMonth'");
                         if (! $query) {
                           echo mysqli_error($con);
                         }
                         $query1=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$prevMonth' and status='$status'");
                         $query2=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$prevMonth' and payment_for='$payment_for'");
                           $query3=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$prevMonth' and payment_for='$payment_for1'");
                             $query4=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$prevMonth' and payment_for='$payment_for2'");
                             while ($row=mysqli_fetch_array($query)) {
                               while ($row1=mysqli_fetch_array($query1)) {
                                 while ($row2=mysqli_fetch_array($query2)) {
                                   while ($row3=mysqli_fetch_array($query3)) {
                                     while ($row4=mysqli_fetch_array($query4)) {
                                       $total_amount1=$row['total_amount'] +$row1['total_amount'] +$row2['total_amount']+$row3['total_amount']+$row4['total_amount'];
                                       echo "P" . $total_amount1;
                                     }
                                   }
                                 }
                               }
                             }

                         ?></td>
                       <td>
                        <?php
                        if ($total_amount>=$total_amount1) {
                          echo "Increase";
                        }else
                        echo "Decrease";
                        ?>
                       </td>
                      </tr>
                       <tr>
                       <td>Petty Cash Fund</td>
                       <td> P5000</td>
                       <td> P5000</td>
                       <td>
                       -
                       </td>
                      </tr>
                       <tr>
                       <td>Cash Advances to Officers and Staff</td>
                       <td><?php
                       $c_total_amount="";
                       $c_total_amount1="";
                         $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                        $sql=mysqli_query($con, "SELECT SUM(amount) as total_amount from employees_payroll_tb where DATE_FORMAT(payroll_date, '%Y%m')='$year'");
                        while ($row=mysqli_fetch_array($sql)) {
                          $c_total_amount=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td><?php
                        $date=date('Y')-1;
                        $sql=mysqli_query($con, "SELECT SUM(amount) as total_amount from employees_payroll_tb where DATE_FORMAT(payroll_date, '%Y%m')='$prevMonth'");
                        while ($row=mysqli_fetch_array($sql)) {
                          $c_total_amount1=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td>
                        <?php
                        if ($c_total_amount>=$c_total_amount1) {
                          echo "Increase";
                        }else{
                          echo "Decrease";
                        }
                        ?>
                       </td>
                      </tr>
                       <tr>
                       <td>Loan Receivables</td>
                       <td> <?php
                       $l_total_amount="";
                        $l_total_amount1="";
                         $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                        $status="Approved";
                        $status1="Completed";
                        $sql=mysqli_query($con, "SELECT SUM(loan_amount) as total_amount from loan_tb where DATE_FORMAT(date_approved, '%Y%m')='$year' and status='$status' and status='$status1'");
                        while ($row=mysqli_fetch_array($sql)) {
                          $l_total_amount=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td><?php
                        $date=date('Y')-1;
                        $status="Approved";
                        $status1="Completed";
                        $sql=mysqli_query($con, "SELECT SUM(loan_amount) as total_amount from loan_tb where DATE_FORMAT(date_approved, '%Y%m')='$prevMonth' and status='$status' and status='$status1'");
                        while ($row=mysqli_fetch_array($sql)) {
                           $l_total_amount1=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td>
                        <?php
                        if ($l_total_amount>=$l_total_amount1) {
                          echo "Increase";
                        }else{
                          echo "Decrease";
                        }
                        ?>
                       </td>
                      </tr>
                      <tr>
                       <td>Total Current Assets</td>
                    
                       <td>
                        <?php
                         $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                        $status="Approved";
                        $status1="Completed";
                        $payment_for="Membership Fee";
                        $payment_for1="Annual Dues";
                        $payment_for2="Mutual Aid System";
                        $query=mysqli_query($con, "SELECT SUM(amount) as total_amount from loan_payment_tb where DATE_FORMAT(payment_date, '%Y%m')='$year'");
                         $query1=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$year' and status='$status'");
                          $query2=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
                           $query3=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for1'");
                            $query4=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for2'");
                               $sql=mysqli_query($con, "SELECT SUM(amount) as total_amount from employees_payroll_tb where DATE_FORMAT(payroll_date, '%Y%m')='$year'");
                               $sql1=mysqli_query($con, "SELECT SUM(loan_amount) as total_amount from loan_tb where DATE_FORMAT(date_approved, '%Y%m')='$year' and status='$status' and status='$status1'");
                               while ($r=mysqli_fetch_array($query)) {
                                 while ($r1=mysqli_fetch_array($query1)) {
                                    while ($r2=mysqli_fetch_array($query2)) {
                                      while ($r3=mysqli_fetch_array($query3)) {
                                        while ($r4=mysqli_fetch_array($query4)) {
                                          while ($r5=mysqli_fetch_array($sql)) {
                                            while ($r6=mysqli_fetch_array($sql1)) {
                                              $total_amount=$r['total_amount'] + $r1['total_amount']  + $r2['total_amount'] + $r3['total_amount'] + $r4['total_amount'] + $r5['total_amount'] + $r6['total_amount'] + 5000;
                                              echo "P" . $total_amount;
                                            }
                                          }
                                        }
                                      }
                                    }
                                 }
                               }
                        ?>
                       </td>
                      </tr>
                      <tr>
                        <td>PROPERTY & EQUIPMENT </td>
                      </tr>
                       <tr>
                       <td>Office Furnitures and Fixtures</td>
                       <td> <?php
                       $of_total_amount="";
                       $of_total_amount1="";
                         $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                        $status="Approved";
                        $status1="Completed";
                        $sql=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$year'");
                        while ($row=mysqli_fetch_array($sql)) {
                          $of_total_amount=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td> <?php
                        $date=date('Y')-1;
                        $status="Approved";
                        $status1="Completed";
                        $sql=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$prevMonth'");
                        while ($row=mysqli_fetch_array($sql)) {
                          $of_total_amount1=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td>
                        <?php
                        if ($of_total_amount>=$of_total_amount1) {
                          echo "Increase";
                        }else{
                          echo "Decrease";
                        }
                        ?>
                       </td>
                      </tr>
                      <tr>
                       <td>Office Equipments</td>
                       <td> <?php
                       $of_total_amount="";
                       $of_total_amount1="";
                          $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                        $status="Approved";
                        $status1="Completed";
                        $sql=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$year'");
                        while ($row=mysqli_fetch_array($sql)) {
                          $of_total_amount=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td> <?php
                        $date=date('Y')-1;
                        $status="Approved";
                        $status1="Completed";
                        $sql=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$prevMonth'");
                        while ($row=mysqli_fetch_array($sql)) {
                          $of_total_amount1=$row['total_amount'];
                         echo "P" . $row['total_amount']; 
                        }
                        ?></td>
                       <td>
                        <?php
                        if ($of_total_amount>=$of_total_amount1) {
                          echo "Increase";
                        }else{
                          echo "Decrease";
                        }
                        ?>
                       </td>
                      </tr>
                      <tr>
                       <th>TOTAL ASSETS</th>
                       <td>
                        <?php
                          $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
                        $status="Approved";
                        $status1="Completed";
                        $payment_for="Membership Fee";
                        $payment_for1="Annual Dues";
                        $payment_for2="Mutual Aid System";
                        $query=mysqli_query($con, "SELECT SUM(amount) as total_amount from loan_payment_tb where DATE_FORMAT(payment_date, '%Y%m')='$year'");
                         $query1=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$year' and status='$status'");
                          $query2=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
                           $query3=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for1'");
                            $query4=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for2'");
                               $sql=mysqli_query($con, "SELECT SUM(amount) as total_amount from employees_payroll_tb where DATE_FORMAT(payroll_date, '%Y%m')='$year'");
                               $sql1=mysqli_query($con, "SELECT SUM(loan_amount) as total_amount from loan_tb where DATE_FORMAT(date_approved, '%Y%m') and status='$status' and status='$status1'");
                               $sql2=mysqli_query($con, "SELECT SUM(payment) as total_amount from asset_purchase_form where DATE_FORMAT(date_made, '%Y%m')='$year'");
                               while ($r=mysqli_fetch_array($query)) {
                                 while ($r1=mysqli_fetch_array($query1)) {
                                    while ($r2=mysqli_fetch_array($query2)) {
                                      while ($r3=mysqli_fetch_array($query3)) {
                                        while ($r4=mysqli_fetch_array($query4)) {
                                          while ($r5=mysqli_fetch_array($sql)) {
                                            while ($r6=mysqli_fetch_array($sql1)) {
                                              while ($r7=mysqli_fetch_array($sql2)) {
                                               
                                              $total_amount=$r['total_amount'] + $r1['total_amount']  + $r2['total_amount'] + $r3['total_amount'] + $r4['total_amount'] + $r5['total_amount'] + $r6['total_amount'] + $r7['total_amount'] + 5000;
                                              echo "P" . $total_amount;
                                            }
                                           }
                                          }
                                        }
                                      }
                                    }
                                 }
                               }
                        ?>
                       </td>
                      </tr>
                       <tr>
                        <th class="h">LIABILITIES</th>
                      </tr>
                        <tr>
                        <td>LONG TERM LIABILITIES</td>
                      </tr>
                       <tr>
                       <td>Member's Share Deposit</td>
                       <td> <?php
                       $m_total_amount="";
                       $m_total_amount1="";
                          $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
       $payment_for="Membership Fee";
       $query5=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
       if (! $query5) {
         echo mysqli_error($con);
       }
       while ($row=mysqli_fetch_array($query5)) {
        $m_total_amount=$row['total_amount'];
         echo "P" .$row['total_amount'];
       }
                        ?></td>
                       <td> <?php
                        $date_today=date('Y')-1;
       $payment_for="Membership Fee";
       $query5=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$prevMonth' and payment_for='$payment_for'");
       if (! $query5) {
         echo mysqli_error($con);
       }
       while ($row=mysqli_fetch_array($query5)) {
        $m_total_amount1=$row['total_amount'];
         echo "P" .$row['total_amount'];
       }
                        ?></td>
                       <td>
                         <?php
                        if ($m_total_amount>=$m_total_amount1) {
                          echo "Increase";
                        }else{
                          echo "Decrease";
                        }
                        ?>
                       </td>
                      </tr>
                       <tr>
                       <th>TOTAL LIABILITIES</th>
                       <td>
                        <?php
                         $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
       $payment_for="Membership Fee";
       $query5=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
       if (! $query5) {
         echo mysqli_error($con);
       }
       while ($row=mysqli_fetch_array($query5)) {
         echo "P" .$row['total_amount'];
       }
                       
                        ?>
                       </td>
                      </tr>
                          <tr>
                        <th class="h">EQUITIES</th>
                      </tr>
                      <tr>
                       <td>Annual Dues Net</td>
                       <td> <?php
                       $a_total_amount="";
                       $a_total_amount1="";
                          $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
       $payment_for="Annual Dues";
       $query5=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
       if (! $query5) {
         echo mysqli_error($con);
       }
       while ($row=mysqli_fetch_array($query5)) {
        $a_total_amount=$row['total_amount'];
         echo "P" .$row['total_amount'];
       }
                        ?></td>
                       <td> <?php
                         $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
       $payment_for="Annual Dues";
       $query5=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$prevMonth' and payment_for='$payment_for'");
       if (! $query5) {
         echo mysqli_error($con);
       }
       while ($row=mysqli_fetch_array($query5)) {
         $a_total_amount1=$row['total_amount'];
         echo "P" .$row['total_amount'];
       }
                        ?></td>
                       <td>
                        <?php
                        if ($a_total_amount>=$a_total_amount1) {
                          echo "Increase";
                        }else{
                          echo "Decrease";
                        }
                        ?>
                       </td>
                      </tr>
                        <tr>
                       <th>TOTAL EQUITIES</th>
                       <td>
                        <?php
                           $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
       $payment_for="Annual Dues";
       $query5=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
       if (! $query5) {
         echo mysqli_error($con);
       }
       while ($row=mysqli_fetch_array($query5)) {
         echo "P" .$row['total_amount'];
       }
                       
                        ?>
                       </td>
                      </tr>
                         <tr>
                       <th>TOTAL LIABILITIES & EQUITIES</th>
                       <td>
                        <?php
                          $yearr=$_POST['search_month'];
                         $year1=date_create($yearr);
                         $year=date_format($year1,'Ym');
                        $prevMonth = date('Ym', strtotime("last month", strtotime($yearr)));
       $payment_for="Annual Dues";
       $query5=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for'");
       $date_today=date('Y');
       $payment_for1="Membership Fee";
       $query6=mysqli_query($con, "SELECT SUM(amount) as total_amount from annual_payment_tb where DATE_FORMAT(year, '%Y%m')='$year' and payment_for='$payment_for1'");
       if (! $query5) {
         echo mysqli_error($con);
       }
       while ($row=mysqli_fetch_array($query5)) {
        while ($row1=mysqli_fetch_array($query6)) {
          $total_amount=$row['total_amount'] + $row1['total_amount'];
          echo "P" . $total_amount;
        }
         
       }
                       
                        ?>
                       </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
         
          </div>
        </div>
      </div>
    </section>
  </div>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script>
  window.onload = function () {
    var chart1 = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(chart1).Line(lineChartData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.2)",
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleFontColor: "#c5c7cc"
    });
    var chart2 = document.getElementById("bar-chart").getContext("2d");
    window.myBar = new Chart(chart2).Bar(barChartData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.2)",
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleFontColor: "#c5c7cc"
    });
    var chart4 = document.getElementById("pie-chart").getContext("2d");
    window.myPie = new Chart(chart4).Pie(pieData, {
    responsive: true,
    segmentShowStroke: false
    });
    var chart5 = document.getElementById("radar-chart").getContext("2d");
    window.myRadarChart = new Chart(chart5).Radar(radarData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.05)",
    angleLineColor: "rgba(0,0,0,.2)"
    });
    var chart6 = document.getElementById("polar-area-chart").getContext("2d");
    window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.2)",
    segmentShowStroke: false
    });
  };
  </script>     
  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html> 