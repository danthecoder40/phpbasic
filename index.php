<!-- hello testing php with live server

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> my new file</title>
</head>
<body>
<h1>this is an html</h1>
<p style="color:red;font-size: 20px;"> this is a website</p>






</body>
</html>
<?php echo "this is from a php";  ?>

<script type="text/javascript">
	
	alert("this is a javascript in a php file");

</script> -->
<?php 

echo "this is a php text";

echo 50;

echo "
<p> this is an html paragraph </p>";


//variables(used to store values e.g $name is a variable)

//values = text/string or number /int//  

$name ="friday dan";

$age = 20;

$password = '5677898987760998';

$minpassword = 8;

$country = "nigeria";



// when are variables used

// when needed by calling them in froms,database, statements. etc

 // how are dey used


if (strlen ($password)< $minpassword){

	echo "password is less than minimum requiements";
}else{

	echo "your name is " . $name . " and your password is" . $password . " and its correct, you are " .$age . " yrs old from " . $country . "" ;
}








// statements : actions to be performed based on certain conditions

// if (condition) {

// 	// do something

// 	//if i win this bet i will buy a car else i will ride my bike to college

// 	// if user is logged in, redirect login page to account.php else show login form
// }

// if (condition){

// 	//do something
// }else{

// 	// if the condition is not met ,do something else
// }



// if(condition){
// 	//do something

// }elseif{

// 	// do something else, or used to pass in another condition

// 	// if age is more than 25 years echo welcome else if age is more than 40 echo you are to old for this game else// when the two conditions have not been meet// echo you do not meet the requirement for this game

// }else{


// 	//if i win this bet i will buy a car else i will ride my bike to college

// 	// if user is logged in, redirect login page to account.php else show login form



// }



// if age is more than 25 years echo welcome else if age is more than 40 echo you are to old for this game else// when the two conditions have not been meet// echo you do not meet the requirement for this game

$win = 1;


// in a real world a session will keep your login information, throughout the duration of the browser, as long as the webpage is open and the browser is open its going to keep your informatiom there

$logged_in = 1 ;

// == used to compare , like if i is equal to then do something or echo
if (($win) == 3) {

	echo " i will buy a car";
	
}else{

	echo "you did not win  so ride your bike to college";
}


if ($logged_in==1) {
	// header is a function that is used to redirect pages

	header("location: account.php");    

	// any time you declere if the first condition is always a true statement
	
}else{

	// include is a function that include a page you have created

	include ('login.php');

}

// for condition that include else if

if ($logged_in==1) {
	// header is a function that is used to redirect pages

	header("location: account.php");// any time you declere if the first condition is always a true statement
	
}else if{

	// include is a function that include a page you have created

	include ('login.php');

}else{

	echo "session expired";
}




 ?>