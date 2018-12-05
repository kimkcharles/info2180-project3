<?php
date_default_timezone_set("America/Jamaica");
$nowt=date("Y-m-d H:i:s");
$time_passed=strtotime($nowt)-strtotime($apjob['date_applied']);
if ($time_passed < 86400) {
  echo "<strong>NEW</strong>";
}else{
    echo "";
}
?>