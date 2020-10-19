<?php
date_default_timezone_set("Australia/Sydney");

// The current date
$date = time();

// Static contest start date
$contestStart = strtotime('2020-10-01 16:37:00');

// If current date is after contest start
if ($date > $contestStart) {
?>
Visible
<?php
}

else {
// splash content?
}
?>
