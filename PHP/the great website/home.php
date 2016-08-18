<?php
	session_start();
	if($_SESSION["un"]==NULL)
		header("location: loginpg.php");
	else
		echo "welcome : ".$_SESSION["un"] ;
?>
<p align="right">
<a href="logout.php"> logout </a></p>