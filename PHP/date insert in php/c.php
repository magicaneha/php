<?php
$final=$_GET['yy']."-".$_GET['mm']."-".$_GET['dd'];
$link=mysql_connect("localhost","root","root");
mysql_select_db("amit1",$link);
mysql_query("insert into joshi values('$final')");
if(!($link))
{
 echo "data is not connect";
 }
 else
 {
 echo "data is connect";
 }

?>