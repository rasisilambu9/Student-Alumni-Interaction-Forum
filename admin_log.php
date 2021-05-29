<HTML>
<HEAD>
<TITLE>Admin-Login</TITLE>
 <style>
body{
background-image:url("home-imgs.jpg");
background-repeat:no-repeat;
background-size:1500px 800px;
} 

/* Add a black background color to the top navigation */
 
.form1 {
  align:center;
  padding:120px;
   
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
   
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius:20px;
  box-sizing: border-box;
}
.a{
color:white;
margin-top:1900px;


}
</style>

 </HEAD>
<body>
  <div class="topnav">
  <a href="index.html">Home</a>
   <a href="sitemap.html">sitemap</a>
  
  <a href="about.html">About</a>
   
    
   </div>
 <center>
  <h3><center><font face="verdana" color=green>A.V.C COLLEGE OF ENGINEERING</CENTER></H3>
<H4><CENTER>DEPARTMENT OF INFORMATION TECHNOLOGY</H4>

 <form method=post action=login.php class="form1"> 
<CEnter><h4><font color=red face=verdana>ADMIN LOGIN</font></center>
<font color=black><b>Name</b></font><br>
<input type=text name="name" placeholder=Username></input><br>
<font color=black><b>Password</b></font><br>
<input type=password name="password" placeholder=password></input><br>
<button type=submit value=submit>submit</button>
</form>
<br>
<br>
<Br><br><br><br>
 
</center>
<HTML>
