  <HTML>
<head>
<title>Higher Studies Updated</title>
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
$insti=$_POST["insti"];
$feat=$_POST["feat"];
$course=$_POST["course"];
$spfy=$_POST["spfy"];

$i=1;    
$servername = "localhost";
$username = "root";
$password ="";
$dbname="forum";
$query1= "INSERT INTO `higher` ( `username`,`Name`,`Insti`,`instifut`,`course`, `specic`) VALUES ('$user','$name','$insti','$feat','$course','$spfy')";
 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
 
 
    if(mysqli_query($conn,$query1)){
	  echo"<table border=1px >
     <tr>
     <th>UserName</th>
     <th>Name</th>
     <th>Institution</th>
     <th>Features</th>
	 <th>Course</th>
     <th>Specifications</th>
     </tr>
      <tr>
      <td>$user</td>
      <td>$name</td>
       <td>$insti</td>
      <td>$feat</td>  
	  <td>$course</td>
	  <td>$spfy</td>
     </tr>
     </table>";
 echo"<br>"; echo"<br>"; echo"<br>";
 
	
	}
?>
<font color="red"><b>Higher Studies Details Added Successfully<b><font>
</div>
</body>
</html>