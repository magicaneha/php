<?php
$con=mysql_connect("localhost","root","root");
$db=mysql_select_db("amit",$con);
$que=mysql_query("select * from sharma where name like '%a'");
while($row=mysql_fetch_array($que))
{
echo("$row[0]"."<br>");
}
?>