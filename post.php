<?php

	$name = "";
	$email = "";
	$message = "";


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = check_data($_POST["name"]);
		$email = check_data($_POST["email"]);
		$message = check_data($_POST["message"]);
	}

	function check_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}


	echo "Hello.";
	echo "<br>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $message;
	echo "<br>";


?>


	