<?php   
session_start();
if(isset($_SESSION['cemail'])){
    
    $conn =  mysqli_connect("localhost","id18166426_aluminum_database","Ammar1Ashraf1_Senior","id18166426_aluminumproject")or die(mysqli_connect_error());
    
$email=$_SESSION['cemail'];
$q="select customer.Name from customer WHERE Email='".$email."'";
$ex=mysqli_query($conn,$q)or die(mysqli_connect_error()) ;
$res=mysqli_fetch_row($ex);
    $_SESSION['n']=$res[0];

    


}
?>
<html>

<head>
    <title>Workshop</title>
    <link rel="stylesheet" href="design2.css" rel="stylesheet" />

</head>
<header>
    <div class="head">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="viewproducts.php">View Products</a></li>
            <li><a href="order1.php">Order</a></li>
            <li><a href="payment1.php">Payment</a></li>
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

    <div id="ws-img">
        <h1>Image from your WorkShop</h1>
        <h1><?php $a=$_SESSION['n']; ?></h1>
        <br>
        
        <img id="ws" src="images/<?php echo $a?>.jpg">
        <br>
    </div>


   


</body>

</html>