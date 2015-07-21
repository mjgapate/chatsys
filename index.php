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
		    if (window.XMLHttpRequest) {
		        xhr = new XMLHttpRequest();
		    } else if (window.ActiveXObject) {
		        xhr = new ActiveXObject("Msxml2.XMLHTTP");
		    } else {
		        throw new Error("Ajax is not supported by your browser");
		    }
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

		     var name = document.getElementById("name").value;
		     var email = document.getElementById("email").value;
		     var message = document.getElementById("message").value;

		     // 3. Specify your action, location and Send to the server - Start    
		    xhr.open('POST', 'post.php?name=" + name + "&email=" + email + "&message=" + message + "&return=confirm",true);', true); 
		    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		    console.log("name = " + name);
		    console.log("email = " + email);
		    console.log("message = " + message);
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
				<td><input type="text" id="name" name="name"><br></td>

			</tr>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input type="email" id="email" name="email"><br></td>
			</tr>
			<tr>
				<td><label for="message">Message:</label></td>
				<td><textarea id="message" name="message"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" class="submit" value="Submit" onclick="postData()"></td>
			</tr>
		</table>
	</form>
</div>


</body>
</html>
