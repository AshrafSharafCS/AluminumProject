<?php    
session_start();
if(isset($_SESSION['cemail'])){
    
    $conn =  mysqli_connect("localhost","id18166426_aluminum_database","Ammar1Ashraf1_Senior","id18166426_aluminumproject")or die(mysqli_connect_error());
    
$email=$_SESSION['cemail'];
$q="select * from customer WHERE Email='".$email."'";
$ex=mysqli_query($conn,$q)or die(mysqli_connect_error()) ;
while($res=mysqli_fetch_array($ex)){
    $a= "<p>". "Your Name   :  ".$res["Name"]."<br>".
                "Address     :  ".$res["Address"]."<br>".
                "Email       :  ".$res["Email"]."<br>".
                "Phone number:  ".$res["Phonenumber"]."<br>";
                
    
}

    
}
?>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="design2.css" rel="stylesheet" />

</head>
<header>
    <div class="head">
        <ul>
            <li><a href="viewproducts.php">View Products</a></li>
            <li><a href="order1.php">Order</a></li>
            <li><a href="payment1.php">Payment</a></li>
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
    <p> <?php echo $a; ?>          </p>
    <h2>Welcome to our website, here's a small introduction about us.</h2>

    <p>Welcome to our website Aluminium! Our Aluminium shop is located in Hasbaya, Al Janoub, Lebanon. This website saves you time and effort. On our website, you can view what products we offer, order anything you need, and choose the payment method that is most suitable for you. We offer unique and modern styles and types of doors (French, Colonial, and Pocket), windows (Technal, Taiseer, and Gulf), kitchens (L-shaped, U-shaped, and Galley), and closets (single and double) with various color options! We hope you have a great experience discovering our website.
    </p>

    <img src="images/alu.png">


</body>

</html>