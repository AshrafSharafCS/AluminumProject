<?php session_start(); 
$count = 0;
$door=$closet=$window=$kitchen=" ";
$a=$b=$c=$d=" ";
$dd=$dc=$wt=$wc=$cd=$cc=$kd=$kc=" ";

?>
<?php



$conn =  mysqli_connect("localhost", "id18166426_aluminum_database", "Ammar1Ashraf1_Senior", "id18166426_aluminumproject") or die(mysqli_connect_error());


if (isset($_POST['order'])) {


  if (isset($_POST['designd']) && isset($_POST['colord'])) {
    $dd = $_POST['designd'];
    $dc = $_POST['colord'];
    $door  = $_POST['door'];

    $q1 = "select items.price from items WHERE Type='$dd'";
    $ex1 = mysqli_query($conn, $q1) or die(mysqli_connect_error());
    $res1 = mysqli_fetch_row($ex1);

    $a = "$dd" . "  " . "$dc" . "  " . "$door\t$res1[0]$";
    $count = $count + $res1[0];
    
  }




  if (isset($_POST['typew']) && isset($_POST['colorw'])) {
    $wt = $_POST['typew'];
    $wc = $_POST['colorw'];
    $window = $_POST['window'];

    $q2 = "select items.price from items WHERE Type='$wt'";
    $ex2 = mysqli_query($conn, $q2) or die(mysqli_connect_error());
    $res2 = mysqli_fetch_row($ex2);

    $b = "$wt" . "  " . "$wc" . " " . " $window\t$res2[0]$";
    $count = $count + $res2[0];
   
  }


   if (isset($_POST['designc']) && isset($_POST['colorc'])) {
    $cd = $_POST['designc'];
    $cc = $_POST['colorc'];
    $closet=$_POST['closet'];

    $q3 = "select items.price from items WHERE Type='$cd'";
    $ex3 = mysqli_query($conn, $q3) or die(mysqli_connect_error());
    $res3 = mysqli_fetch_row($ex3);

    $c = "$cd" . "  " . "$cc" . " "."  $closet\t$res3[0]$";
    $count = $count + $res3[0];
  }




   if (isset($_POST['designk']) && isset($_POST['colork'])) {
    $kd = $_POST['designk'];
    $kc = $_POST['colork'];
    $kitchen=$_POST['kitchen'];
    $q4 = "select items.price from items WHERE Type='$kd'";
    $ex4 = mysqli_query($conn, $q4) or die(mysqli_connect_error());
    $res4 = mysqli_fetch_row($ex4);

    $d = "$kd" . "  " . "$kc" ." ". "  $kitchen\t$res4[0]$";
    $count = $count + $res4[0];
  }


if($count!=0){
  $type=$door."\t".$window."\t".$closet."\t".$kitchen;
  $design=$dd."\t".$wt."\t".$cd."\t".$kd;
  $color=$dc."\t".$wc."\t".$cc."\t".$kc;

  $date =date("d.m.Y");

  $em = $_SESSION['cemail'];
  $q5 = "select customer.CID from customer WHERE Email='$em'";
  $ex5 = mysqli_query($conn, $q5) or die(mysqli_connect_error());
  $res5 = mysqli_fetch_row($ex5);

  $q8="INSERT INTO orders (Date,Price,Type,Design,Color,CID) VALUES ('$date','$count','$type','$design','$color','$res5[0]')";
  $ex8=mysqli_query($conn, $q8) or die(mysqli_connect_error());
   
  $q9 = "select orders.OID from orders WHERE Date='$date' AND Price='$count' AND Type='$type' AND Design='$design' AND  Color='$color' AND CID='$res5[0]'";
  $ex9 = mysqli_query($conn, $q9) or die(mysqli_connect_error());
  $res9 = mysqli_fetch_row($ex9);  
  
 $_SESSION['oid']=$res9[0];


}
else
{  
      echo '<script>alert("Order Empty")</script>';
    }

}
        if (isset($_POST['submitconfirm'])&&!empty($_SESSION['oid'])) {

  $loc = $_POST['location'];
  $em = $_SESSION['cemail'];
  
  $oid=$_SESSION['oid'];

 
  $q7 = "select customer.CID from customer WHERE Email='$em'";
  $ex7 = mysqli_query($conn, $q7) or die(mysqli_connect_error());
  $res7 = mysqli_fetch_row($ex7);



  $q6 = "INSERT INTO workshop (Location,CID,OID) VALUES ('$loc','$res7[0]','$oid')";
  
  $ex6 = mysqli_query($conn, $q6) or die(mysqli_connect_error());
  
    echo '<script>alert("Order Accepted")</script>'; 



    }


?>




<html>

<head>
  <title>Confirm Order</title>
  <link rel="stylesheet" href="orderconfirm.css" rel="stylesheet" />

</head>


<header>
  <div class="head">
    <ul>
      <li><a href="order1.php">Order</a></li>


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
    

  <div class="oo">

    <form id="a" action="confirmorder.php" method="post">
      <br>
      <label id="b">Location of your workhop </label>
      <br>
      <input id="c" type="text" name="location" placeholder="" required>


      <br>
      <br>
      <label id="b">Your Order : </label>



      <p> <?php echo "<br>" .
            $a . " <br> " .
            $b . " <br> " .
            $c . " <br> " .
            $d . " <br> " . "<br>" .
            "Price : " . $count . "$"; ?> </p>


      <input type="submit" name="submitconfirm" value="Confirm Order">
    </form>
  </div>










</body>
</html>