<?php

// Get a Date
// The required format parameter of the date() function specifies how to format the date (or time).

// Here are some characters that are commonly used for dates:

// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week


echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";


// Get a Time
// Here are some characters that are commonly used for times:

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

$timezone =  date_default_timezone_get();
echo $timezone . "<br>";

date_default_timezone_set('Asia/Kolkata');
echo "The time is " . date("h:i:s A") . "<br>";


// Create a Date With mktime()
// mktime(hour, minute, second, month, day, year)

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:s a", $d) . "<br>";

// Create a Date From a String With strtotime()
// strtotime(time, now)

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:s a", $d). "<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:s a", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:s a", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:s a", $d) . "<br>";


$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}