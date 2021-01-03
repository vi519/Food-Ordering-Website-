<?php
$conn=mysqli_connect("localhost","root","","reg_log");

?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<?php

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];

$query="insert into reg(username,password,confirmpassword,mobile,email,address,city,state)values('$username','$password','$confirmpassword','$mobile','$email','$address','$city','$state')";
$run=mysqli_query($conn,$query);

if($run){
	echo"Data insert successfully...";
}	
else{
	echo"error;",mysqli_error($conn);
}
}

?>

<center><h1><label>REGISTRATION FORM</label></h1></center>
<div class="form">
<main id=main>
<form action="" method="POST">
<center>
<table>
<tr>
<td><label>User Name</label></td>
<td><input type="text" name="username" placeholder="username" required="" class="form-control inputbox"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" placeholder="password" required="" class="form-control inputbox"></td>
</tr>
<tr>
<tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmpassword" placeholder="confirm password" required="" class="form-control inputbox"></td>
</tr>
<td><label>Mobile No.</label></td>
<td><input type="text" name="mobile" placeholder="mobile no" required="" class="form-control inputbox"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" placeholder="email" required="" class="form-control inputbox"></td>
</tr>
<tr>
<td><label>Address</label></td>
<td><input type="text" name="address" placeholder="address" required="" class="form-control inputbox"></td>
</tr>
<tr>
<td><label>City</label></td>
<td><input type="text" name="city" placeholder="city" required="" class="form-control inputbox"></td>
</tr>
<tr>
<td><label>State</label></td>
<td><input type="text" name="state" placeholder="state" required="" class="form-control inputbox"></td>
</tr>
<tr>
<td><input type="submit" value="submit" name="submit" class="btn"></center></td>
</tr>
</table>

</form>
</body>

</html>