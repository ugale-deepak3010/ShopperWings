<?php
 error_reporting(0);
include 'dbconnect.php';



if($_POST["login"]){
	//echo "recieved";

$login = json_decode($_POST["login"]);
$phone =$login->phone;
$password=$login->password;

	$verify_shopper = "SELECT phone,password FROM shoppers WHERE phone='$phone' && password='$password'";
	$verify_customer = "SELECT phone,password FROM customer WHERE phone='$phone' && password='$password'";

     if($res1 = mysqli_query($conn, $verify_shopper)){
        if(mysqli_num_rows($res1) > 0){
            // do anything
            // you are shopper

        	echo "shopper success";
        }else{
        	//else wrong credetional details FOR SHOPPER
        	//CHECK FOR CUSTOMER

        	if($res2 = mysqli_query($conn, $verify_customer)){
		        if(mysqli_num_rows($res2) > 0){
		            // do anything
		            // you are customer

        	echo "customer success";

		        }else{
		        	//else wrong credetional details
		        	echo "8989";
		        }
		     }//else database problem









        }
     }//else database problem


}





?>