<?php 

include './bd/conexion.php';

//fuente : 

//http://stackoverflow.com/questions/1416697/converting-timestamp-to-time-ago-in-php-e-g-1-day-ago-2-days-ago/18602474#18602474

$consulta = "SELECT fecha
             FROM  comprashechas
             WHERE  id_compra = 13 ";

$query = $conexion->query($consulta);
    
 
     $arraylogin = $query->fetch(PDO::FETCH_LAZY);

   echo "fecha compra es :" . $time_ago =$arraylogin->fecha;
 
       //echo time_elapsed_string('2013-05-01 00:22:35');
   echo "<br> El tiempo transcurrido cuando hiciste la compra es : " . $time_elapsed = timeAgo($time_ago); 
   //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.

$time_elapsed = timeAgo($time_ago); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.

//Function definition

function timeAgo($time_ago)
{


   date_default_timezone_set("America/Bogota"); 
setlocale(LC_TIME, 'spanish'); 


    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}

?>