<?php
header('refresh:6');
$x=$_GET['eid']; 
$con=mysql_connect("localhost","root","root");
mysql_select_db("amit",$con);
$rows=mysql_query("select*from joshi where id='$x'");
while($row=mysql_fetch_array($rows))
{
 echo($row[0]." ".$row[1]."<br>");
 }
 

?>