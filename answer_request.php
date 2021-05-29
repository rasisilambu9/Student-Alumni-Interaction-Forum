<html>
<head>
<style>
 body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 
</style>
<title>request-answered</title>
</head>
<body>
<?php
$answer=$_POST["answer"];
$reqid=$_POST["reqid"];
   
$servername = "localhost";
$username = "root";
$password ="";
$dbname="forum";
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
$query1= "INSERT INTO `response` ( `responsed`,`reqid` ) VALUES ('$answer','$reqid')";
mysqli_query($conn,$query1);
$output=null;
$retval=null;
exec('python C:\Users\USER\.spyder-py3\mails.py studentalumniavcit@gmail.com', $output, $retval);
 
?>
<font color=green size=4em>
Thank You For your Response..!! <br> Your response Added successfully
<a href="alum.php">click here</a> to go to alumni panel</font>
</body>
</html>