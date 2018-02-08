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
</style>
<body bgcolor="gray">
<img src="C:\Users\Admin\Desktop\project\Capture.JPG">
<ul> <li ><a  href="C:\myphp\WT PROJECT\HOMEadminlog.PHP"> admin login</a> </li><li><a class="active" href="C:\myphp\WT PROJECT\departhead.PHP">Department login</a></li><li><a href="C:\myphp\WT PROJECT\employelog.PHP">Employee login</a></li></ul>
<table align="center">
<tr>
<td>depart head name:</td><td><input type="text", name="empname",value=""></td></tr>
<tr><td>password:</td><td><input type="password", name="password", value=""></td></tr>
<tr><td></td><td><input type="submit" value="login" name="login"></td>
<tr><td></td><td><input type="submit" value="sign up" name="signup"></td> </table>
<br>
</body>
</PHP>