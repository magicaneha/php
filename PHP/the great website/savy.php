<?php
	extract($_POST);
	@$gender = $_POST["gender"];
	$con = mysql_connect("localhost","root");
	$db = mysql_select_db("talkspot");
	$a = mysql_query("insert into chechit values('$name','$uname','$pass',$age,'$city',$gender)");
	if($a>0)
	{
		$_SESSION["un"] = $uname;
		header("Location: home.php");
	}
	else
	{
		 echo "<script> 
		 			alert('data not saved');
 			   </script>";
		 header("Location : regipg.php");
	}
?>