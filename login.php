<HTML>
 
 
 
<body bgcolor=#87ceeb>
<?php
$uname=$_POST["name"];
$password=$_POST["password"];
 
if($uname == 'avcit' and $password == 'admin')
{	

$_SESSION['correctuser'] = $uname; //Start the session
 //Get the user name from the previously registered super global variable
 //If session not registered
 
     //maybe redirect to login page
 
 session_start();
header("location:admin_pan.php");// Redirect to login.php page
}
else{
    echo "<b>Invalid Login Credentials</b><br>";
    echo "<a href=index.html>Home</a>";
}
?>
</body>
</html>