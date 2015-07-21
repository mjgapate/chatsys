<html>
<head>
	<title>Chat System practice</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="js/jquery.min.js"></script>

	<script type="text/javascript">
		function postData() {
			// 1. Instantiate XHR - Start
		    var xhr;
		    if (window.XMLHttpRequest) 
		        xhr = new XMLHttpRequest();
		    else if (window.ActiveXObject) 
		        xhr = new ActiveXObject("Msxml2.XMLHTTP");
		    else 
		        throw new Error("Ajax is not supported by your browser");
		    // 1. Instantiate XHR - End
		
			// 2. Handle Response from Server - Start
		    xhr.onreadystatechange = function () {
		        if (xhr.readyState < 4)
		            document.getElementById('form-data').innerHTML = "Loading...";
		        else if (xhr.readyState === 4) {
		            if (xhr.status == 200 && xhr.status < 300) 
		                document.getElementById('form-data').innerHTML = xhr.responseText;
		        }
		    }
		    // 2. Handle Response from Server - End

		     // 3. Specify your action, location and Send to the server - Start    
		    xhr.open('POST', 'post.php', true); 
		    xhr.send();
		    // 3. Specify your action, location and Send to the server - End

		}
	</script>

</head>
<body>

<br>
<div class="form-holder">
	<form method="post" action="post.php">
		<table border="0" id="form-data">
			<tr>
				<td><label for="name">Name:</label></td>
				<td><input type="text" name="name"><br></td>

			</tr>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input type="email" name="email"><br></td>
			</tr>
			<tr>
				<td><label for="message">Message:</label></td>
				<td><textarea name="message"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" class="submit" value="Submit" onclick="postData()"></td>
			</tr>
		</table>
	</form>
</div>


</body>
</html>
