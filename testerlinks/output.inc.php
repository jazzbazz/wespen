<?php
// prepare the query
$query = "SELECT  * FROM linkbase.links ";
if ($stmt = $con->prepare($query)) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	// $stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// $all = $stmt->fetchAll(PDO::FETCH_OBJ);
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	$stmt->bind_result($idb,$linkb,$categorieb,$sourceb,$typeb, $authorb);

	echo "<table><tr><th>ID</th><th>link</th><th>Categorie</th><th>Source</th><th>Type</th><th>Author</th>";

	while($stmt->fetch()){		
		echo "<tr><td>".$idb."</td><td>".$linkb."</td><td>".$categorieb."</td><td>".$sourceb."</td><td>".$typeb."</td><td>".$authorb."</td></tr>";
	}
	echo "</table>";


}

 ?>