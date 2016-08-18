<?php
	session_start();
?>
<html>
<body>
	<table>
		<tr><td>username</td><td><input type="text" name="uname" />
		<?php
			if(isset($_SESSION["un"]))
				echo "<font color = red>".$_SESSION["un"]."</font>";
		?>
		</td></tr>
		<tr><td>password</td><td><input type="password" name="pass" /></td></tr>
		<tr>
			<td><form method="post" action="valid.php">
   					 <button type="submit">login</button>
				</form></td>
			<td><form method="post" action="regipg.php">
   					 <button type="submit">new user</button>
				</form></tr>
	</table>
</body>
</html>
	