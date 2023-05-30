<?php
 session_start();

if (isset($_POST['submit'])) {
  $_SESSION['cemail']=$_POST['email'];
  $email   =     $_POST['email'];
  $pass    =     $_POST['password'];


  $conn =  mysqli_connect("localhost", "id18166426_aluminum_database", "Ammar1Ashraf1_Senior", "id18166426_aluminumproject") or die(mysqli_connect_error());
  $sql = "SELECT * from customer where Password='" . $pass . "' AND Email='" . $email . "'";
  $result = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($result);

  if ($rows == 1) {
    header("location: home.php");
   
  }
  else{
    echo '<script>alert("Invalid email or password")</script>';
  
}


}
?>

<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="design1.css" />

</head>
<header>

  <div class="view">
    <li><a href="vp.php">View Products</a></li>
  </div>
</header>

<body>


  <div class="welcome">
    <h2>Welcome To The Aluminium World</h2>
  </div>

  <div class="login-box">

    <h1>Login</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

      <label>E-mail</label>
      <input type="text" name="email" placeholder="" required />
      <label>Password</label>
      <input type="password" name="password" placeholder="" required />
      <input type="submit" name="submit" value="Log-in" />
      <br></br>

    </form>

  </div>




  <p class="para-2">
    Not have an account? <a href="signup1.php">Sign Up Here</a>
  </p>


</body>

</html>
