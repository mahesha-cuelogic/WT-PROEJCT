<PHP>
<head> 
</head>
<style>
ul	{	list-style-type: none;
		background-color:  #f1f1f1;
		
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
li{float:left;}
li a{	display:block;
		color:#000;
		padding:14px 16px;
		  text-align: center;
		text-decoration: none;
	}
li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;}
td {
    padding: 15px;
}
body {
    background-image: url("175.jpg");
}
</style>

<img src="Capture.JPG">
<ul> <li ><a  href="http://127.0.0.1/myphp/WT%20PROJECT/HOMEadminlog.PHP"> admin login</a> </li>
<li><a class="active" href="http://127.0.0.1/myphp/WT%20PROJECT/employelog.php">Employee login</a></li></ul>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table align="center">
<tr>
<td>employeename:</td><td><input type="text", name="empname",value=""></td></tr>
<tr><td>password:</td><td><input type="password", name="password", value=""></td></tr>
<tr><td></td><td><input type="submit" value="login" name="login"></td>
<tr><td></td><td><input type="submit" value="sign up" name="signup"></td> </table>
<br>
</body>
<?php
session_start();
@$usernm=$_POST['empname'];
@$pwd=$_POST['password'];
$_SESSION['login_user']= $usernm;
$_SESSION['login_pwd']= $pwd;
$var=mysqli_connect("localhost","root","","project");

	if(isset($_POST['login'])){
	$usernm = stripslashes($usernm);
$pwd = stripslashes($pwd);
$usernm = mysqli_real_escape_string($var,$usernm);
$pwd = mysqli_real_escape_string($var,$pwd);
$sql="SELECT * FROM employeereg WHERE emp_username='$usernm' and emp_password='$pwd'";
$result=mysqli_query($var,$sql);
$count=mysqli_num_rows($result);

// If result matched myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("login_user");
session_register("login_pwd"); 
header("location:employeelogin.php");
}
else {
echo "<h3>Wrong Username or Password!!</h3>";
}
	}
?>
</PHP>