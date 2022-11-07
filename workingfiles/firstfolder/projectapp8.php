<?php

include('../dbconnection.php');

$email ="dan@gmail.com";


$password = '123456';

$query_select ="SELECT * FROM 	users WHERE email='$email' and password ='$password' ";


$run_query = mysqli_query($connection, $query_select);

// num_row will return the number of rows that was run
  // you will use this function below if you want to authenticate, e.g someone type in their email

$result = mysqli_num_rows($run_query);

echo $result;

// note zero means there is nothing

if( $result>0){

echo "no data found";



}else{

	echo "welcome";
}






// the email is in the database you will see 1 on your browser , if the email is not on your database you will see 0



?>