  <html>
<Head>
<title>Higher Studies Information</title>
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
 
$query1= "Select * from higher"; 
 
$result=mysqli_query($conn,$query1);
echo"<table border=1px>";
while($row=mysqli_fetch_assoc($result))
{
	echo"<tr>";
	echo"<td>";
	
echo"<b> UserName<font color=red>:$row[username]</font>";
echo"<br>";
echo"<b>Name:<font color=red>$row[Name]</font>";echo"<br>"; 
echo"<b>Institution:<font color=red>$row[Insti]</font>";echo"<br>";
echo"<b>Institution Features<font color=red>:$row[instifut]</font>";echo"<br>";
echo"<b>Course<font color=red>:$row[course]</font>";echo"<br>";
echo"<b> Specification<font color=red>:$row[specic]</font>";echo"<br>";echo"<br>";
echo"<input type=submit value=View></input>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
 echo"</td>";
 echo"</tr>";
echo"<br>";echo"<br>";
}
echo"<table>";
?>
 

</body>
</html>