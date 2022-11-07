<?php

// we collect our database imformation and keep then in variable e.g $server is one of our variable here, the import here that we collected is localhost, root, project



//name of the  server = localhost

$server = "localhost";


//username of the server = root


$username = "root";

//password  = ""

$password = "";

//name of database = "projectapp";

$database = "projectapp";

// now we pass them here below



//mysqli_connect($server,$username,$password,$database);


// we will put everything above in a variable we will call it connection


// $connection = mysqli_connect($server,$username,$password,$database); 

// // now we will write a statement


// if($connection){

// //that is if connection got a response from the function mysqli_connect($server,$username,$password,$database);, then echo


// echo "database connection was successfull";



// }



// else{

// // we can also concatinate it with a function that gets the error message
// 	echo "connection not successfull " . mysqli_error($connection);

// 	// die is also a function that closes the connection
// 	die($connection);
// }



try {


$connection = mysqli_connect($server,$username,$password,$database);

if($connection){

//that is if connection got a response from the function mysqli_connect($server,$username,$password,$database);, then echo


//echo "database connection was successfull";



}


} catch(Exception $errormsg){


	echo $errormsg->getMessage();
}


// // note this connection is not very secure

// try {

//    throw new Exception("");


// }catch(exception $errormsg){


// 	echo $errormsg-> getMessage();
// }



?>