<?php
$id=$_GET['id'];
$name=$_GET['name'];
$con=mysql_connect("localhost","root","root");
mysql_select_db("amit",$con);
mysql_query("insert into joshi values('$id','$name')");

?>