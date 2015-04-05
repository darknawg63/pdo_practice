<?php
// Create the connection
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=employees', 'root', 'password');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die($e->getMessage());
}
$name = 'Georgi';
$sql = "SELECT * FROM employees WHERE `first_name` = ? LIMIT 1";
$query = $conn->prepare($sql);

$query->execute(array($name));

while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo json_encode($row);
}
