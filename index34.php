<?php

	$db = new SQLite3('mydatabase.db');

	$results = $db->query('SELECT * FROM vol');

	$rowtest = array();
	$i=0;

	while($row = $results->fetchArray(SQLITE3_ASSOC))
	{
		$rowtest[$i]['volume'] = $row['volume'];
		$i++;
	}
	
	echo $rowtest[0]['volume'];

	$db->close();

?>

<html>

<body>

<table border=1>
	<caption>ISEP COISO</caption>

<tr>
	<td>Volume</td>
	<td><?php echo $rowtest[0]['volume']; ?></td>
</tr>

</table>

</body>

</html>

