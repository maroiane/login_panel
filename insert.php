<?php
$con =myql_connect("#","#","#");
if (!$con)
{
die('could not connect :' .mysql_error
}
mysql_select_db("#", $can)
$sql="INSERT INFO #(user,email,password)
VALUES
('_POST[user]','$_POST[Email]','$_POST[password]'" ;
if (!mysql_query($sql;$con))
{
die('Error:' .mysql_error());
}
echo "your data sent";
mysql_close($con)
?>
