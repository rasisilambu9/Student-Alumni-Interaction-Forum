  <HTML>
<head>
<title>Intership Updated</title>
<style>
 body{
background-image:url("home-imgs.jpeg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 
 
.almnt{
margin-top:300px;
margin-left:480px;
border-radius:10px;}
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
  margin-top: 8px;
  border-radius:10px;
  background:green;
  font-size: 17px;
  border: none;
  cursor: pointer;

}
.topnav input[type=text]{
   
   padding:8px;
  margin-top: 8px;
  margin-left:950px;
  border: none;
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

</style>
</head>
<body>
 <div class="topnav">
  <a  href="index.html">Home</a>
 
  <a href="about.html">About</a>
   
   </div>
<div class="almnt"> 
<?php
$user=$_POST["rollno"];
$name=$_POST["name"];
$comp=$_POST["comp"];
$post=$_POST["post"];
$desc=$_POST["desc"];
$cont=$_POST["phno"];

$i=1;    
$servername = "localhost";
$username = "root";
$password ="";
$dbname="forum";
$query1= "INSERT INTO `inplant` ( `username`,`Name`,`company`,`posting`,`prerequiste`, `contact`) VALUES ('$user','$name','$comp','$post','$desc','$cont')";
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
 
 
    if(mysqli_query($conn,$query1)){
	  echo"<table border=1px color=blue>
     <tr>
     <th>UserName</th>
     <th>Name</th>
     <th>Company</th>
     <th>Post Of Job</th>
	 <th>Description</th>
     <th>Phone NO</th>
     </tr>
      <tr>
      <td>$user</td>
      <td>$name</td>
       <td>$comp</td>
      <td>$post</td>  <td>$desc</td>
	  <td>$cont</td>
     </tr>
     </table>";
 echo"<br>"; echo"<br>"; echo"<br>";
 
	
	}
?>
<font color="red"><b>Inplant Training Details Added Successfully<b><font>
</div>
</body>
</html>