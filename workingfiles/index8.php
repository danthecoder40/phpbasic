<?php 



$user = "kelvin Hart";

$height = "5 inches";



$attende_allowed = 16;

$young_attendee_not_allowed = 17;

$old_attendee = 50;

$location = "Dubai";
//database monalisation

$comdey_show = array ( "performer" => "$user","performer_height" => "5 inches","performer_age" => 30);




if ($attende_allowed >= 18 && $attende_allowed <= 49 ){

	echo "you are 18 and above and will be allowed to attend the show <br> <br>";

}
elseif (  
$old_attendee >= 50) {

	echo "you are not allowed to attend the show <br> <br>";
	
}else{

	echo "you are a kid you are not allowed to attend the show <br> <br>";

}


echo $comdey_show['performer'];


 ?>


 <?php 

// you can access a php variabe out the php tag that you created the variable in, provided that you open and close the new php tag e.g <? open  , close ?> close 

echo $comdey_show['performer'];

  ?>