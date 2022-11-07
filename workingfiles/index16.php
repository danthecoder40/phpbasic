<?php
// how to call the session
session_start();



// include and superglobal

// in php when you have differnt files or you have have variables and fuctions in another file and you want to access then, on a different page, php gives us the flexibility, we dont have to go and type all the functions again in the new page

//you can use include to access this files

//include("index12.php");

//echo $user ;

// allowed_user($attende_allowed,$old_attendee);


// require 

 // require work differently from include in the sense that if php does not find the file your application will crash, so if you have an application that requires a file to work you have to use require, but if you have an application that only needs to include or access some variables or some functions or anything in another file then you can just use include that is the difference to require and include practically do thesame thing


 // superglobals

// superglobals are basically arrays, there are ways to recognize a superglobal

// concept :

 // superglobals are arrays they are always in capital

 //superglobals are arrays  variable that can be access anywhere on your application

//$GLOBALS- makes a declared variable accessible to all your php files

 // $_SESSION - keeps all variables throughtout the duration of  your application until destroyed

 // $_POST- collect data from forms

 // $_GET - is used to collect data from form through the url


 //$_FILES -is used to colect files from form 

 //$_SERVER -keeps paths and hearders 


// if you want to make a variable global you will have to use superglobal on them

// all superglobal variables are arrays

 //example of a superglobal variable that can be access anywhere in all your pages

 // remember its an array so you will use []

 //$GLOBALS ['user'] = "dan friday";

// $_session , if you dont destroy what is in the session its going to keep them


// how to call the session variable

$_SESSION['user_info'] =  array(  



	"fullname" => "dan friday",

	"email"  => "dan@gmail.com"


);


echo $_SESSION['user_info']['fullname'];

echo "<br>";

echo $_SESSION['user_info']['email'];

//when you want to make use of this session variable you will have to call the session

// note:check the start off all  the code in this page to see how to call the session



// you can create more than one array for this session

// $_SESSION['user_info'] = array(

// "fullname" =>    "dan friday",
// "nationality" =>    "nigerian",
// "email" =>    "danfriday@gmail.com


// );


 


  ?>