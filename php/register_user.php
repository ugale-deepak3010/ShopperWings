<?php



if($_POST["register_user"]){


	$shop =$_POST['shop'];
$address =$_POST['address'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$password =$_POST['password'];

echo "\n";

echo $sql_register_shopper=" INSERT INTO shoppers ( shop_name, shop_address, shop_icon, fname, lname, phone, email, password) VALUES ('$shop', '$address', '$file_name', '$fname', '$lname', '$phone', '$email', '$password')";

if($conn->query($sql_register_shopper)){
	echo "\n Done ***** ";
}else{
	echo "\n failed query";
}



	echo "5656";
}




?>