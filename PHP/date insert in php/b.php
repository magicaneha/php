<html>
<body>

<form action="c.php" method="get">
enter date:<?php
 echo "<select name='yy'> ";
 echo("<option>Select Date</option>");
 for($i=1999;$i<=2050;$i++)
 {
 echo "<option>" .$i."</option>";
 }
 echo "</select>";
 ?>
 
<?php
 echo "<select name='mm'> ";
  echo("<option>Select Month</option>");
 for($i=1;$i<=12;$i++)
 {
 echo "<option>" .$i."</option>";
 }
 echo "</select>";
 ?>
 
 
  
 <?php
 echo "<select name='dd'> ";
  echo("<option>Select Date</option>");
 for($i=1;$i<=30;$i++)
 {
 echo "<option>" .$i."</option>";
 }
 echo "</select>";
 ?>
 <input type="submit" name="submit" value="submit">
 </form>
 </body>
 </html>
 
 
