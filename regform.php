<PHP>
<head> 
</head>
<style>ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: green;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}body {
    background-image: url("175.jpg");
}
table {
	
    width: 40%;
}

th {
    height: 100px;
}
td {
    height: 50px;
    vertical-align: bottom;
}
</style>
<body bgcolor="gray">
<img src="Capture.JPG">
<ul>
  <li class="dropdown">
    <a href="#" class="dropbtn">Employees</a>
    <div class="dropdown-content">
      <a href="http://127.0.0.1/myphp/WT%20PROJECT/regform.php">Register a new Employee</a>
      <a href="http://127.0.0.1/myphp/WT%20PROJECT/empdetails.php">Employee Details</a>
      <a href="#">Exit</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="#" class="dropbtn">payroll</a>
    <div class="dropdown-content">
      <a href="#">Generate a payslip</a>
      <a href="#">view old payslips</a>
    </div>
	<li class="dropdown">
    <a href="#" class="dropbtn">Requests</a>
    <div class="dropdown-content">
      <a href="#">View leave Requests</a>
     
    </div>
  </li>
  <li class="dropdown" style="float:right;" >
    <a href="#" class="dropbtn"  >Logout</a>
   
     
    </div>
  </li>
</ul>

<form method = "POST" action = "<?php $_PHP_SELF ?>">
<table align="center">
<tr><td>Employee ID: </td><td><input type="number" name="emp_id" value="">*</td></tr>
<tr><td>Employee name:</td><td><input type="text" name="empname" value="">*</td></tr>
<tr><td>fathers name:</td><td> <input type="text" name="empfatname" value=""></td></tr>
<tr><td>username:</td><td> <input type="text" name="usname" value=""></td></tr>
<tr><td>Password:</td><td> <input type="password" name="epassword" value=""></td></tr>
<tr><td>Date of birth:</td><td><input type="date" name="dob" value=""></td></tr>
<tr><td>Department:</td><td><input type="text" name="dept" value=""></td></tr>
<tr><td>Designation:</td><td><input type="text" name="degree" value=""></td></tr>
<tr><td>date of join:</td><td><input type="date" name="doj" value=""></td></tr>
<tr><td>mobile number:</td><td><input type="number" name="mobno" value="">*</td></tr>
<tr><td>city:</td><td> <input type="text" name="city" value=""></td></tr>
<tr><td>basic salary:</td><td><input type="number" name="basicsalary" value=""></td></tr>
<tr><td></td><td><input type="submit" name="save" value="save"></td></tr>
</table></FORM>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

if(isset($_POST['save']))
{	
	$eid=$_POST['emp_id'];
	$ename=$_POST['empname'];
	$efathname=$_POST['empfatname'];
	$dobirth=$_POST['dob'];
	$department=$_POST['dept'];
	$degre=$_POST['degree'];
	$dojoining=$_POST['doj'];
	$mn=$_POST['mobno'];
	$usernm=$_POST['usname'];
	$pwd=$_POST['epassword'];
	$ct=$_POST['city'];
	$bs=$_POST['basicsalary'];
		if (empty($ename))
{
echo "<script>window.alert('PLEASE ENTER employee name');</script>";

}elseif (!preg_match("/^[a-zA-Z]*$/",$ename))
{
echo "<script>window.alert('invalid employee name');</script>";
echo"<br>";}
elseif(empty($eid))
{
echo "<script>window.alert('PLEASE ENTER employee_id');</script>";	
}
elseif(empty($mn)) 
		{echo "<script>window.alert('mobile no. is blank');</script>";}
		else if(strlen($mn)!=10)
		echo "<script>window.alert('mobile no. is invalid');</script>";
	else{
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql=mysqli_query($conn,"INSERT INTO employeereg(emp_id, empname, empfatname,emp_username,emp_password, dob,dept,degree,doj,mobno,city,basicsalary) 
	VALUES ($eid,'$ename','$efathname','$usernm','$pwd','$dobirth','$department','$degre','$dojoining',$mn,'$ct',$bs)");
	if($sql)
		echo"<script>window.alert('registered successfully!!')</script>";
	else
		echo"<script>window.alert('registration unsuccessful!!')</script>";

}
}

?>
</body>
</PHP>