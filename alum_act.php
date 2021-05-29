 <HTML>
 
 
 
<body bgcolor=#87ceeb>
<?php
$uname=$_POST["name"];
$passworda=$_POST["password"];
 $servername = "localhost";
$username = "root";
$password ="";
$dbname="forum";


 
// Create connection	
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
 
$query1= "Select * from `alum_det` where `regno`='".$uname."'"; 
 

$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
	 
 
 if( $uname==$row['regno'] and $passworda==($row['dob']))
 {
 session_start();
  header("location:alum.php");
}
else{
echo"Invalid Login Credentials";
echo"<br>";
echo"<b><a href=index.html>Click Here </a> </b>to Home Page";
}
}
?>  
	