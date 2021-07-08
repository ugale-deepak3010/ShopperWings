<?php
error_reporting(0);

include 'dbconnect.php';

if($_POST["register_user"]){

$register_user=json_decode($_POST["register_user"]);

$shop =$register_user->shop;
$address = $register_user->address;
$fname = $register_user->fname;
$lname = $register_user->lname;
$phone = $register_user->phone;
$email = $register_user->email;
$password = $register_user->password;


//echo "\n";

 $sql_register_shopper=" INSERT INTO customer (fname, lname, phone, email, password) VALUES ('$fname', '$lname', '$phone', '$email', '$password')";

if($conn->query($sql_register_shopper)){
	//echo "\n Done ***** ";
	echo "5656";
}else{
	echo "\n $sql_register_shopper \n failed query";
}



	
}




?>