<pre>
<?php
$date = new DateTime('2000-12-31');
$interval = new DateInterval('P1M');

$date->add($interval);
echo $date->format('Y-m-d') . "\n";

$date->add($interval);
echo $date->format('Y-m-d') . "\n";
?>
</pre>
