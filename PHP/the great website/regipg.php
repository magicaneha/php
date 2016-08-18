<?php
	if(isset($_post["sb"]))
	{
		$name = trim($_POST["name"]);
		$uname = trim($_POST["uname"]);
		$pass = trim($_POST["pass"]);
		$cpass = trim($_POST["cpass"]);
		$age = trim($_POST["age"]);
		$city = trim($_POST["city"]);
		mysql_connect("localhost","root") or die("server not found");
		mysql_select_db("talkspot");
		$chck = mysql_query("select *from checkit");
		while($row = mysql_fetch_array($chck))
		{
			if($uname==$row["uname"])
			{
				$_SESSION["un1"] = "the name is already registered , plz choose another user name";
				break;
				document.frm.uname.focus();
		    }
		}
	}
?>
<html>
<head>
	<title>www.registrationpage.com</title>
	<style type="text/css">
		.formdesign input
		{
			border:  solid #CC0033 thin;
			font-family:"Courier New", Courier, monospace;
			background:#FFFFCC;
		}
		.formdesign 
		{
			border:10px #BDB597 solid;
			background-color:#FFCCFF;
			border-bottom-style:solid ;
			border-bottom-color:#000000;
		}
	</style>
</head>
<body>
	<form action="savy.php"  method="post" name = "frm">
		<table border="0" width="650px"  class="formdesign" cellpadding="3px">
			<caption font-family: Helvetica  font-size:16px  font-weight:bold color:#CC3300 padding:10px;> REGISTRATION FORM</caption>
			<tr><td>
						<tr><td>NAME : </td><td><input type="text" name="name"></td></tr>
						<tr><td>USER NAME : </td><td><input type="text" name="uname">
							<?php
								if(isset($_SESSION["un1"]))
									echo "<font color = red>".$_SESSION["un"]."</font>";
							?>
						</td></tr>
						<tr><td>PASSWORD : </td><td><input type="password" name="pass"></td></tr>
						<tr><td>CONFIRM PASSWORD : </td><td><input type="password" name="cpass"></td></tr>
						<tr><td>AGE : </td><td><input type="text" name="age"></td></tr>
						<tr><td>CITY : </td><td><input type="text" name="city"></td></tr>
						<tr><td>GENDER : </td><td><input type="radio" name="gender">MALE
												  <input type="radio" name="gender">FEMALE</td></tr>
						<TR><TD colspan="2" align="right"><input type="submit" name="sb" value="submit"></TD></TR>
					</table>
				</td></tr></tr>
			</table>
		</form>
</body>
</html>