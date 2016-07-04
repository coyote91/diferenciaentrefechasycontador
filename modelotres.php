<?php

include './bd/conexion.php';

//fuente : 

//http://stackoverflow.com/questions/1416697/converting-timestamp-to-time-ago-in-php-e-g-1-day-ago-2-days-ago/18602474#18602474

$consulta = "SELECT fecha
             FROM  comprashechas
             WHERE  id_compra = 13 ";

$query = $conexion->query($consulta);
    
 
     $arraylogin = $query->fetch(PDO::FETCH_LAZY);

   echo "fecha compra es :" . $ptime =$arraylogin->fecha;
 
       //echo time_elapsed_string('2013-05-01 00:22:35');
   echo "<br> El tiempo transcurrido cuando hiciste la compra es : " . time_elapsed_string($ptime);

function time_elapsed_string($ptime)
{
    // Past time as MySQL DATETIME value
    $ptime = strtotime($ptime);

    // Current time as MySQL DATETIME value
    $csqltime = date('Y-m-d H:i:s');

    // Current time as Unix timestamp
    $ctime = strtotime($csqltime); 

    // Elapsed time
    $etime = $ctime - $ptime;

    // If no elapsed time, return 0
    if ($etime < 1){
        return '0 seconds';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
                 30 * 24 * 60 * 60  =>  'month',
                      24 * 60 * 60  =>  'day',
                           60 * 60  =>  'hour',
                                60  =>  'minute',
                                 1  =>  'second'
    );

    $a_plural = array( 'year'   => 'years',
                       'month'  => 'months',
                       'day'    => 'days',
                       'hour'   => 'hours',
                       'minute' => 'minutes',
                       'second' => 'seconds'
    );

    foreach ($a as $secs => $str){
        // Divide elapsed time by seconds
        $d = $etime / $secs;
        if ($d >= 1){
            // Round to the next lowest integer 
            $r = floor($d);
            // Calculate time to remove from elapsed time
            $rtime = $r * $secs;
            // Recalculate and store elapsed time for next loop
            if(($etime - $rtime)  < 0){
                $etime -= ($r - 1) * $secs;
            }
            else{
                $etime -= $rtime;
            }
            // Create string to return
            $estring = $estring . $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ';
        }
    }
    return $estring . ' ago';
}


?>