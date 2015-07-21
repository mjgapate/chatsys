<?php

	$name = "";
	$email = "";
	$message = "";

	function check_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}

	if($_POST){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
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


	