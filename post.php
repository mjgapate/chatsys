<?php

	$name = "";
	$email = "";
	$message = "";
	
	function check_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = isset($_POST["name"]);
		$email = isset($_POST["email"]);
		$message = isset($_POST["message"]);
	}
	
	$variables = [];
	
	array_push($variables, $name);
	array_push($variables, $email);
	array_push($variables, $message);
	
	echo json_encode($variables);

?>


	