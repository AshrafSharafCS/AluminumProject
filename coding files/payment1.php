<?php session_start(); ?>
<html>

<head>
    <title>Payment</title>
    <link rel="stylesheet" href="design2.css" rel="stylesheet" />

</head>
<header>
    <div class="head">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="viewproducts.php">View Products</a></li>
            <li><a href="order1.php">Order</a></li>
           <li><a href="workshop.php">Workshop</a></li>

        </ul>


        <div class="logout">
            <ul>

                <li>
                    <form method="POST" action="logout.php">
                        <button id="logout">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
</header>
<hr>


<body>

    <div class="payment-box">


        <form action="payment1.php" method="post">

            <br>

            <label> Payment method </label>

            <select name="method" id="method" required>
                <option value="Cash">Cash</option>
                <option value="Bank">Bank</option>
            </select>
            <br>
<label>Paying Date</label>
        <input type="date"name="pd" placeholder="" required/>
<br>
            <label>Bank Name</label>
            <select name="bn" id="bn">
                <option value="">Select Bank</option>

                <?php
              
                    $conn =  mysqli_connect("localhost", "id18166426_aluminum_database", "Ammar1Ashraf1_Senior", "id18166426_aluminumproject") or die(mysqli_connect_error());
                $q = ("select * from bank order by Name asc");
                $ex = mysqli_query($conn, $q) or die(mysqli_connect_error());
                while ($list = mysqli_fetch_assoc($ex)) {
                ?>
                    <option value="<?php echo $list['Name']; ?>">
                        <?php echo $list['Name'];

                        ?>
                    </option>


                <?php } ?>


            </select>
            
            <br> </br>
            <br> </br>
            <input type="submit" value="Confirm" name="submitpay" />
    </div>



    </form>


</body>

</html>



<?php


if (isset($_POST['submitpay'])) {
    
    $em = $_SESSION['cemail'];

    $date = $_POST['pd'];
    $method = $_POST['method'];
    $bank = $_POST['bn'];

 


    $conn =  mysqli_connect("localhost", "id18166426_aluminum_database", "Ammar1Ashraf1_Senior", "id18166426_aluminumproject") or die(mysqli_connect_error());


    $query = "select customer.CID from customer WHERE Email='$em'";
    $ex = mysqli_query($conn, $query) or die(mysqli_connect_error());
    $a = mysqli_fetch_row($ex);

    $query2 = "select bank.BID from bank WHERE name='$bank'";
    $ex2 = mysqli_query($conn, $query2) or die(mysqli_connect_error());
    $a2 = mysqli_fetch_row($ex2);


    if ($method == "Bank") {


        $sql = "INSERT INTO performtransaction (Paymentmethod,date,CID,BID) VALUES ('$method','$date','$a[0]','$a2[0]')";
        $result = mysqli_query($conn, $sql) or die(mysqli_connect_error());
   
       
    } else {
         
        $sql = "INSERT INTO performtransaction (Paymentmethod,date,CID) VALUES ('$method','$date','$a[0]')";
        $result = mysqli_query($conn, $sql) or die(mysqli_connect_error());
        
    }
}

?>