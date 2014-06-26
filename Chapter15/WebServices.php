<?php
	$db = new PDO ("mysql:host=localhost;dbname=try","root","2966231512");
	$sql = $db->prepare("SELECT * FROM try");
	$sql->execute();
		echo "
			<table border=1>
				<tr>
					<td>ID</td>
					<td>NAME</td>
				</tr>";
		while($rec = $sql->fetch()){
			echo "<tr>
					<td>".$rec['ID']."</td>
					<td>".$rec['NAME']."</td>
					</tr>";
		}
		echo "</table>";
	$sql = $db->prepare("SELECT * FROM try");
	$sql->execute();
	$fetched = $sql->fetch();
	echo "<h4>Json Encoded</h4>";
	$jsonData = json_encode($fetched); // data turned into JSON
	echo $jsonData;
	echo "<h4>Json Decoded</h4>";
	$jsonDecoded = json_decode($jsonData);
	print_r($jsonDecoded);


	echo "<h4>Retrieving Resources</h4>";
		$url = "http://facebook.com";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);

		$response = curl_exec($ch);
		$resultInfo = curl_getinfo($ch);

		curl_close($ch);

		$Decoded = json_decode($response);
		print_r($Decoded);


	echo "<h4>Creating Resources</h4>";
		class Romz{
			public $Romz;
		}
		$romz = new Romz;
		$romz->Romz = "Romz Vargas";
		$RomzData = array("Romz" => json_encode($romz));
		$requestData = http_build_query($RomzData, '','&');

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
		curl_setopt($ch, CURLOPT_POST, TRUE);

		$response = curl_exec($ch);
		$resultInfo = curl_getinfo($ch);

		curl_close($ch);

		$Decoded = json_decode($response);
		print_r($Decoded);
		print_r($RomzData);

	echo "<h4>Deleting Resources</h4>";
		$toDelete = json_encode("Romz Vargas");
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url."/Romz/{$toDelete}");

		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
		
		$response = curl_exec($ch);
		$resultInfo = curl_getinfo($ch);

		curl_close($ch);

		$Decoded = json_decode($response);
		print_r($Decoded);

?>