<?php
 $dbc = mysql_connect('localhost','root','');
mysql_query('SET NAMES "utf8"', $dbc);
mysql_select_db('drupal201',$dbc);

$sql = "SELECT nid, sid, name, consumer_key,shared_secret, configuration_type, match_by,domain, privacy,custom_feilds, app_indicator, submitted FROM webform_views_lti_product_information_5
WHERE 	sid= 1;

$dbq = mysql_query($sql,$dbc);

echo "<TABLE border='2' >";
while ($row = mysql_fetch_array($dbq)) {
echo "<TR>";
echo "<TD>".$row[nid]."</TD>";
echo "<TD>".$row[sid]."</TD>";
echo "<TD>".$row[name]."</TD>";
echo "<TD>".$row[consumer_key]."</TD>";
echo "<TD>".$row[shared_secret]."</TD>";
echo "<TD>".$row[ configuration_type]."</TD>";
echo "<TD>".$row[match_by]."</TD>";
echo "<TD>".$row[domain]."</TD>";
echo "<TD>".$row[privacy]."</TD>";
echo "<TD>".$row[custom_feilds]."</TD>";
echo "<TD>".$row[app_indicator]."</TD>";
echo "<TD>".$row[submitted]."</TD>";
echo "</TR>";
}
echo "</TABLE>";

?>
?>