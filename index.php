<?php
// Create the connection
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=employees', 'root', 'password');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die($e->getMessage());
}

class GuestbookEntry {
    public $emp_no, $first_name, $last_name, $gender, $entry;

    public function __construct() {
        $this->entry = " Hi, my name is {$this->first_name}.";
    }
}

// Create the query on the connection
$query = $conn->query('SELECT * FROM employees LIMIT 6');
// Set the fetch mode "FETCH_NUM, FETCH_BOTH, FETCH_ASSOC, FETCH_CLASS"
$query->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry');
// Fetch the results from our query.
while($r = $query->fetch()) {
    echo $r->entry, '<br>';
}