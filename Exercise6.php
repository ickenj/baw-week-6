<?php
/*******************************************************************
 * Author: Joanne Icken
* Purpose: This program prints a times table
*/
// get the user data from the form
$times_table = $_POST["times_table"];

$start = 1;
$end = 15;

echo "Here is the " . $times_table . " multiplication table:" . '<br />';
for($start;$start<=$end;$start++) {
	$answer=$times_table * $start;
	echo '<br />' . $times_table . "x" . $start . "=" .  $answer;
}
?>

