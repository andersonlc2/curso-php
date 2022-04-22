<?php

$date = new DateTime('2020-01-01 15:35:00');

$date->add(DateInterval::createFromDateString("7 years 2 days 5 minutes 17 seconds"));
$date->sub(DateInterval::createFromDateString("5 years"));


// $date->setTimezone(new DateTimeZone("America/Sao_Paulo"));

echo $date->format('d/m/Y h:i:s');


$date1 = new DateTime('2020-01-01');
$date2 = new DateTime('2020-02-15');


if ($date1 > $date2) {
  echo "<br/>DATE 1 é maior que DATE 2";
} else {
  echo "<br/>DATE 2 é maior que DATE 1";
}

$diff = $date1->diff($date2);
echo $diff->format('<br/>%a');