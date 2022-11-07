<?php

// concept of array

// $user = "dan friday";


// echo "$user";



// an array is a variable that has multiple values, if there is a variable that holds multiple values then that is an array

// to tell php that this is an array you have to add array to the code



//$users = "dan friday", "united states"," Dubai", 21;


// below is what the code will now look like
//the array below is an indexed array

$users = array("dan friday", "united states"," Dubai", 21);

// there are 4 values in the array above
 // 0 ,1 ,2,3,4  ->  keys the indexed value of a value include an array are called keys, array is called a key// zero is a number in programming

// if you want to echo the first value in the array above you will have to refere to the first key which is 0

//echo $users[0];// this square braize indicate an array

// php assigns zero to the first value inside an array

// types of array


// indexed and associative


//// associative array


// associative array, when you want to assign the keys with your own value or key when you dont want php  to use index value  or keysto refere to your values in the array 

//fullname below is a key value

// $users = array("dan friday", "united states"," Dubai",        21);
//                fullname         nationality  currentaddress    age// when you when to assign you own keys so that it will be easier for you to refere to the value

//                // to assing an associative array you will use  =>

//                fullname => "dan friday"
//               //the fullname is  a key that is assign to the value dan friday


// // example of associative array 

//                $users = array( "fullame"=>"dan friday"

session_start();

echo $_SESSION ['all_data'] ['fullname'];




  ?>