<?php				
header("Content-Type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>"; ?>
<!DOCTYPE rss PUBLIC "-//Netscape Communications//DTD RSS 0.91//EN"
"http://my.netscape.com/publish/formats/rss-0.91.dtd">
<rss version="0.91">
	<channel>
		<?php
			$db = new PDO("mysql:host=localhost;dbname=try","root","2966231512");
			$statement = $db->prepare('SELECT * FROM try');
			$statement->execute();
			while($row = $statement->fetch()){
				echo "<record>\n";
				echo "<ID>".$row['ID']."</ID>\n";
				echo "<NAME>".$row['NAME']."</NAME>\n";
				echo "</record>\n";
			}
		?>
	</channel>
</rss>