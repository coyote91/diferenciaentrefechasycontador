<?php
 date_default_timezone_set("America/Bogota"); 
setlocale(LC_TIME, 'spanish'); 

/**
 * Calculate the difference between two dates using date_diff()
 * 
 */
//creating a date object
$date1 = date_create('19-06-2016');
//creating a date object
$date2 = date_create('26-06-2016');
//calculating the difference between dates
//the dates must be provided to the function as date objects that's why we were setting them as 
//date objects and not just as strings
//date_diff returns an date object wich can be accessed as seen below
$diff12 = date_diff($date2, $date1);

//accesing days
$days = $diff12->d;
//accesing months
$months = $diff12->m;
//accesing years
$years = $diff12->y;


echo '<center>';
echo '<br /><div style="background-color:orange;color:#fff;padding:10px;width:600px;font-size:16px">
<b>
La diferencia entre 19-06-2016 y 26-06-2016 <br />is: ' . $days . ' day(s), ' . $months . ' month(s),
' . $years . ' year(s)</b>
</div><br />';
echo '</center>';

//creating a date object
$date3 = date_create('01-07-2016 12:59:12');
//creating a date object
$date4 = date_create('27-06-2016 08:46:34');

//calculating the difference between dates
//the dates must be provided to the function as date objects that's why we were setting them 
//as date objects and not just as strings
//date_diff returns an date object wich can be accessed as seen below
$diff34 = date_diff($date4, $date3);

//accesing days
$days = $diff34->d;
//accesing months
$months = $diff34->m;
//accesing years
$years = $diff34->y;
//accesing hours
$hours=$diff34->h;
//accesing minutes
$minutes=$diff34->i;
//accesing seconds
$seconds=$diff34->s;

echo '<center>';
echo '<br /><div style="background-color:orange;color:#fff;padding:10px;width:600px;font-size:16px">
<b>La diferencia entre 01-06-2016 07:49:12 y 28-07-2016 07:49:34 
<br />is: ' . $days . ' day(s), ' . $months . ' month(s), ' . $years . ' year(s), '.$hours.' hour(s),
'.$minutes.' minute(s), '.$seconds.' second(s) </b>
</div><br />';
echo '</center>';

echo "<br> DEBO TENER EN CUENTA ESTO <br>";

echo "Fecha de publicación:	01/06/2016 07:49 a.m. EST <br>";
 echo "  Termina:	4d 8h  <br>";
 echo " Fecha terminacion:  01/07/2016 07:49 a.m. EST <br>";
 echo " La fecha mia es 26/06/2016  10 y 44 pm ";


 $day   = 27;     // Day of the countdown
  $month = 06;      // Month of the countdown
  $year  = 2016;   // Year of the countdown
  $hour  = 23;     // Hour of the day (east coast time)
  $event = "New Year's Eve, 2016"; //event

  $calculation = ((mktime ($hour,0,0,$month,$day,$year) - time())/3600);
  $hours = (int)$calculation;
  $days  = (int)($hours/24);
/*
  mktime() http://www.php.net/manual/en/function.mktime.php
  time()   http://www.php.net/manual/en/function.time.php
  (int)    http://www.php.net/manual/en/language.types.integer.php
*/
?>
<ul>
<li>The date is <?=(date ("l, jS \of F Y g:i:s A"));?>.</li>
<li>It is <?=$days?> days until <?=$event?>.</li>
<li>It is <?=$hours?> hours until <?=$event?>.</li>
</ul>

<?php

echo "<br>";

$datetime1 = new DateTime('2016-06-27 20:40:00');
$datetime2 = new DateTime('2016-06-26 09:55:00');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%1 day %h hours %i minutes');


echo "<br><br> modelo tres  <br> ";

$startdate = "2016-06-26 10:00:00";
$enddate =   "2016-06-27 13:34:56";

$diff = strtotime($enddate) - strtotime($startdate);

$temp = $diff/86400; // (60 sec/min * 60 min/hr * 24 hr/day = 86400 sec/day)
$dd = floor($temp); $temp = 24*($temp-$dd); //Days
$hh = floor($temp); $temp = 60*($temp-$hh); //Hours
$mm = floor($temp); $temp = 60*($temp-$mm); //Minutes
$ss = floor($temp); //Seconds

echo $dd." days\n".
     $hh." hours\n".
     $mm." minutes\n".
     $ss." seconds"; 

echo "<br><br> modelo cuatro  <br> ";




?>


