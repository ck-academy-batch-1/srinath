<!DOCTYPE html>
<html>
    
<body  style= "text-align:center; background-image:url(http://www.justinmaller.com/img/projects/thumbnail/THUMB__vlga.jpg); background-size: cover; background-repeat:no-repeat;">
<?php
echo "<h3>DATE AND TIME<h3>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l")."<br>";
echo "Today is " . date("Y.m.d") . "<br>";
?>
<br>
<hr>
<?php
echo "<h2>Timezone Berlin</h2>"."<br>";
date_default_timezone_set("Europe/Berlin");
echo "The time in Berlin " . date("H:i:s");
?>
<?php
echo "<h4>Timezone India Chennai</h14>"."<br>";
date_default_timezone_set("ASIA/CALCUTTA");
echo "The time in chennai " . date("h:i:sa");
?>

<br>
<hr>
&copy; 2022-<?php echo date("Y");?>
<hr>

<?php

#syntax mktime(hour, minute, second, month, day, year)
print "<h1>MK TIME<h1>"."<br>";
echo "<br>";
$t=mktime(14, 55, 24, 3, 1, 2023);
echo "Created date is " . date("Y-m-d h:i:sa", $t);
?>
<br>
<hr>
<?php
print "<h2>STRING  TO  TIME<h2>"."<br>";
#syntax strtotime(time, now)

$d=strtotime("2:55pm march 1 2023");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br>
<?php
$startdate = strtotime("Tomorrow");
$enddate = strtotime("+9 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
</body>
</html>