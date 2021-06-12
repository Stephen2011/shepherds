<?php
include("lib.php");
$link = mysql_connect($host,$username,$password);
if (!$link) {
die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($db, $link);
if (!$db_selected) {
die ("Can't use $db : " . mysql_error());
}
$sql = "CREATE TABLE IF NOT EXISTS`TABLE` (`Assigned` DOUBLE  ,PRIMARY KEY(`Assigned`))";
$result = mysql_query($sql);
if (!$result) {
die('Invalid query: ' . mysql_error());
}
echo "Table created successfully";

?>
