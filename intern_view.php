  <html>
<Head>
<title> Internship Details</title>
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
 
$query1= "Select * from intern"; 
 
$result=mysqli_query($conn,$query1);
echo"<table border=1>";
while($row=mysqli_fetch_assoc($result))
{
	echo"<tr>";
	echo"<td>";
echo"<b> UserName<font color=red>:$row[username]</font>";
echo"<br>";
echo"<b>Name:<font color=red>$row[Name]</font>";echo"<br>"; 
echo"<b>Company:<font color=red>$row[company]</font>";echo"<br>";
echo"<b> Posting<font color=red>:$row[posting]</font>";echo"<br>";
echo"<b>prerequiste<font color=red>:$row[prerequiste]</font>";echo"<br>";
echo"<b> Contact Number<font color=red>:$row[contact]</font>";echo"<br>";echo"<br>";
echo"<input type=submit value='Apply for this Intern'></input>";echo"\t";
echo"<input type=submit value='View this Intern'></input>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
 echo"</td>";echo"</tr>";
echo"<br>";echo"<br>";
}
echo"<table>";
?>
 

</body>
</html>