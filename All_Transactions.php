<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transactions | Bank System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>

    <?php
  include 'Navbar.php';
?>

    <div class="container">
        <h2 class="text-center pt-4">All Transactions</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead>
                    <tr>

                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

                    <tr>

                        <td class="text-center"><?php echo $rows['Sender']; ?></td>
                        <td class="text-center"><?php echo $rows['Receiver']; ?></td>
                        <td class="text-center"><?php echo $rows['Transaction_Balance']; ?>$</td>
                        <td class="text-center"><?php echo $rows['DateTime']; ?> </td>

                        <?php
            }

        ?>
                </tbody>
            </table>

        </div>
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