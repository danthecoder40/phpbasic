
<?php

// we collect our database imformation and keep then in variable e.g $server is one of our variable here, the import here that we collected is localhost, root, project



//name of the  server = localhost

// $server = "localhost";


// //username of the server = root


// $username = "root";

// //password  = ""

// $password = "";

// //name of database = "projectapp";

// $database = "projectapp";

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



// try {


// $connection = mysqli_connect($server,$username,$password,$database);

// if($connection){

// //that is if connection got a response from the function mysqli_connect($server,$username,$password,$database);, then echo


// echo "database connection was successfull";



// }


// } catch(Exception $errormsg){


// 	echo $errormsg->getMessage();
// }


// // note this connection is not very secure

// try {

//    throw new Exception("");


// }catch(exception $errormsg){


// 	echo $errormsg-> getMessage();
// }


include('../dbconnection.php');

// we you are stock you fine your way out you dont have to remember everything, what it takes to fine your way out is work makes you a good developer

// you might forget a function or where to put a commot, you have to go online and fine  your way out


// now we will put this in a variable


//INSERT INTO users (id,email,password,full_name, Spending_Amt) VALUES ('NULL','danny@gmail.com','8968877',' dan ','4000');


//$query = "INSERT INTO users (id,email,password,full_name, Spending_Amt) VALUES ('NULL,'danny@gmail.com','8968877',' dan ','4000')";

$query = "INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `Spending_amt`) VALUES (NULL, 'dan@gmail.com', '123456', 'dan friday', '2000')";

// now we will send this query statement to our database

// we will use mysqli_query , to send our query statement to the database


// fisrt is the conncetion because it has to open the connection first before it pass this data in 



// we can keep this again in a variable called $run_query

//mysqli_query($connection,$query);


//	THE CODE BELOW IS FOR INSERT


// I GIVE THIS SPACE FOR YOU TO KNOW THE CODE









// $run_query = mysqli_query($connection,$query);



// // now we will check if the connection was sucessful or not
// // if the query , $run_query was successful, echo "data has been inserted in your database "; else echo "data was not inserted"; 
// // when you will close the connection with mysqli_close(), remember to always close your connection after you send something



// if($run_query){

// echo "data has been inserted in your database ";


// }else{

// 	echo "data was not inserted";
// }


// mysqli_close($connection);










// THE CODE BELOW IS FOR UPDATE




// update is when you want to update a record that has already been inserted

//UPDATE users SET full_name = "dan" WHERE id = 4

// now we keep it in a query

// I GIVE THIS SPACE FOR YOU TO KNOW THE CODE








// $query_update = "UPDATE users SET full_name = 'dan',email = 'dannygood@gmail.com' WHERE id = 4";



// now we will run the query
// remember to pass in the connection that is mysqli_query($connection), it is also to open the connection
// we need to open the connection first before we pass in the query



// $run_query = mysqli_query($connection,$query_update);


// // now we will check if the connection was sucessful or not
// // if the query , $run_query was successful, echo "data has been inserted in your database "; else echo "data was not inserted"; 
// // when you will close the connection with mysqli_close(), remember to always close your connection after you send something



// if($run_query){

// echo "data has been inserted in your database ";


// }else{

// 	echo "data was not inserted";
// }


// mysqli_close($connection);










// THE CODE BELOW IS FOR SELECT

// select all from users



$query_select = "SELECT * FROM  users";


//  this is the query that we are sending in $query_select

$run_query = mysqli_query($connection,$query_select);



	// lets echo the result that we will fine , to do that we need to fectch this result

	// this function will return the result of the query

//mysqli_fetch_array()

// so now we will create a variable to hold the result
	// we can pass in the querry that we run $run_query

	//the code below is for number

//$result = mysqli_fetch_array($run_query, MYSQLI_NUM);


	// the code below is for associate

  $result = mysqli_fetch_array($run_query, MYSQLI_ASSOC);






//above we will specify the type of array we want it to come back as e.g index or associative array, WHERE we useMYSQLI_NUM, which is index because the index have number on them

// now we write an if statement to check the result

  // if the result has the index form of  the result of query that comes in then we can echo $result remember its an array so it will become $result[]

//if($result){
// so we will call the index form e.g zero 0

//echo $result[2];


// now we will call the names of the column e.g id, email, password,full_name
//echo $result['full_name'];

//}




//echo "data has been inserted in your database ";


//}else{

	//echo "data was not inserted";
//}


//mysqli_close($connection);


// more functions 

  // mysqli_fetch_asso()











?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>












