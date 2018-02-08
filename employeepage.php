<PHP>
<head> 
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
    border-collapse: collapse;
    width: 100%;
}

th{
	background-color: #4CAF50;
    color: white;
}
th, td {
	  
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
tr:hover{background-color:#f5f5f5}
</style>
<body bgcolor="gray">
<img src="Capture.JPG"><br>
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
    <a href="HOMEPAGE.php" class="dropbtn"  >Logout</a>
   
     
    </div>
  </li>
</ul>

<h3 align="center">Employee Details</h3><br>
<form method = "GET" action = "<?php $_PHP_SELF ?>" align="center">
<input type="submit" name='update' class="button" value="update">
<input type="submit" name='delete'  class="button" value="delete">
<input type="submit" name='search'  class="button" value="search">

<!--<form> <input type="text" name="name" value=""> <input type="submit" value="find" name="find"></form> -->
<?php $con1=mysqli_connect("localhost","root","","project");
		$result=mysqli_query($con1,"select *from employeereg");
		
		echo "<table border=2 >
	<tr>
		<th>emp_id</th>
		<th>empname</th>
		<th>empfatname</th>
		<th>emp_username</th>
		<th>dob</th>
		<th>dept</th>
		<th>degree</th>
		<th>doj</th>
		<th>mobno</th>
		<th>city</th>
		<th>basic salary</th>
	</tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['emp_id']."</td>";
		echo"<td>".$row['empname']."</td>";
		echo"<td>".$row['empfatname']."</td>";
		echo"<td>".$row['emp_username']."</td>";
		echo "<td>".$row['dob']."</td>";
		echo"<td>".$row['dept']."</td>";
		echo"<td>".$row['degree']."</td>";
		echo"<td>".$row['doj']."</td>";
		echo "<td>".$row['mobno']."</td>";
		echo"<td>".$row['city']."</td>";
		echo"<td>".$row['basicsalary']."</td>";
		echo "</tr>";
	}	echo "</table>";
?>


<?php
 if(isset($_GET['refresh']))
 {
	  echo"<button onclick='myFunction()'></button>

<script>
function myFunction() {
    location.reload();
}";
 }
 if(isset($_GET['search']))
	{	echo"<h1 >enter employee_id</h1>"."<input type='text' name='eid' value='' >";
	echo"<input type='submit' name='find' value='enter'>";
	}
	if(isset($_GET['find']))
{	@$id=$_GET['eid'];
	
		$result=mysqli_query($con1,"select *from employeereg where Emp_id='$id'");
		if($result){
		echo "<h1>search Result</h1><table border=2 >
	<tr>
		<th>emp_id</th>
		<th>empname</th>
		<th>empfatname</th>
		<th>emp_username</th>
		<th>dob</th>
		<th>dept</th>
		<th>degree</th>
		<th>doj</th>
		<th>mobno</th>
		<th>city</th>
		<th>basic salary</th>
	</tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['emp_id']."</td>";
		echo"<td>".$row['empname']."</td>";
		echo"<td>".$row['empfatname']."</td>";
		echo"<td>".$row['emp_username']."</td>";
		echo "<td>".$row['dob']."</td>";
		echo"<td>".$row['dept']."</td>";
		echo"<td>".$row['degree']."</td>";
		echo"<td>".$row['doj']."</td>";
		echo "<td>".$row['mobno']."</td>";
		echo"<td>".$row['city']."</td>";
		echo"<td>".$row['basicsalary']."</td>";
		echo "</tr>";
	}	echo "</table>";
	}
		
}
if(isset($_GET['delete']))
	{	echo"<h1 >enter employee_id</h1>"."<input  type='text' name='eid' value='' >";
	echo"<input type='submit' name='del' value='enter'>";
	}
	if(isset($_GET['del']))
{
	
		@$id=$_GET['eid'];
		$deln=mysqli_query($con1,"DELETE FROM employeereg WHERE Emp_id='$id'");
		if($deln){
			echo"deletted successfully";
			header("location:empdetails.php");
		}
		else
			echo"deletion unsuccessful";
	}	
if(isset($_GET['update']))
{	
	echo"<h1 >enter employee_id</h1>"."<input type='text' name='eid' value='' >";
	echo"<input type='submit' name='enter' value='enter'>";
}	
if(isset($_GET['enter']))
{	
	@$eid=$_GET['eid'];
	$result=mysqli_query($con1,"select *from employeereg where emp_id='$eid' ");
	if($result){
	while($row=mysqli_fetch_array($result))
	{
		
	@$emid=$row['emp_id'];
	@$empnm=$row['empname'];
	@$fatname=$row['empfatname'];
	@$empusnm=$row['emp_username'];
	@$pwd=$row['emp_password'];
	@$empdob=$row['dob'];
	@$empdept=$row['dept'];
	@$deg=$row['degree'];
	@$empdoj=$row['doj'];
	@$empmono=$row['mobno'];
	@$empcity=$row['city'];
	@$empbs=$row['basicsalary'];
	}
	echo"<h1>update the information</h1>";
	echo"<table align='center'>
<tr><td>Employee ID: </td><td><input type='number' name='emp_id' value='$emid'></td></tr>
<tr><td>Employee name:</td><td><input type='text' name='empname' value='$empnm'></td></tr>
<tr><td>fathers name:</td><td> <input type='text' name='empfatname' value='$fatname'></td></tr>
<tr><td>username:</td><td> <input type='text' name='usname' value='$empusnm'></td></tr>
<tr><td>password:</td><td> <input type='text' name='password' value='$pwd'></td></tr>

<tr><td>Date of birth:</td><td><input type='date' name='dob' value='$empdob'></td></tr>
<tr><td>Department:</td><td><input type='text' name='dept' value='$empdept'></td></tr>
<tr><td>degree:</td><td><input type='text' name='degree' value='$deg'></td></tr>
<tr><td>date of join:</td><td><input type='date' name='doj' value='$empdoj'></td></tr>
<tr><td>mobile number:</td><td><input type='number' name='mobno' value='$empmono'></td></tr>
<tr><td>city:</td><td> <input type='text' name='city' value='$empcity'></td></tr>
<tr><td>basic salary:</td><td><input type='number' name='basicsalary' value='$empbs'></td></tr>
<tr><td></td><td><input type='submit' name='updatetodatabase' value='updatetodatabase'></td></tr>
</table>";
}
}

if(isset($_GET['updatetodatabase']))
{
	@$emid1=$_GET['emp_id'];
	@$empnm1=$_GET['empname'];
	@$fatname1=$_GET['empfatname'];
	@$empusnm1=$_GET['usname'];
	@$pwd1=$_GET['password'];
	@$empdob1=$_GET['dob'];
	@$empdept1=$_GET['dept'];
	@$deg1=$_GET['degree'];
	@$empdoj1=$_GET['doj'];
	@$empmono1=$_GET['mobno'];
	@$empcity1=$_GET['city'];
	@$empbs1=$_GET['basicsalary'];
	$updt=mysqli_query($con1,"UPDATE employeereg SET emp_id='$emid1', empname='$empnm1', empfatname='$fatname1',emp_username='$empusnm1',emp_password='$pwd1', dob='$empdoj1',dept='$empdept1',degree='$deg1',doj='$empdoj1',mobno='$empmono1',city='$empcity1',basicsalary='$empbs1' WHERE Emp_id =$emid1");
	if($updt)
	{	
		echo"<script>window.alert('updated successfully!!')</script>";
		header("location:empdetails.php");
	}
	else
		echo"updation unsuccessful";
}
?>
</body>
</PHP>