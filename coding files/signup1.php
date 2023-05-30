<?php
 session_start();
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="design1.css"
    rel="stylesheet" />

  </head>
  <body>
     
    <div class="signup-box">
      <h1>Sign Up</h1>
     
      <form action="signup1.php" method="post" >
        
        <label>Full Name</label>
        <input type="text" name="Name" placeholder="" required/>
   
        <label>Address</label>
        <input type="text" name="Address" placeholder="" required/>

        <label>Email</label>
        <input type="email" name= "Email" placeholder="" required/>
        
        <label>Password</label>
        <input type="password"name="Password" placeholder="" required/>
        
        <label>Confirm Password</label>
        <input type="password"name="ConfirmPassword" placeholder="" required/>
        

        <label>Gender</label>
       
        <div class="Gender">
            <select name="Gender" id="Gender"  required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option> </select></div>
    

        <label>Date of birth</label>
        <input type="date"name="Dob" placeholder="" required/>
        
        <label>Phone number</label>
        <input type="text"name="Phonenumber" placeholder="" required/>
<br> </br>
<br> </br>
        <input type="submit" value="Submit" name="submit" />

      </form>

    </div>

    <p class="para-2">
      Already have an account? <a href="index.php">Login here</a>
    </p>
  

</body>
</html>
<?php 



if (isset($_POST['submit'])){ 

$name =  $_POST['Name'];
$add  =  $_POST['Address'];
$e    =  $_POST['Email'];
$pass =  $_POST['Password'];
$conf =  $_POST['ConfirmPassword'];
$g    =  $_POST['Gender'];
$dob  =  $_POST['Dob'];
$pn   =  $_POST['Phonenumber'];



  if($pass==$conf)
	{

  $conn =  mysqli_connect("localhost","id18166426_aluminum_database","Ammar1Ashraf1_Senior","id18166426_aluminumproject")or die(mysqli_connect_error());

  $sql="INSERT INTO customer (Name,Address,Email,Password,Gender,Dateofbirth,Phonenumber) VALUES ('$name','$add','$e','$pass','$g','$dob','$pn')";
  
  $result=mysqli_query($conn,$sql)or die(mysqli_connect_error()) ;
 
}

else
{
echo '<script>alert("Password does not match")</script>';
}


}
  ?>