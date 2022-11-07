<?php




// example of associative array 

               $users = array( "fullname"=>"dan friday" , "nationality" =>"united states", "currentadress" => "nigeria","age"=>20 );


// you have created an associative array, because you are associating a kay to the values e.g key fullname value dan friday


//echo $users["fullname"];

echo $users['nationality'];


// you can keep all the data coming from the data base in an associative array


// when associative arrays are used; when you are fetching data from a database, then you write your query

// you can choose how you want the data to come back in most causes you can want the data to be assign to a variable e.g a variable called $rows, this variable will have all the data that is coming from the database, so how will you assign all the data that is comimg from the database this is where an array comes in, you will have to create an associate array for this variable, so that you can keep all the data that you get from the database inside the variable

// php has a function called mysqli_fetch_array, when you call the function and you pass in a function e.g called $result

// when you pass in the result that you got from the query that you wrote, this result is been fetch in form of an array and is been keep in a variable called $rows, this variable called row will now hold all the information coming from the data base 

// $rows = mysqli_fetch_array($result)

// // e.g to echo all the names in the variable 

// echo $rows ['names'];







?>