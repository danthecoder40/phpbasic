











<?php
session_start();
// question 

// 1. create a file called exercisetwo.php in your working files

// 2.read the following sentence carefully

// you got contacted by a senior manager from virtualines.com and he wants the following to be set up for his companys online backend management system.


// he wants to process the following data which is via a form on the customerqueries.php ( same as form)

// a. username b.secretword C.email d.age e.fullname f. address g.customer customer_complaint

// i. he wants these data secretly collected wants to know which super global variables that you will be using


// ii.he wants all the data to be validated and sanitized before they are passed to the processcustomerquery() for processing

// iii. he wants to keep the customer username and email throughtout the duration of the application until they sign out to avoid creating more functions that will fecth for the username and email all the time

// iv. he wants you to create a function that will verify the minimum secretword lenght (8) before its passed to a function for processing

// v.he wants you to keep all the data coming in from the form in a variable and write a funtion that will display all the data to the support team on request




// note: he wants all the functions to display error and success message containing the values from the form within their respective statement when possible and for now, he wants you to assume or use static values










//solution


$raw_username = "dan";
$raw_secretword = "good";
$raw_email = "dan@gmail.com";
$raw_age = 20;
$raw_fullname = "dan friday";
$raw_address = "goodone";
$raw_customer_complaint = "good job";

// solution

//i. 
//  $_SERVER ['PHP_SELF'] ;



// $_SERVER ['REQUEST_METHOD'] = 'POST';

//$_POST








   $clean_raw_username = filter_var($raw_username, FILTER_SANITIZE_STRING);


 $clean_raw_secretword = filter_var($raw_secretword, FILTER_SANITIZE_STRING);

 $clean_raw_email = filter_var($raw_email,FILTER_VALIDATE_EMAIL);


 $clean_raw_age = filter_var($raw_age, FILTER_VALIDATE_INT);

 $clean_raw_fullname = filter_var(
 $raw_fullname,FILTER_SANITIZE_STRING);
 $clean_raw_address = filter_var($raw_address, FILTER_SANITIZE_STRING);
 
 $clean_customer_complaint = filter_var($raw_customer_complaint, FILTER_SANITIZE_STRING);


 //iii


//session_start();// this session should be at the top of this page



$_SESSION['customer_data'] = array(

	"customer_username" => $clean_raw_username,
	"customer_email" => $clean_raw_email  





);


echo "your session name is " . $_SESSION['customer_data']['customer_username'] . "<br> email is:" . $_SESSION['customer_data']['customer_email']; 






 


//iv



  function wordUse($clean_raw_secretword){

  	// the minimum is 8 some we use the greater than or equal to 8 sign

  if( strlen (
   $clean_raw_secretword) >= 8  ){

 	echo "your secret word is '" .$clean_raw_secretword ."'  and its correct";


  }else{

  echo "your secret word is '" .$clean_raw_secretword ."' cannot be less than 8 characters";



 }


  




  }

   wordUse($clean_raw_secretword);



//or


// so we pass in the clean secretord variable that was gotten


// function wordUse($clean_raw_secretword){


// // kept the secrect word that was gotten in a variable could counted secretword

// $counted_secretword = strlen($clean_raw_secretword);

//  	// the minimum is 8 some we use the greater than or equal to 8 sign



//  if( 
//   $clean_raw_secretword >= 8  ){

//  	echo "your secret word is '" .$clean_raw_secretword ."'  and its correct";


//  }else{

//  echo "your secret word is '" .$clean_raw_secretword ."' cannot be less than 8 characters";

//  }


  




//  }

//  //now we will call the function

//   wordUse($clean_raw_secretword);










$all_datas = array (

"username" => $clean_raw_username,

"secretword" => $clean_raw_secretword,
"email" => $clean_raw_email,

"age" => $clean_raw_age,

"fullname" => $clean_raw_fullname,

"address" => $clean_raw_address,

"customer_complaint" =>$clean_customer_complaint











);

// we create a function called function display_all_customers then we pass in the name of the variable (array because array is a variable, the variable we used here is an associative array variable) called $all_datas

function display_all_customers($all_datas){

echo "hi support team , this query just came in: <br><br>";



foreach($all_datas as $all_data){


	echo "$all_data <br>";
}


}

display_all_customers($all_datas);



?>