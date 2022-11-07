
<!-- using the GET -->

<!-- <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
	

Name: <input type="text"  name="fullname">

Email: <input type="text"  name="email">

<input type="submit" class="btn btn-primary">




</form>
 -->



<!-- // using the post -->



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	

Name: <input type="text"  name="fullname">

Email: <input type="text"  name="email">

<input type="submit" class="btn btn-primary">




</form>






<?php 
//echo $_SERVER['PHP_SELF'] above means  create an array an then use the patch php_self, we are processing it on the same page

// the action above is where you want the form to be sent

// the server superglobal takes in elements, one of then is request method 

//methods are ways of sending information, to your php file to process  it for you, there are primary too methods to send your data from a form to your php file that will process the form the $_GET and $_POST

// all superglobals are arrays

// above means you call the server superglobal variable $_SERVER 



// using the get

// if ($_SERVER["REQUEST_METHOD"] == "GET") {

// // collect value of input field name

// 	$name = $_GET ['fullname'];
// 	$name = $_GET ['email'];

//    if (empty($name)){

//        echo "name is empty";

//    }else{

//    	echo "your name is" . $name;
//    }


// }


// using the post

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// collect value of input field name

	$name = $_POST ['fullname'];
	$name = $_POST ['email'];

   if (empty($name)){

       echo "name is empty";

   }else{

   	echo "your name is" . $name;
   }


}





// using the post















?>