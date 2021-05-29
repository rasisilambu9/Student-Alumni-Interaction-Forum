<html>
<Head>
<title> Admit-Page</title></Head>
 <style>
  body{
background-image:url("home-imgs.jpg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav button{
   
  float: right;
  padding:6px;
  margin-top:6px;
  border-radius:10px;
  background:green;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.topnav input[type=text]{
   
   padding:6px;
  margin-top: 8px;
  margin-left:790px;
  border: none;
  border-radius:10px;
}
button {
  background-color:green;
  color: white;
  padding: 8px 20px;
  margin: 8px 0;
  border: black 1px;
  cursor: pointer;
  border-radius:10px;
   
}
input[type=text], input[type=password] {
   
  
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius:20px;
  box-sizing: border-box;
}
.img1 img {
   width: 180px;
     border: 5px solid red;
  height: 150px;
  object-fit: contain;
  border-radius:20%;
  border-color:black;
  padding:60x 20px;
  margin:150px 0;
}
 
.my{
padding:-100px;
}
a{
color:black;
}
</style>

 </HEAD>
<body>

  <div class="topnav">
  <a class="books" href="sitemap.html">Sitemap<a>
  <a href="about.html">About</a>
 
 </div>
 <br><br>
<center>
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
 
$query1= "Select * from `alum_det` where `status`=0"; 
 
echo"<table border=1px>
 <tr>
     
     <th>Reg No</th>
     <th>Name</th>
     <th>Company</th>
	  <th>DOB</th>
	  <th>Mail ID</th>
	   <th>Phone No</th>
	   <th>Accept</th>
     </tr>";
     
$result=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result)){
echo"<tr>";
 
echo"<td>".$row["regno"]."</td>";
echo"<td>".$row["name"]."</td>";
echo"<td>".$row["company"]."</td>";
echo"<td>".$row["dob"]."</td>";
echo"<td>".$row["mail"]."</td>";
echo"<td>".$row["phno"]."</td>";
 echo'<td><Button type=submit value=submit name=submit><a href=admit_act.php>Accept</a></button></td>';
 }
     
 

?>

</center>
</body>
</html>