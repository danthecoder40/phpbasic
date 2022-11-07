<?php

include('../dbconnection.php');

// $email ="dan@gmail.com";


// $password = '123456';

// $query_select ="SELECT * FROM 	users WHERE email='$email' and password ='$password' ";


// $run_query = mysqli_query($connection, $query_select);

// // num_row will return the number of rows that was run
//   // you will use this function below if you want to authenticate, e.g someone type in their email

// $result = mysqli_num_rows($run_query);

// echo $result;

// // note zero means there is nothing

// if( $result>0){

// echo "no data found";



// }






// the email is in the database you will see 1 on your browser , if the email is not on your database you will see 0



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
  <h2>customers</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>fullname</th>
        <th>password</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

<?php

// we call our database because we need it to exerblish connection  
// you open a php tag where you want the values to go
include('../dbconnection.php');



$query = "SELECT * FROM users";

//then we pass in two parameters $connections, $query

$run = mysqli_query($connection,$query);

while($result = mysqli_fetch_assoc($run)){

// for this to work you will close php after you open the while loop


	// so what this means is that we are opening our while loop but we dont want it to end here,  so we are ending php where because we want to get into html

?>

<!-- echo $result['email'];


}




  ?> -->


      <tr>

      	<!-- we will open our php tag again because we are inside html now -->


        <td><?php echo $result['full_name'] ?></td>
        <td><?php echo $result['password'] ?></td>
        <td><?php echo $result['email'] ?></td>
      </tr>
<?php } ?>
<!-- the while loop ends here -->

      
      
    </tbody>
  </table>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>

















