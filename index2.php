<?php
// Create the connection
require_once 'core/init.php';

$name = 'Georgi';

$employee = DB::getInstance();
$results = $employee->query("SELECT * FROM employees WHERE `first_name` = ? LIMIT 10", array('Georgi'));


foreach($results->results() as $row) {
    echo $row->last_name, '<br>';
}
//$sql = "SELECT * FROM employees WHERE `first_name` = ? LIMIT 1";
//$query = $conn->prepare($sql);

//$query->execute(array($name));

//while($row = $query->fetch(PDO::FETCH_ASSOC)) {
//    echo json_encode($row);
//}
