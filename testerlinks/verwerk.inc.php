<?php
// session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'linkbase';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('
	INSERT INTO  
	links
	(link, categorie, source, type, author)
	VALUES (?,?,?,?,?)')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('sssss', $link, $categorie, $source, $type, $author);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();


// if ($stmt->num_rows > 0) {
// 	$stmt->bind_result($id, $password);
// 	$stmt->fetch();}
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	
$stmt->close();
}
?>
