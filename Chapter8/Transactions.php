<?php
/*------------------------------------------------------------------------------------*/
function echoDB($statement){
	echo "<table border=1>
		<tr>
			<td>ID</td>
			<td>Name</td>
		</tr>";

	// fetch one row at a time and returns an associative array
	// where keys are the fields from the database
	while ($row = $statement->fetch()) {
	echo "<tr>
			<td>".$row['ID']."</td>
			<td>".$row['NAME']."</td>
		</tr>";
	}
	echo "</table>";
}
function showDB(){
		global $db;
		$statement1 = $db->prepare("SELECT * FROM try");	// statement prepared, ready to be executed
		$statement1->execute();	// statement executed, ready to be fetched
		echoDB($statement1);
}
/*------------------------------------------------------------------------------------*/
try {
	$db = new PDO("mysql:host=localhost;dbname=try", "root", "2966231512");
	echo "Successfully connected to the database<br/>";
	$statement = $db->prepare('SELECT * FROM ');
}
catch (Exception $error) {
	die("Connection failed: " . $error->getMessage() . "<br/>");
}

try {
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->beginTransaction();
	$db->exec("INSERT INTO try VALUES ('', 'Romz')" );
	$db->exec("DELETE FROM try WHERE NAME = 'Romz'" );
	$db->exec("UPDATE try SET NAME = 'blabla' WHERE ID = 3" );
	showDB();
	$db->commit();
}
catch (Exception $error) {
$db->rollback();
echo "Transaction not completed: " . $error->getMessage();
}

?>