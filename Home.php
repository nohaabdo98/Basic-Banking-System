<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Bank System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <style>
            
            </style>
</head>
<body>
<?php
  include 'Navbar.php';
  ?>
  <div class="container body-content">
  <div class="row">
      <div class="container col-md-1"> </div>
  <div class="container col-md-4">
    
        <h2>Customers</h2>
        <p> Bank Customer means any Person with respect to which Bank issues private label 
            or co-branded credit cards as part of a private label or co-branded credit card 
            program between Bank and such Person as of the day before such Person becomes a Bank Client.
            The customer stored as Name, E-mail and Balance.
        </p>
        <p><a class="btn btn-primary"  href="All_Customers.php">View All Customers</a>
        </p>

</div>
<div class="container col-md-2"> </div>
    <div class="container col-md-4">
   
        <h2>Transactions</h2>
        <p>Banking transactions means cash withdrawals, deposits, account transfers, payments from bank accounts, 
            disbursements under a preauthorized credit agreement, and loan payments initiated by an account holder at 
            a communications facility and accessing his or her account at a Colorado bank. 
            The transaction that it happend in the website and stored as Sender Name, Receiver Name, Balance and Date Time.</p>
        <p>
           <a class="btn btn-primary" href="All_Transactions.php">Transactions History</a>
        </p>
</div>
<div class="container col-md-1"> </div>
</div>
</div>
<br><br>
<div class="row">
    <img src="images/bank2.png">
</div>
<hr />
        <footer class="container-fluid text-center">
        <p>&copy;2022 - Noha Abdalslam</p>
</footer>

</body>

</html>