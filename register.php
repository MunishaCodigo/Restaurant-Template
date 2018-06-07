<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

include('./connection.php');



$name  = $_POST["name"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$date  = $_POST["date"];



$result = $pdo->prepare("INSERT INTO `restaurant_registration`(`Name`, `Email`, `Phone`, `Date`)  VALUES (:name ,:email ,:phone,:datee)");

 

$result->execute(array(":name"=>$name, ":email"=>$email, ":phone"=>$phone, ":datee"=>$date,));



if($result){

	
	header('Location: index.php?reserved');
}

else{

	echo "data not inserted";

}



?>