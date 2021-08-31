  <html>
<Head>
<title>Responses</title>
<style>

body{
background-image:url("home-imgs.jpg");
background-repeat:repeat;
background-size:1800px 800px;
} 
</style>
</Head>

<body >
<?php
echo"<font color=green><b>Responses From Alumni!!!.Kindly Use It</b></font>";
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
 
$query1= "Select * from response"; 

 
$result=mysqli_query($conn,$query1);
echo"<table border=1>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>";
 
echo"<b> Responses<font color=red>:$row[responsed]</font>";echo"<br>";echo"<br>";
$query2="select * from request where `reqid`=$row[reqid]";

$result2=mysqli_query($conn,$query2);
while($row1=mysqli_fetch_array($result2)){
echo"<b>Request Asked<font color=red>:$row1[Request]</font></b>";
}
echo"<br>";

 
 echo"</td>";echo"</tr>";
echo"<br>";echo"<br>";
}
echo"<table>";

?>
 

</body>
</html>