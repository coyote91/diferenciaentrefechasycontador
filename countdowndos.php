<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		
       #contendor{
        
         display: table;
         position:relative;
         width:200px;
         height:50px;
         background-color:pink;

         margin:0px auto;

       }

 
      .tiempo
      {
         display: table-cell;
         list-style-type: none;
         width:100px;
         height:15px;
         border: 1px solid white ;
         background-color:orange;
         text-align: center;
         color:white;

      }  

    

	</style>
</head>
<body>

<?php

/*COUNT-DOWN*/
   date_default_timezone_set("America/Bogota"); 
setlocale(LC_TIME, 'spanish'); 

$añonuevo = strtotime(" 29 June 2016");
$tiempo_restante = $añonuevo - time();

 $dias = floor($tiempo_restante/86400);
 $horastotal = floor($tiempo_restante/3600);
 $horas = floor($horastotal - $dias*24);

 $minutostotal = floor($tiempo_restante/60);
 $minutos = floor($minutostotal - $horastotal*60);

 $segundos  = floor($tiempo_restante%3600)%60;


if ($tiempo_restante > 0 ) 
{ 

	?> 
  <div id="contenedor">
  

<?php

    if ($dias > 0 ) {
     
      ?> 
                
        <div class="tiempo"> <?php    echo $dias . " dias ";  ?>  </div>
     

     <?php
   
    }
   
   if ($horas > 0 ) {
     ?>

      <div class="tiempo"> <?php   echo $horas .  " horas ";  ?> </div>  
   	 
     <?php 
   }
   if ($minutos > 0 ) 
    {
   	  ?>   
      
      <div class="tiempo"> <?php  echo $minutos  .  " minutos " ;  ?></div>
  
   
      <?php
   }
     
   if ($segundos > 0 )
   {
     
      ?>
        
       <div class="tiempo"> <?php  echo $segundos . " segundos " ;  ?> </div>    
	
     <?php
      
    }  


}
elseif($tiempo_restante == 0 || ($tiempo_restante < 0 &&  $tiempo_restante > -86400) )
{

  echo "Un saludo a todo y feliz año nuevo";

}
else{

  echo " Estamos en el nuevo año  ";

}
?>

</div>


<?php
echo "<br>";
echo "EL MISMO CONTADOR PERO HECHO CON UNA FUNCION";


/*function time_ago($cur_time)
{
    $time = time() - $cur_time;

    $seconds = $time;

    $minutes  = round($time/60);
    $hours  = round($time/3600);
    $days = round($time/86400);
    $weeks = round($time/604800);
    $months = round($time/2419200);
    $years = round($time/29030400); 

if ($seconds <= 60) {

   $time = "Hace " . $seconds . " segundos " ;

    }
  elseif($minutes <= 60 ) {
     
     if ($minutes == 1) 
     {
     	  $time = "Hace un minuto";
     }
     else{

         $time = "Hace ". $minutes . "munutos ";     	
     }

  }
  elseif($hours <= 24 ) 
  {
      if ($hours == 1) 
      {
          $time = "Hace una hora ";	
      }
      else{
          $time = "Hace " . $hours . "horas ";

      }
  }
  elseif ($days <= 7) 
  {
       if ($days == 1  ) 
       { 
         
            $time = " Hace un dia ";

       }
       else{
          
            $time = "Hace " . $days . "dias "; 

       }


  	  
  }
  elseif ($weeks <= 4 ) 
  {
      if ($weeks == 1 ) 
      {
      		
         $time = "Hace una semana";

       }
       else{
         
         $time = "Hace ". $weeks. " semanas";

       }	
  }
  elseif ($months <= 12) {

  	 if ($months == 1 ) {

  	 	$time = "Hace un mes ";
  	 }
  	 else{
         
         $time = " Hace ". $months . "meses";

  	 }
  	
  }
  else{

    if ($years == 1 ) 
    {
       $time = " Hace un año";	

    }
    else{
           
       $time = " Hace " . $years . "años";     

    }

  }

  return $time;

}//end function
*/

?>	



</body>
</html>