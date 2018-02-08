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

 
</style>
<body bgcolor="gray">
<img src="Capture.JPG"><br>
<ul>
  <li class="dropdown">
    <a href="#" class="dropbtn">Employees</a>
    <div class="dropdown-content">
      <a href="http://127.0.0.1/myphp/WT%20PROJECT/regform.php">Register a new Employee</a>
      <a href="http://127.0.0.1/myphp/WT%20PROJECT/empdetails.php">Employee Details</a>
      <a href="http://127.0.0.1/myphp/WT%20PROJECT/HOMEPAGE.php">Exit</a>
	  
    </div>
  </li>
    <li class="dropdown">
    <a href="#" class="dropbtn">payroll</a>
    <div class="dropdown-content">
      <a href="#">Generate a payslip</a>
      <a href="#">view old payslips</a>
	  
    </div>
	<li class="dropdown" >
    <a href="#" class="dropbtn">Requests</a>
    <div class="dropdown-content">
      <a href="#">View leave Requests</a>
     
    </div>
  </li >
  <li class="dropdown" style="float:right;" >
    <a href="#" class="dropbtn"  >Logout</a>
   
     
    </div>
  </li>
</ul>


</body>
</PHP>