<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=employees', 'root', 'password');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die($e->getMessage());
}

$query = $conn->query('SELECT * FROM employees LIMIT 6');

while($r = $query->fetch()) {
    echo $r['first_name'], '<br>';
}