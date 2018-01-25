<?php

	$volume = htmlspecialchars($_GET["volume"]);
	$s = time();
        try
        {
        $db = new PDO('sqlite:mydatabase.db');
	$db->exec("INSERT INTO vol VALUES(date('now'), time('now')," . $volume . " , " . $s . ")");
	echo "\r\n";
        echo $s;
	echo "\r\n";
	echo "Row Inserted\n";
        }

        catch(PDOException $e)
        {
        print $e->getMessage();
        }
?>
