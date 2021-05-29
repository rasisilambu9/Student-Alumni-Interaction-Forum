 <html>
<Head>
<title> Request</title>
<style>

body{
background-image:url("home-imgs.jpg");
background-repeat:no-repeat;
background-size:1500px 800px;
}
input[type=int]
{
font-color:red;
border-radius:10px;
border-color:white;
size:2px;
}	
</style>
</Head>

<body >

<?php
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
 
$query1= "Select * from request"; 
 
$result=mysqli_query($conn,$query1);


echo"<table border=1>";
while($row=mysqli_fetch_assoc($result))
 

{
	
	echo"<tr>";echo"<td>";
	echo"<form method=post action=res.php>";
echo"<b> Register Number<font color=red>:$row[regno]</font></input>";
echo"<br>";
echo"<b>Name:<font color=red>$row[Name]</font>";echo"<br>"; 
echo"<b>Request:<font color=red>$row[Request]</font>";echo"<br>";echo"<br>";
echo"Request ID:";
echo"<input type=int name=reqid value=$row[reqid] size=1 ></input>";echo"<br>";echo"<br>";
echo"<input type=submit value=Response  color=red></input>";
echo"<br>";echo"<br>";
echo"<br>";

echo"</td>";
echo"<tr>";
echo"</form>";
 
}
?>

</body>
</html>