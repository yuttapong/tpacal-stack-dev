<?php 
$pdo = new \PDO("mysql:host=mysql;dbname=tpacal;port=3306;charset=utf8", 'user', '1234');
$pdo->setAttribute(\PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

$rows = $pdo->query("SELECT * FROM provinces");
foreach ($rows as $row) {
    echo $row['name_th'] . PHP_EOL;
}

echo phpinfo();