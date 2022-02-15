<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers | Bank System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'Navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4">All Customers</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">E-mail</th>
                            <th scope="col" class="text-center">Balance</th>
                            <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center"><?php echo $rows['Customer_ID'] ?></td>
                        <td class="text-center"><?php echo $rows['Customer_Name']?></td>
                        <td class="text-center"><?php echo $rows['Customer_Email']?></td>
                        <td class="text-center"><?php echo $rows['Customer_Balance']?>$</td>
                        <td class="text-center"><a href="Customer_Details.php?Customer_ID= <?php echo $rows['Customer_ID'] ;?>"> <button type="button" class="btn btn-primary">Customer Details/Transfer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
<hr />
        <footer class="container-fluid text-center">
        <p>&copy;2022 - Noha Abdalslam</p>
</footer>
</body>
</html>