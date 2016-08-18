<?php
	session_start();
	if($_SESSION["un"]==NULL)
	{
		session_destroy();
		header("location: loginpg.php");
	}
?>