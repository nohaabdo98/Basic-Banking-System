<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['Customer_ID'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where Customer_ID=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customer where Customer_ID=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Negative values cannot be transferred, Try again.")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['Customer_Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance, Try again with lower Balance.")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Zero value cannot be transferred, Try again.')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['Customer_Balance'] - $amount;
                $sql = "UPDATE customer set Customer_Balance=$newbalance where Customer_ID=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['Customer_Balance'] + $amount;
                $sql = "UPDATE customer set Customer_Balance=$newbalance where Customer_ID=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Customer_Name'];
                $receiver = $sql2['Customer_Name'];
                $sql = "INSERT INTO transaction(`Sender`, `Receiver`, `Transaction_Balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Successful, your transaction was done.');
                                     window.location='All_Transactions.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details | Bank System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <style type="text/css">
        button {
            border: none;
            background: #d9d9d9;
        }

        button:hover {
            background-color: #777E8B;
            transform: scale(1.1);
            color: white;
        }
    </style>
</head>

<body>

    <?php
  include 'navbar.php';
?>

    <div class="container">
        <h2 class="text-center pt-4">Customer Details</h2>
        <?php
                include 'config.php';
                $sid=$_GET['Customer_ID'];
                $sql = "SELECT * FROM  customer where Customer_ID=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
        <form method="post" name="tcredit" class="tabletext"><br>
            <div>
                <table class="table table-striped">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Balance</th>
                    </tr>
                    <tr>
                        <td class="text-center"><?php echo $rows['Customer_ID'] ?></td>
                        <td class="text-center"><?php echo $rows['Customer_Name'] ?></td>
                        <td class="text-center"><?php echo $rows['Customer_Email'] ?></td>
                        <td class="text-center"><?php echo $rows['Customer_Balance'] ?>$</td>
                    </tr>
                </table>
            </div>

            <br><br>
            <hr>
            <br>
            <h2 class="text-center pt-4">Transfer Money</h2>
            <br>

            <div class="col-xs-6">
                <label>Transfer To:</label>
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                include 'config.php';
                $sid=$_GET['Customer_ID'];
                $sql = "SELECT * FROM customer where Customer_ID!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                    <option class="table" value="<?php echo $rows['Customer_ID'];?>">

                        <?php echo $rows['Customer_Name'] ;?> (Balance:
                        <?php echo $rows['Customer_Balance'] ;?>)$

                    </option>
                    <?php 
                } 
            ?>

                </select>
            </div>


            <div class="col-xs-6">
                <label>Amount: ($)</label>
                <input type="number" class="form-control" name="amount" required>
                <br><br>

            </div>
            <div class="text-center">
                <button class="btn btn-primary" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
    <div class="container">
        <hr />
        <footer class="container-fluid text-center">
            <p>&copy;Basic Banking System - Noha Abdalslam #GRIPFEBRUARY22 </p>
            <p>The Sparks Foundation, Task1 Web Development</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>