<?php

	$db = new SQLite3('mydatabase.db');

	$results = $db->query('SELECT * FROM vol');
?>
<html>
<head>
<script type="text/javascript" src="sorttable.js"></script>
<style>
table.sortable {
	border: none;
	border:1px solid #000;
	border-spacing: 0px;
	min-width: 1000px;
}

table.sortable thead {
    background-color:#909090;
    color:#000000;
    cursor: default;
	font-family: Consolas, monaco, monospace;
	font-size: 14px;
}

table.sortable th, td {
	padding: 5px;
	text-align: center;
}

table.sortable td {
	font-family: Consolas, monaco, monospace;
	font-size: 14px;
	background-color: #fff;
	border-bottom: 1px solid #909090;
}
</style>
</head>
<body>
<center>
<table class="sortable">
<thead>
<tr>
<th>Date</th>
<th>Time</th>
<th>Volume</th>
<th>Timestamp</th>
</tr>
</thead>
<tbody>
<?php
	while($row = $results->fetchArray(SQLITE3_ASSOC))
	{
		$tdate = $row['tdate'];
		$ttime = $row['ttime'];
		$volume = $row['volume'];
		$timestamp = $row['timestamp'];
?>
<tr>
<td class="trow"><?php echo $tdate; ?></td>
<td class="trow"><?php echo $ttime; ?></td>
<td class="trow"><?php echo $volume; ?></td>
<td class="trow"><?php echo $timestamp; ?></td>
</tr>
<?php
	}
?>
</tbody>
</table>
</center>
</body>
</html>
<?php
$db->close();
?>
