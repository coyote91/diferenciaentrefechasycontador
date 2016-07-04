<?php 

include './bd/conexion.php';

//fuente : Converting timestamp to time ago in PHP e.g 1 day ago, 2 days ago…

//http://stackoverflow.com/questions/1416697/converting-timestamp-to-time-ago-in-php-e-g-1-day-ago-2-days-ago/18602474#18602474

$consulta = "SELECT fecha
             FROM  comprashechas
             WHERE  id_compra = 13 ";

$query = $conexion->query($consulta);
    
 
     $arraylogin = $query->fetch(PDO::FETCH_LAZY);

   echo "fecha compra es :" . $fecha =$arraylogin->fecha;
 
       //echo time_elapsed_string('2013-05-01 00:22:35');
   echo "<br> El tiempo transcurrido cuando hiciste la compra es : " . time_elapsed_string($fecha);




   function time_elapsed_string($datetime, $full = false) {

   date_default_timezone_set("America/Bogota"); 
setlocale(LC_TIME, 'spanish'); 


    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'Año',
        'm' => 'Mes',
        'w' => 'Semana',
        'd' => 'Dia',
        'h' => 'Hora',
        'i' => 'Minuto',
        's' => 'Segundo',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' hace aproximadamente' : 'just now';
}


	    

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	
</body>
</html>