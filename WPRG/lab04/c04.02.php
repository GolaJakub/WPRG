<?php

$end_year = mktime(23, 59, 59, 12, 31, 2021);
$today = time();
$diff_time = ($end_year - $today);
$days = (int)($diff_time / 86400);
print "Days till end of the year: $days days!" . "\n";
