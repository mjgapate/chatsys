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


?>

<html>
<head>
	<title>Chat System practice</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="info-holder">
		<h2>Hello.</h2>
		<p><?php echo $name;?></p>
		<p><?php echo $email;?></p>
		<p><?php echo $message;?></p>
	</div>
</body>
</html>

	