<PHP>
<head> 
</head>
<link rel="stylesheet" href="styless.css">
</style>
<body bgcolor="gray">

<img src="Capture.JPG">
<ul> <li ><a class="active" href="http://127.0.0.1/myphp/WT%20PROJECT/HOMEadminlog.PHP"> admin login</a> </li>
<li><a href="http://127.0.0.1/myphp/WT%20PROJECT/employelog.PHP">Employee login</a></li></ul>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<table align="center">
<tr>
<td>admin:</td><td><input type="text", name="empname",value=""></td></tr>
<tr><td>password:</td><td><input type="password", name="password", value=""></td></tr>
<tr><td></td><td> <input type="submit" value="login" name="login"></td></tr>
 </table>
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
$sql="SELECT * FROM admin WHERE username='$usernm' and password='$pwd'";
$result=mysqli_query($var,$sql);
$count=mysqli_num_rows($result);

// If result matched myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("login_user");
//session_register("login_pwd"); 
header("location:admins page.php");
}
else {
echo "<script>window.alert('Wrong Username or Password!!');</script>";
}
	}
?></PHP>