<form method="get" action=" <?php echo $_SERVER["PHP_SELF"];?>">

	<!-- // if you are in html and you want to echo a variable you have to open your php tags -->



	email: <input type="text" name="email" placeholder=" enter email"  value="<?php echo ' your email is ' . $clean_email . 'please login' ?>">

	<!-- if you are using double quote in your html you will have to use a single quote when you are echoing php -->
	
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

$raw_email = trim($_GET["email"]);






// using filter_var

//filter_var($raw_email,FILTER_VALIDATE_EMAIL);

// now you assign it to a variable

// always try to clean your variable before you use them

$clean_email = filter_var($raw_email,FILTER_VALIDATE_EMAIL);







// so  now we will echo the clean email 


// if raw password or clean email is ready if there is somthing in any of the form field, then echo this  is your email


if (($raw_password || $clean_email )){

	// you will concatinate the variable $clean_email to echo it

	// to show the email you will echo the variable
	// $clean_email

	// note when you want to echo the variable you dont put "" if you do that php will take it as a string , so want you will do is that you will concatiate it that is using . , then you call the name of your variable it will became . $clean_email

//echo "this is your email is" . $clean_email;


	// to put a space you put a space after the is which is now 

	//echo "this is your email is " . $clean_email;

//echo "this is your email is " . $clean_email ;

// to continue you add another concatination it will now be

echo "this is your email is " . $clean_email . " please login " ;






}else{
	echo "nothing entered";
}



}




// you need to validate your files so that a bad script will not messup with your files

// you need to prevent site scripting

// where ever you are getting your variables from you really want to validate then, before you process then

// some functions you can use to perform this validation ;

// htmlspecialchars();// this will convert all your character field into html special character


// stripslashes(); // this will takeout slashes


// trim(); // the trim works like any of the two above


// you can pass in any variable to the functions above e.g it could be an array variable, it could be a section variable, it could be a post, a data variable, you can validate any variable that you want


// the filter_var function encourage to use this function it does both the the validation and sanitization and takes three parameter, first a variable and the second one takes the filtername, the third one is optional


//filter_var($user, FILTER_VALIDATE_STRING())







// concatenation

//php file can acommodiate other types of programming language

// e.g you can ego an html entity

// the php style of concatenation

// use a .



?>

<!-- <script >

 var $x  ="dan";

 var $y ="friday";

 alert ($x+$y)



 // the plus above is the javascript style of concatenation

//the plus sign is used to concatenate, concatenation is joining values together


</script> -->






<!-- <script> alert("hacked") </script> -->