<?php
$db = new PDO("mysql:host=localhost;dbname=try", "root", "2966231512");

	function showDB(){
		global $db;
		$statement1 = $db->prepare("SELECT * FROM try");	// statement prepared, ready to be executed
		$statement1->execute();	// statement executed, ready to be fetched
		echoDB($statement1);
	}
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
		echo "</table><br/>";
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////
$statement2 = $db->prepare("INSERT INTO try VALUES (:ID, :Name)");	// statement prepared, ready to be executed
$statement2->execute(array('ID' => '7', 'Name' => 'Try'));
showDB();
//////////////////////////////////////////////////////////////////////////////////////////////////////
$statement3 = $db->prepare("DELETE FROM try WHERE (ID = :ID AND NAME = :Name)");	// statement prepared, ready to be executed
$statement3->execute(array('ID' => '7', 'Name' => 'Try'));
showDB();
//////////////////////////////////////////////////////////////////////////////////////////////////////
$statement4 = $db->prepare("UPDATE try SET ID = :ID , NAME = :Name WHERE ID = 3");	// statement prepared, ready to be executed
$statement4->execute(array('ID' => '8', 'Name' => 'Try'));
showDB();
//////////////////////////////////////////////////////////////////////////////////////////////////////
$statement4 = $db->prepare("UPDATE try SET ID = 3 , NAME = 'hahahaha' WHERE ID = :ID AND NAME = :Name");	// statement prepared, ready to be executed
$statement4->execute(array('ID' => '8', 'Name' => 'Try'));
showDB();
?>