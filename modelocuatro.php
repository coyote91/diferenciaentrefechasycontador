<?php
include './bd/conexion.php';

//fuente : 

//http://stackoverflow.com/questions/1416697/converting-timestamp-to-time-ago-in-php-e-g-1-day-ago-2-days-ago/18602474#18602474

$consulta = "SELECT fecha
             FROM  comprashechas
             WHERE  id_compra = 13 ";

$query = $conexion->query($consulta);
    
 
     $arraylogin = $query->fetch(PDO::FETCH_LAZY);

   echo "fecha compra es :" . $mytimestring =$arraylogin->fecha;
 
       //echo time_elapsed_string('2013-05-01 00:22:35');
   echo "<br> El tiempo transcurrido cuando hiciste la compra es : " . humanTiming( strtotime($mytimestring) );

function humanTiming ($time)
        {

            $time = time() - $time; // to get the time since that moment
            $time = ($time<1)? 1 : $time;
            $tokens = array (
                31536000 => 'year',
                2592000 => 'month',
                604800 => 'week',
                86400 => 'day',
                3600 => 'hour',
                60 => 'minute',
                1 => 'second'
            );

            foreach ($tokens as $unit => $text) {
                if ($time < $unit) continue;
                $numberOfUnits = floor($time / $unit);
                return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
            }

        }


?>