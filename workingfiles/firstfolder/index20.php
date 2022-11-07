




<form method="get" action=" <?php echo $_SERVER["PHP_SELF"];?>">

	email: <input type="text" name="email" placeholder=" enter email">
	
password: <input type="text" name="password" placeholder=" enter password">

gender: 

<input type="radio" name="gender" value="female" >female


<input type="radio" name="gender" value="male" >male

<input type="submit" class="btn btn-primary">



</form>










<?php

// validation is when you are checking to see if the data that was entered is proper e.g if an email address was entered in the email section of the form


// sanitizing data is when you remove illegal characters, e.g typing a javascript code in the form is an illegal character



 


if($_SERVER["REQUEST_METHOD"]== "GET"){

	// collect value of input field name

$raw_password =$_GET["password"];

$raw_email = $_GET["email"];


if (($raw_password || $raw_email )){

echo "your email is " . $raw_email; echo "<br><br>";

echo "your password is " . $raw_password;


}else{
	echo "nothing entered";
}



}




// you need to validate your files so that a bad script will not messup with your files

// you need to prevent site scripting




?>


<script> alert("hacked") </script>