
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">



	
username: <input type="text" name="username" placeholder="enter your username">

secretword: <input type="text" name="secretword" placeholder="enter your secretword">

email: <input type="text" name="email" placeholder="enter your email">

age: <input type="text" name="age" placeholder="enter your age">


fullname: <input type="text" name="fullname" placeholder="enter your fullname">



address: <input type="text" name="address" placeholder="enter your address">

customer complaint: <input type="text" name="customer_complaint" placeholder="enter your complain">


<input type="submit" name=" btn btn-primary">




</form> 

//post







<?php

//post









//i


session_start();

 if($_SERVER["REQUEST_METHOD"]=="POST"){

 $raw_username = $_POST['username'];
 $raw_secretword = $_POST['secretword'];
 $raw_email = $_POST['email'];
 $raw_age = $_POST['age'];
 $raw_fullname = $_POST['fullname'];
 $raw_address = $_POST['address'];
 $raw_customer_complaint = $_POST['customer_complaint'];



$clean_raw_username = filter_var($raw_username, FILTER_SANITIZE_STRING);
 $clean_raw_secretword =filter_var($raw_secretword,FILTER_SANITIZE_STRING );
 $clean_raw_email = filter_var($raw_email, FILTER_VALIDATE_EMAIL);

 $clean_raw_age = filter_var($raw_age, FILTER_VALIDATE_INT);

 $clean_raw_fullname = filter_var(
 $raw_fullname  , FILTER_SANITIZE_STRING);

 $clean_raw_address = filter_var($raw_address, FILTER_SANITIZE_STRING);
 
 $clean_customer_complaint = filter_var($raw_customer_complaint, FILTER_SANITIZE_STRING);









 if(($clean_raw_username|| $clean_raw_secretword  ||  $clean_raw_email  || 
  $clean_raw_age|| $clean_raw_fullname ||  $clean_raw_address || $clean_customer_complaint  )){


  echo " your username is " . $clean_raw_username ; echo "<br> <br>";
  echo " your secretword is "  . $clean_raw_secretword; echo "<br> <br>";
  echo " your email is " .$clean_raw_email  ; echo "<br>";
  echo " your age is " . $clean_raw_age ; echo "<br>";
  echo " your fullname is " . $clean_raw_fullname ; echo "<br>";


  echo " your address is " . $clean_raw_address; echo "<br>";
  echo " your customer complaint is " . $clean_customer_complaint; echo"<br>"; 







 } else{

 	echo "nothing here";
 }

 }











 // $clean_raw_username = filter_var($raw_username, FILTER_SANITIZE_STRING);
 // $clean_raw_secretword =filter_var($raw_secretword,FILTER_SANITIZE_STRING );
 // $clean_raw_email = filter_var($raw_email, FILTER_VALIDATE_EMAIL);

 // $clean_raw_age = filter_var($raw_age, FILTER_VALIDATE_INT);

 // $clean_raw_fullanme = filter_var(
 // $raw_fullname  , FILTER_SANITIZE_STRING);

 // $clean_raw_address = filter_var($raw_address, FILTER_SANITIZE_STRING);
 
 // $clean_customer_complaint = filter_var($raw_customer_complaint, FILTER_SANITIZE_STRING);



$_SESSION['some_data'] = array(

	"customer_username" =>"username",

	"customer_email" => "email"  





);

echo "your session username is " .$_SESSION['some_data']['customer_username'] . " you are online"; 

 echo "<br>";

echo  " your session email is " . $_SESSION['some_data']['customer_email'];




// $secretword = 7887;

// $min = 8;






// function wordUse($secretword){

// if( strlen (
// $secretword)< $min  ){

// 	echo "minimum lenght not verify";


// }else{

// echo "minimum lenght verify";

// }


  




// }

//  wordUse();




$all_datas = array (

"username" => "dan",

"secretword" => "how you doing",
"email" => "dan@gmail.com",

"age" => "20",

"fullname" => "dan friday",

"address" => "good",

"customer_complaint" =>"good job"











);

foreach($all_datas as $all_data){


	echo "$all_data <br>";
}






?>