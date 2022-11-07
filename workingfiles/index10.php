<?php

//for planning a website structure, octupus.co

// concept : a structure ,series, or process, the end of which is cinnected to the beginning, in a verb form, it circles



 // $users = array( "fullname"=>"dan friday" , "nationality" =>"united states", "currentadress" => "nigeria","age"=>20 );
// loops


// types:

// foreach

//you will give a name to the keys, usually this will be the singular form of the plural form of the array the array in the condition is $users so the singular form will $user

//foreach($users as $user ){

	//echo "$user <br>" ;
//}



// when is foreach used: when we fectch data from a database

// when we have an array that is keeping an array of the data that will are fectching from our query result


//$rows = mysqli_fetch_array($result);

// the above means you fectch all the data that came in through the result ($result), you fectch it as an array, you passed it to a variable called rows which is now an array, then you will use the foreach loop to loop through all the in formation

//foreach ($rows as $row)


// how are used


// functions are statements that we want executed when we call then

// functions do not executed automatically they excecute when we call then, they have to be called to be executed


// php has over a thousand functions, note: you learn the little ones that you can, so that you can use then, build stuffs gain confidence and do more later

// if you want to create a funcion tell php that you are creating a function by starting with a function, then you call the function a name, e.g authenticate_user (as our function), when creating a function use an uderscore ( _ e.g authenticate_user, 

//you cannot use a dash - , if you use a dash it becomes a text e.g authenticate-user, but you can use a calme case e.g authenticateUser 
  //)
// this  function needs to collect two arguement in this case $password and formpassword
//function authenticateUser($password, $formpassword){

	// e.g to authenticate a user
// lets say you have a variable that is fetching the password, from a database, and the name of the variable is password
	//if( $password == $formpassword){

		// header is also a function
	//	header("location:myaccount.php")


	//}

//}

// if you want this function to work you will call it , make sure its in a php tag
// if its not in a php tag it will not work

//authenticateUser();

//functions 

//if();

//echo
//foreach() 


$names = array("location" => "delta state", "nationality" => "nigerian","age" => "20" );



foreach ($names as $name){


	echo "$name <br>";
}










  ?>