<?php session_start(); ?>
<html>

<head>
  <title>Order History</title>
  <link rel="stylesheet" href="design2.css" rel="stylesheet" />

</head>

<body>
  <header>
    <div class="head">
      <ul>
        <li><a href="order1.php">Order</a></li>
     </ul>


      <div class="logout">
        <ul>

          <li> <form method="POST" action="logout.php" >
               <button id="logout" >Logout</button>
                 </form></li>
        </ul>
      </div>
  </header>
  <hr>
  
</body>
</html>


<?php


 

$em=$_SESSION['cemail'];
  $conn =  mysqli_connect("localhost", "id18166426_aluminum_database", "Ammar1Ashraf1_Senior", "id18166426_aluminumproject") or die(mysqli_connect_error());

  $query="select customer.CID from customer WHERE Email='$em'";
  $ex=mysqli_query($conn,$query)or die(mysqli_connect_error()) ;
  $a = mysqli_fetch_row($ex);


  

  $q="select orders.oid, orders.date,orders.price,orders.type,orders.design,orders.color from orders where cid='$a[0]' ";
  $result = mysqli_query($conn,$q)or die(mysqli_connect_error()) ;

  while($b=mysqli_fetch_array($result))

{
  
  echo
        "<p>".
        "Order ID: ".$b["oid"].
        "<br>"."Date: ".$b["date"].
        "<br>"."Price : ".$b["price"]."$".
        "<br>"."Type : ".$b["type"].
        "<br>"."Design : ".$b["design"].
        "<br>"."Color : ".$b["color"];
        
  echo "<hr>";
}

  
  ?>