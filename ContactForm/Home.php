<!DOCTYPE html>
<html>

<head>
	
</head>

<body>
	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => contact
		$conn = mysqli_connect("localhost", "root", "", "contact");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fname = $_REQUEST['fname'];
		$email = $_REQUEST['email'];
		$issue = $_REQUEST['issue'];
		$comment = $_REQUEST['comment'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO form VALUES ('$fname',
			'$email','$issue','$comment')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$fname\n $email\n "
				. "$issue\n $comment");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
