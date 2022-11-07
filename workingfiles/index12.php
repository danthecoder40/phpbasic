<?php

// if you are going to use variable inside your block of function , you have to tell the function that listen you will need this variable in this new function before you can execute the statement new function allowed_user 
session_start();

// $user = "kelvin Hart";

// $height = "5 inches";



// $attende_allowed = 16;

// $young_attendee_not_allowed = 17;

// $old_attendee = 50;

// $location = "Dubai";


// function allowed_user($attende_allowed,
// $old_attendee ){


// if ($attende_allowed >= 18 && $attende_allowed <= 49 ){

// 	echo "you are 18 and above and will be allowed to attend the show <br> <br>";

// }
// elseif (  
// $old_attendee >= 50) {

// 	echo "you are not allowed to attend the show <br> <br>";
	
// }else{

// 	echo "you are a kid you are not allowed to attend the show <br> <br>";

// }


// }


// allowed_user($attende_allowed,$old_attendee);

// echo $_SESSION['user_info'];

// echo "<br>";



echo $_SESSION['user_info']['fullname'];

echo "<br>";

echo $_SESSION['user_info']['email'];




 ?>