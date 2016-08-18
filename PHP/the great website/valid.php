<?php
	session_start();
	extract($_POST);
	mysql_connect("localhost","root") or die("server not found");
	mysql_select_db("talkspot");
	$chck = mysql_query("select *from checkit");
	while($row = mysql_fetch_array($chck))
	{
		if($uname==$row['uname'] and $pass==$row['pass'])
		{
			$_SESSION["un"] = $uname;
			header("Location: home.php");
		}
		else
		{
			$_SESSION["un"] = "not a regitered user , plz register urself first";
			header("Location: loginpg.php");
		}
	}
?>